<?php

class App {
	protected $controller = 'Medical';
	protected $method = 'index';
	protected $params = [];
	
	public function __construct() {
		$url = $this->parseURL();
		
		if ( !isset($url[0])) {
			$url[0] = $this->controller;		
		}
	
		if ( file_exists('controllers/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once 'controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		if ( isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		if ( !empty($url)) {
			$this->params = array_values($url);
		}

		// jalankan controller dan method serta kirimkan parameternya jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseURL() {
		if ( isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}
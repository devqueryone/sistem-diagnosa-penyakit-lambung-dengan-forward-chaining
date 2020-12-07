
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="card shadow">
	            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample" style="text-decoration: none">
	            	<h6 class="m-0 font-weight-bold text-danger">Inputkan gejala yang dialami</h6>
	            </a>
	            <div class="collapse show" id="collapseCardExample">
					<div class="card-body">
						<form method="post" action="<?= BASEURL; ?>medical/hasilDiagnosis">
							  	<div style="overflow: scroll; height: 350px;">
							  		<?php foreach ($data['gejala'] as $row) : ?>
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <div class="input-group-text">
									      <input type="checkbox" aria-label="Checkbox for following text input" value="<?=$row['kode']?>" name="<?=$row['id']?>">
									    </div>
									  </div>
							  			<input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $row['gejala']?>" disabled>
									</div>
									<?php endforeach; ?>
							  	</div>
							<input type="submit" class="btn btn-outline-danger rounded-0 btn-block" name="submit" value="DIAGNOSA">
						</form>
					</div>
	            </div>
        	</div>
		</div>
	</div>
</div>
	

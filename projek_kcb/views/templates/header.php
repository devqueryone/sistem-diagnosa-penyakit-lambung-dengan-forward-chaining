<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?= BASEURL; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>assets/font-awesome/css/all.css">
  <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
  <div class="container-fluid">
    <div class="row shadow-sm p-1 bg-info mb-1 shadow-sm">
      <div class="col-sm text-white" style="font-family: Footlight MT Light">
        <h5 class="pl-3 text-capitalize"><i>online information system</i></h5>
        <h5 style="margin-top: -10px" class="pl-3 text-capitalize"><i>Gastric disease diagnosis system</i></h5>
      </div>
    </div>
  </div>

  <!-- Example single danger button -->
  <nav class="navbar navbar-expand-lg navbar-light bg-danger p-0">
    <div class="container-fluid">
      <a class="navbar-link navbar-brand text-white text-capitalize" href="#">administrator</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-capitalize text-white" href="#profile-menu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            admin
            </a>
            <div class="dropdown-menu text-capitalize bg-transparent border-0" style="margin-left: -15px" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-dark rounded" href="google.com">my acount</a>
              <a class="dropdown-item text-dark rounded" href="google.com">logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <div class="container-fluid content">
    <div class="row">
      <!-- =============================== -->
      <!-- bagian menu -->
      <div class="col-sm-2 bg-dark pb-5">
        <div class="navbar-nav bg-dark">

            <a class="text-white nav-link bg-dark text-left pl-2 mt-2" href="<?= BASEURL; ?>medical"><i class="fas fa-tachometer-alt"></i> Dashboard</a><br>
            <a href="#profil-menu" class="nav-link bg-dark text-white text-left collapsed pl-2 pr-1" data-toggle="collapse"><i class="fas fa-fw fa-address-card"></i> Medical <i style="float: right" class="fas fa-sort-down"></i></a><br>
                <ul id="profil-menu" class="nav nav-link collapse p-0">
                    <li class="btn-dark p-0 pl-3"><a href="<?= BASEURL; ?>medical/jenisPenyakit" class="nav-link text-white"><i class="text-info far fa-fw fa-circle"></i> Jenis Penyakit</a></li>
                    <li class="btn-dark p-0 pl-3"><a class="nav-link text-white" href="<?= BASEURL; ?>medical/diagnosis"><i class="text-info far fa-fw fa-circle"></i> Konsultasi</a></li>
                </ul>
            <a class="bg-dark text-left text-white nav-link pl-2" href=""><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
      </div>
      <div class="col-sm-10 text-secondary">
         <!-- dinamic content isi -->
        <div class="row p-1">
          <div class="col-sm header bg-light border shadow-sm p-2">
            <h4 class="page-title ml-3 text-danger" style="font-family: Engravers MT"><?= $data['judul']; ?></h4>
            <hr>
         
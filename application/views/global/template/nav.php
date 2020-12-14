<?php 
  $this->db->select('id_jurusan,nama,kelas');
  $this->db->order_by('kelas','ASC');
  $data = $this->db->get('tb_jurusan')->result_array();

 ?>

<body class="hold-transition layout-top-nav">
<div class="wrapper ">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand" >
        <img src="<?=  base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Buku Induk</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?=  base_url() ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('profil') ?>" class="nav-link">Profil Sekolah</a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('Buku_induk') ?>" class="nav-link">Buku Induk Siswa</a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('guru') ?>" class="nav-link">Data Guru</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kelas</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <?php foreach ($data as $dat): ?>
                <li><a href="<?=  base_url('kelas/index') ?>/<?=  $dat['id_jurusan'] ?>" class="dropdown-item"><?=  $dat['nama'] ?> <?=  $dat['kelas'] ?></a></li>
              <?php endforeach ?>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Mata Pelajaran Per</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Kelas</a></li>
              <li><a href="#" class="dropdown-item">guru</a></li>
            </ul>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- /.navbar -->
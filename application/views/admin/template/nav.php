<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=  base_url() ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=  base_url('login/logout') ?>" class="nav-link btn btn-danger btn-sm" style="color: white;">Logout</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a href="<?=  base_url('admin') ?>" class="brand-link">
          <img src="<?=  base_url() ?>upload/admin/default.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light" style="color: rgba(0,0,0,.7);">Admin</span>
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=  base_url('admin') ?>" class="brand-link">
      <img src="<?=  base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Buku Induk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item brand-link ">
            <a href="<?=  base_url('admin/dasboard') ?>" <?php if ($this->uri->segment(2) == 'dasboard') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dasboard</p>
            </a>
          </li>
          <li class="nav-header">TABEL</li>
          <li class="nav-item">
            <a href="" <?php if ($this->uri->segment(2) == 'ruangan') {echo "class='nav-link active'";} ?> class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ruangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=  base_url('admin/ruangan/umum') ?>" <?php if ($this->uri->segment(3) == 'umum') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=  base_url('admin/ruangan/bengkel') ?>" <?php if ($this->uri->segment(3) == 'bengkel') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bengkel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=  base_url('admin/ruangan/globe') ?>" <?php if ($this->uri->segment(3) == 'globe') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/mapel') ?>" <?php if ($this->uri->segment(2) == 'mapel') {echo "class='nav-link active'";} ?> class="nav-link" class="nav-link">
              <i class="fas fa-copy nav-icon"></i>
              <p>Mata Pelajaran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/jurusan') ?>" <?php if ($this->uri->segment(2) == 'jurusan') {echo "class='nav-link active'";} ?> class="nav-link" class="nav-link">
              <i class="fas fa-tree nav-icon"></i>
              <p>Jurusan</p>
            </a>
          </li>

          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/buku_induk') ?>" <?php if ($this->uri->segment(2) == 'buku_induk') {echo "class='nav-link active'";} ?> class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku Induk Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" <?php if ($this->uri->segment(2) == 'siswa' && $this->uri->segment(3) != 'alumni') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Siswa Per Kelas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=  base_url('admin/siswa/perkelas/X') ?>" <?php if ($this->uri->segment(4) == 'X') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>X</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=  base_url('admin/siswa/perkelas/XI') ?>" <?php if ($this->uri->segment(4) == 'XI') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>XI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=  base_url('admin/siswa/perkelas/XII') ?>" <?php if ($this->uri->segment(4) == 'XII') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>XII</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/siswa/alumni') ?>" <?php if ($this->uri->segment(3) == 'alumni') {echo "class='nav-link active'";} ?> class="nav-link" class="nav-link">
              <i class="fas fa-user-alt-slash nav-icon"></i>
              <p>Siswa Alumni</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/guru') ?>" <?php if ($this->uri->segment(2) == 'guru') {echo "class='nav-link active'";} ?>  class="nav-link">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>Guru</p>
            </a>
          </li>

          <li class="nav-header">PROSES</li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/kelas/pindah') ?>" <?php if ($this->uri->segment(3) == 'pindah') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="fas fa-arrow-circle-right nav-icon"></i>
              <p>Pindah Kelas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/kelas/lulus') ?>" <?php if ($this->uri->segment(3) == 'lulus') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="fas fa-times-circle nav-icon"></i>
              <p>Lulus Kelas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/kelas/naik') ?>" <?php if ($this->uri->segment(3) == 'naik') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="fas fa-arrow-circle-up nav-icon"></i>
              <p>Naik Kelas</p>
            </a>
          </li>
       
          <li class="nav-header">MANAGEMEN</li>
          <li class="nav-item">
            <a href="<?=  base_url('admin/profil') ?>" <?php if ($this->uri->segment(2) == 'profil') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="fas fa-archway nav-icon"></i>
              <p>Profil Sekolah</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" <?php if ($this->uri->segment(2) == 'adm_mapel') {echo "class='nav-link active'";} ?> class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Administrasi Jadwal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=  base_url('admin/adm_mapel/index') ?>" <?php if ($this->uri->segment(3) == 'index') {echo "class='nav-link active'";} ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Per Guru</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Jadwal Per Kelas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>X</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>XI</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>XII</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Per Ruang</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>Master Petugas</p>
            </a>
          </li>
        </ul>
        <br>
        <br>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
<!--           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ruangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bengkel</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li> -->
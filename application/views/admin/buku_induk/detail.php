  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/buku_induk') ?>">buku induk</a></li>
              <li class="breadcrumb-item active">detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-12 col-md-12 ">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Siswa
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?=  $row->nama_siswa ?></b></h2>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="medium">NIP : <?=  $row->nisn ?></li>
                        <li class="medium">NUPTK : <?=  $row->nis ?></li>
                        <li class="medium">Tempat tanggal lahir : <?=  $row->tmp_lahir ?>,<?=  $row->tgl_lahir ?></li>
                        <li class="medium">Jenis kelamin : <?=  $row->jk ?></li>
                        <li class="medium">Agama : <?=  $row->agama ?></li>
                        <li class="medium">Alamat : <?=  $row->alamat ?></li>
                        <li class="medium">Nama ayah : <?=  $row->nama_ayah ?></li>
                        <li class="medium">Nama Ibu : <?=  $row->nama_ibu ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?=  base_url() ?>upload/siswa/<?=  $row->foto ?>" alt="" class="img-circle img-fluid" style="max-height: 256px;max-width: 256px;">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-copy"></i> Lihat Nilai Siswa 
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
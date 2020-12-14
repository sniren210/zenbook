
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile SMKN 1 Majalengka</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/profil') ?>">Profil</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3" >
            <div class="card card-primary ">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=  base_url() ?>assets/admin/dist/img/logo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">SMKN 1 Majalengka</h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <span>NSS : <?=  $row->nss ?></span>
                  </li>
                  <li class="list-group-item">
                    <span>NIS : <?=  $row->nis ?></span>
                  </li>
                  <li class="list-group-item">
                    <span>NPSN : <?=  $row->npsn ?></span>
                  </li>
                  <li class="list-group-item">
                    <span>Status Akreditasi : <?=  $row->akreditas ?></span>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9" >
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Alamat</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Akademik</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Kepala Sekolah</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <span>Provinsi : <?=  $row->prov ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Kabupaten : <?=  $row->kab ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Kecamatan : <?=  $row->kec ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Desa : <?=  $row->desa ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Jalan : <?=  $row->jln ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Kode Pos : <?=  $row->kd_pos ?></span>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <span>Program Studi : <?=  $row->prodi ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Kelas Kompetensi : </span>
                        <ul class="list-group" style="margin-left: 15px;">
                          <?php foreach ($jurusan as $data): ?>
                            <li><?=  $data['nama'] ?></li>
                          <?php endforeach ?>
                        </ul>
                      </li>
                      <li class="list-group-item">
                        <span>Jumlah Guru : <?=  $row->jml_guru ?></span>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <span>Nama Kepala Sekolah : <?=  $row->nama ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>NIP : <?=  $row->nip ?></span>
                      </li>
                      <li class="list-group-item">
                        <span>Pendidikan Terakhir : </span>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
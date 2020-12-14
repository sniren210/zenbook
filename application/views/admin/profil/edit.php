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
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?=  base_url('admin/profil/edit') ?>" method="post">
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
                    <span>NSS : </span>
                    <input type="text" class="form-control" name="nss" id="inputName" value="<?=  $row->nss ?>">
                    <?= form_error('nss', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                  </li>
                  <li class="list-group-item">
                    <span>NIS : </span>
                    <input type="text" class="form-control" name="nis" id="inputName" value="<?=  $row->nis ?>">
                    <?= form_error('nis', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                  </li>
                  <li class="list-group-item">
                    <span>NPSN : </span>
                    <input type="text" class="form-control" name="npsn" id="inputName" value="<?=  $row->npsn ?>">
                    <?= form_error('npsn', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                  </li>
                  <li class="list-group-item">
                    <span>Status Akreditasi : </span>
                    <input type="text" class="form-control" name="akreditas" id="inputName" value="<?=  $row->akreditas ?>">
                    <?= form_error('akreditas', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
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
                        <span>Provinsi : </span>
                        <input type="text" class="form-control" name="prov" id="inputName" value="<?=  $row->prov ?>">
                        <?= form_error('prov', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                      <li class="list-group-item">
                        <span>Kabupaten : </span>
                        <input type="text" class="form-control" name="kab" id="inputName" value="<?=  $row->kab ?>">
                        <?= form_error('kab', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                      <li class="list-group-item">
                        <span>Kecamatan : </span>
                        <input type="text" class="form-control" name="kec" id="inputName" value="<?=  $row->kec ?>">
                        <?= form_error('kec', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                      <li class="list-group-item">
                        <span>Desa : </span>
                        <input type="text" class="form-control" name="desa" id="inputName" value="<?=  $row->desa ?>">
                        <?= form_error('desa', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                      <li class="list-group-item">
                        <span>Jalan : </span>
                        <input type="text" class="form-control" name="jln" id="inputName" value="<?=  $row->jln ?>">
                        <?= form_error('jln', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                      <li class="list-group-item">
                        <span>Kode Pos : </span>
                        <input type="text" class="form-control" name="kd_pos" id="inputName" value="<?=  $row->kd_pos ?>">
                        <?= form_error('kd_pos', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <span>Program Studi : </span>
                        <input type="text" class="form-control" name="prodi" id="inputName" value="<?=  $row->prodi ?>">
                        <?= form_error('prodi', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                      <li class="list-group-item">
                        <span>Kompetensi : </span>
                        <ul class="list-group" style="margin-left: 15px;">
                          <?php foreach ($jurusan as $data): ?>
                            <li><?=  $data['nama'] ?></li>
                          <?php endforeach ?>
                        </ul>
                      </li>
                      <li class="list-group-item">
                        <span>Jumlah Guru : </span>
                        <input type="text" class="form-control" name="jml_guru" id="inputName" value="<?=  $row->jml_guru ?>">
                        <?= form_error('jml_guru', '<span id="" class="error invalid" style="color:salmon;">', '</span>')?>
                      </li>
                    </ul>
                    <div class="text-muted mt-3">
                      <i>note : Mengedit kompetensi jurusan di halaman jurusan</i>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                  <div class="form-group">
                      <label>Ganti Kepala Sekolah</label>
                      <select class="form-control" name="kepsek">
                        <?php foreach ($guru as $data): ?>
                          
                          <option value="<?=  $data['id_guru'] ?>"><?=  $data['nama'] ?></option>
                        <?php endforeach ?>                      
                      </select>
                    </div>
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
      <div class="row">
        <div class="col-12">
          <a href="<?=  base_url('admin/profil') ?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
</div>
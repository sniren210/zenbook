  <style type="text/css">
    .invalid{
      width: 100%;
      margin-top: .25rem;
      font-size: 80%;
      color:#dc3545;
    }
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Tambah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/buku_induk') ?>">buku_induk</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
      echo form_open_multipart('admin/buku_induk/tambah');
       ?> 
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
           <?php if ($this->session->flashdata('gagal')): ?>                 
               <div class="alert alert-danger" role="alert">
                  <?=  $this->session->flashdata('gagal'); ?>
              </div>
           <?php endif ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">NISN</label>
                <input type="text" id="inputName" class="form-control " name="nisn">
                <?= form_error('nisn', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">NIS</label>
                <input type="text" id="inputName" class="form-control " name="nis">
                <?= form_error('nis', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">Nama</label>
                <input type="text" id="inputName" class="form-control " name="nama">
                <?= form_error('nama', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                  <label>Tempat Tanggal Lahir</label>
                <div class="row">                
                  <textarea class="form-control col-sm-8" rows="1" name="tmp_lahir" value="<?= set_value('tmp_lahir'); ?>"></textarea>
                  <input type="date" id="inputName" class="form-control col-sm-4" name="tgl_lahir">
                  <?= form_error('tmp_lahir', '<span id="" class="error invalid">', '</span>')?>
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                  <label class="form-check-label" >Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                  <label class="form-check-label" >Perempuan</label>
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Islam">
                  <label class="form-check-label" >Islam</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Kristen">
                  <label class="form-check-label" >Kristen</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Hindu">
                  <label class="form-check-label" >Hindu</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Budha">
                  <label class="form-check-label" >Budha</label>
                </div>
              </div>
              <div class="form-group">
                <label for="inputName">Anak Ke</label>
                <input type="number" id="inputName" class="form-control " name="anakKe">
                <?= form_error('anakKe', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" value="<?= set_value('alamat'); ?>"></textarea>
                <?= form_error('alamat', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">Nama Ayah</label>
                <input type="text" id="inputName" class="form-control " name="nama_ayah">
                <?= form_error('nama_ayah', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">Nama Ibu</label>
                <input type="text" id="inputName" class="form-control " name="nama_ibu">
                <?= form_error('nama_ibu', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                 <select class="form-control custom-select" name="status">
                  <option value="aktif">Aktif</option>
                  <option value="keluar">Keluar</option>
                  <option value="lulus">Lulus</option>
                  <option value="pindah">Pindah</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Siswa</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="gambar">
                   </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="<?=  base_url('admin/buku_induk') ?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      <?php echo form_close() ?> 
    </section>
    <!-- /.content -->
  </div>
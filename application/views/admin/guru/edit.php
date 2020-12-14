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
            <h1>Project edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/guru') ?>">guru</a></li>
              <li class="breadcrumb-item active">edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
      echo form_open_multipart('admin/guru/edit/'.$row->id_guru);
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
                <label for="inputName">NIP</label>
                <input type="text" id="inputName" class="form-control " name="nip" value="<?=  $row->nip ?>">
                <?= form_error('nip', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">NUPTK</label>
                <input type="text" id="inputName" class="form-control " name="nuptk" value="<?=  $row->nuptk ?>">
                <?= form_error('nuptk', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">NRG</label>
                <input type="text" id="inputName" class="form-control " name="nrg" value="<?=  $row->nrg ?>">
                <?= form_error('nrg', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">NPWP</label>
                <input type="text" id="inputName" class="form-control " name="npwp" value="<?=  $row->npwp ?>">
                <?= form_error('npwp', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">Nama guru</label>
                <input type="text" id="inputName" class="form-control" name="nama" value="<?=  $row->nama ?>" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <textarea class="form-control" rows="3" name="tmp_lahir" value="<?= set_value('tmp_lahir'); ?>"><?=  $row->tmp_lahir ?></textarea>
                <?= form_error('tmp_lahir', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">Tanggal Lahir</label>
                <input type="date" id="inputName" class="form-control " name="tgl_lahir" value="<?=  $row->tgl_lahir ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jk" value="Laki-laki" <?php if ($row->jk == 'Laki-laki'){echo "checked";} ?>>
                  <label class="form-check-label" >Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio"  name="jk" value="Perempuan" <?php if ($row->jk == 'Perempuan'){echo "checked";} ?>>
                  <label class="form-check-label" >Perempuan</label>
                </div>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Islam" <?php if ($row->agama == 'Islam'){echo "checked";} ?>>
                  <label class="form-check-label" >Islam</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Kristen" <?php if ($row->agama == 'Kristen'){echo "checked";} ?>>
                  <label class="form-check-label" >Kristen</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Hindu" <?php if ($row->agama == 'Hindu'){echo "checked";} ?>>
                  <label class="form-check-label" >Hindu</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="agama" value="Budha" <?php if ($row->agama == 'Budha'){echo "checked";} ?>>
                  <label class="form-check-label" >Budha</label>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" value="<?= set_value('alamat'); ?>"><?=  $row->alamat ?></textarea>
                <?= form_error('alamat', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Poto Guru</label>
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
          <a href="<?=  base_url('admin/guru') ?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      <?php echo form_close() ?> 
    </section>
    <!-- /.content -->
  </div>
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
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/jurusan') ?>">Jurusan</a></li>
              <li class="breadcrumb-item active">edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="post" action="<?=  base_url('admin/jurusan/edit/') ?><?=  $row->id_jurusan ?>">              
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Jurusan</label>
                <input type="text" id="inputName" class="form-control" name="nama" value="<?=  $row->nama ?>" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputName">Kapasitas</label>
                <input type="text" id="inputName" class="form-control " name="kapasitas" value="<?=  $row->kapasitas ?>">
                <?= form_error('kapasitas', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label for="inputStatus">Kelas</label>
                 <select class="form-control custom-select" name="kelas">
                  <option <?php if ($row->kelas == 'X') {echo "selected";} ?> value="X">X</option>
                  <option <?php if ($row->kelas == 'XI') {echo "selected";} ?> value="XI">XI</option>
                  <option <?php if ($row->kelas == 'XII') {echo "selected";} ?> value="XII">XII</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Wali Kelas</label>
                 <select class="form-control custom-select" name="wali_kelas">
                  <?php foreach ($guru as $data): ?>                  
                    <option <?php if ($row->id_waliKelas == $data['id_guru'] ) {echo "selected";} ?> value="<?=  $data['id_guru'] ?>"><?=  $data['nama'] ?></option>
                  <?php endforeach ?>
                 </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="<?=  base_url('admin/jurusan') ?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
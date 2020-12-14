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
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/mapel') ?>">mata pelajaran</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="post" action="<?=  base_url('admin/mapel/edit/'.$row->id_mapel) ?>">              
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama mapel</label>
                <input type="text" id="inputName" class="form-control" name="nama" value="<?=  $row->nama ?>" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<span id="" class="error invalid">', '</span>')?>
              </div>
              <div class="form-group">
                <label>Semester</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="semester" value="1" <?php if($row->semester == 1) {echo "checked";}?>>
                  <label class="form-check-label" >1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="semester" value="2" <?php if($row->semester == 2) {echo "checked";}?>>
                  <label class="form-check-label" >2</label>
                </div>
              </div>
              <div class="form-group">
                <label for="inputName">KKM</label>
                <input type="text" id="inputName" class="form-control" name="kkm" value="<?=  $row->kkm ?>" value="<?= set_value('kkm'); ?>">
                <?= form_error('kkm', '<span id="" class="error invalid">', '</span>')?>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="<?=  base_url('admin/mapel') ?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
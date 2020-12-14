<div class="content-wrapper">
  <div class="container">
	
 <!-- DataTables -->
  <link rel="stylesheet" href="<?=  base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Mata pelajaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/mapel') ?>">mata pelajaran /</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
           <?php if ($this->session->flashdata('sukses')): ?>                 
               <div class="alert alert-success" role="alert">
                  <?=  $this->session->flashdata('sukses'); ?>
              </div>
           <?php endif ?>
           <?php if ($this->session->flashdata('gagal')): ?>                 
               <div class="alert alert-danger" role="alert">
                  <?=  $this->session->flashdata('gagal'); ?>
              </div>
           <?php endif ?>
            <div class="card-header">
              <a href="<?=  base_url('admin/mapel/tambah') ?>" class="btn btn-block btn-primary col-sm-1">Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama mapel</th>
                  <th>Semester</th>
                  <th>Kkm</th>
                  <th>Aksi </th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach ($row as $data): ?>
                    <tr>
                      <td><?=  $no ?></td>
                      <td><?=  $data['nama'] ?></td>
                      <td><?=  $data['semester'] ?></td>
                      <td><?=  $data['kkm'] ?></td>
                      <td>
                        <a href="<?=  base_url('admin/mapel/edit/') ?><?=  $data['id_mapel'] ?>" class="btn bg-gradient-success btn-sm">Edit</a>
                        <button type="button" class="btn bg-gradient-danger btn-sm" data-toggle="modal" data-target="#modal-danger-<?=  $data['id_mapel'] ?>">
                          Delete
                        </button>
                      </td>
                    </tr>
                  <?php $no++; endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama mapel</th>
                  <th>Semester</th>
                  <th>Kkm</th>
                  <th>Aksi </th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>

      <!-- /.modal -->
    <?php foreach ($row as $data): ?>
      
      <div class="modal fade" id="modal-danger-<?=  $data['id_mapel'] ?>">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>Yakin ingin menghapus <?=  $data['nama'] ?></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?=  base_url('admin/mapel/hapus/')?><?=  $data['id_mapel'] ?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <?php endforeach ?>
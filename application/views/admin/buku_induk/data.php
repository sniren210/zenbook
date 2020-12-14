<div class="content-wrapper">
  <div class="container">
  
 <!-- DataTables -->
  <link rel="stylesheet" href="<?=  base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Buku Induk Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/buku_induk') ?>">Buku induk /</a></li>
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
            <div class="card-header">
              <div class="row">
                <div class="col-sm-6">
                  <a href="<?=  base_url('admin/buku_induk/tambah') ?>" class="btn btn-primary ">Tambah</a>
                </div>
                <div class="col-sm-6">
                  <ol class=" float-sm-right">
                    <a class="btn btn-app">
                      <i class="fas fa-print"></i> Import
                    </a>
                    <a href="<?=  base_url('admin/buku_induk/export') ?>" class="btn btn-app">
                      <i class="fas fa-paste"></i> Export
                    </a>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                 <?php $no = 1; foreach ($row as $data): ?>
                    <tr>
                      <td><?=  $no ?></td>
                      <td><?=  $data['nisn'] ?></td>
                      <td><?=  $data['nis'] ?></td>
                      <td><?=  $data['nama_siswa'] ?></td>
                      <td><?=  $data['jk'] ?></td>
                      <td>
                        <a href="<?=  base_url('admin/buku_induk/detail/') ?><?=  $data['id_siswa'] ?>" class="btn bg-gradient-primary btn-sm">Detail</a>
                        <a href="<?=  base_url('admin/buku_induk/edit/') ?><?=  $data['id_siswa'] ?>" class="btn bg-gradient-success btn-sm">Edit</a>
                        <button type="button" class="btn bg-gradient-danger btn-sm" data-toggle="modal" data-target="#modal-danger-<?=  $data['id_siswa'] ?>">
                          Delete
                        </button>
                      </td>
                    </tr>
                  <?php $no++; endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
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
      
      <div class="modal fade" id="modal-danger-<?=  $data['id_siswa'] ?>">
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
              <a href="<?=  base_url('admin/buku_induk/hapus/')?><?=  $data['id_siswa'] ?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <?php endforeach ?>
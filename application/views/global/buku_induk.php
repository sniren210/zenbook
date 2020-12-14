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
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
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
                        <a href="<?=  base_url('buku_induk/detail/') ?><?=  $data['id_siswa'] ?>" class="btn bg-gradient-primary btn-sm">Detail</a>
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

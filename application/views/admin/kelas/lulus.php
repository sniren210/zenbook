<div class="content-wrapper">
  <div class="container">
  
 <!-- DataTables -->
  <link rel="stylesheet" href="<?=  base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel lulus kelas Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/kelas/lulus') ?>">lulus kelas /</a></li>
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
              <label>Pilih kelas</label>
              <div class="row">                
                <div class="form-group col-sm-7" >
                   <select class="form-control custom-select" name="lulus" onchange="window.location.href=this.options
                    [this.selectedIndex].value">
                    <option selected="">Pilih kelas</option>
                      <?php foreach ($jurusan as $datas): ?>
                        <option value="?pilihan=<?=  $datas['id_jurusan'] ?>">
                          <?=  $datas['nama'] ?> - <?=  $datas['kelas'] ?>
                        </option>
                      <?php endforeach ?>
                    <option value="?pilihan=0">Yang Belum memiliki kelas</option>
                   </select>
                </div>
                <div class="form-group col-sm-3" >
                  <a href="<?=  base_url('admin/kelas/lulus') ?>" class="btn btn-primary"> Semua kelas</a>                  
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
                  <th>Kelas</th>
                  <th>lulus</th>
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
                      <td><?=  $data['kelas'] ?> <?=  $data['nama'] ?></td>
                      <td>
                        <a href="<?=  base_url('admin/kelas/lulus/') ?><?=  $data['id_siswa'] ?>" class="btn btn-success">Luluskan</a>
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
                  <th>Kelas</th>
                  <th>lulus</th>
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


<div class="content-wrapper">
  <div class="container">
  
 <!-- DataTables -->
  <link rel="stylesheet" href="<?=  base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel kelas Siswa <?php if (isset($point)){echo $point;} ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=  base_url('admin/siswa/perkelas') ?>">siswa perkelas /</a></li>
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
              <div class="form-group col-sm-3" >
                <label>Pilih Jurusan</label>
                 <select class="form-control custom-select" name="pindah" onchange="window.location.href=this.options
                  [this.selectedIndex].value">
                      <option value="<?=  base_url('admin/siswa/perkelas') ?>/<?= $this->uri->segment(4)  ?>" <?php if ($this->uri->segment(5) == null) {echo "selected";} ?>>Semua Jurusan</option>
                    <?php foreach ($jurusan as $data): ?>
                      <option value="<?=  base_url('/admin/siswa/perkelas') ?>/<?= $this->uri->segment(4)  ?>/<?=  $data['nama'] ?>" 
                        <?php if ($data['nama'] == $this->uri->segment(5)) {echo "selected";} ?>>
                        <?=  $data['nama'] ?>
                        </option>
                    <?php endforeach ?>
                 </select>
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
                  <th>Pindah</th>
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
                  <th>Pindah</th>
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

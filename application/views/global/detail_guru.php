<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-12 col-md-12 ">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Guru
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?=  $row->nama ?></b></h2>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="medium">NIP : <?=  $row->nip ?></li>
                        <li class="medium">NUPTK : <?=  $row->nuptk ?></li>
                        <li class="medium">NRG : <?=  $row->nrg ?></li>
                        <li class="medium">NPWP : <?=  $row->npwp ?></li>
                        <li class="medium">Tempat tanggal lahir : <?=  $row->tmp_lahir ?>,<?=  $row->tgl_lahir ?></li>
                        <li class="medium">Jenis kelamin : <?=  $row->jk ?></li>
                        <li class="medium">Agama : <?=  $row->agama ?></li>
                        <li class="medium">Alamat : <?=  $row->alamat ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?=  base_url() ?>upload/guru/<?=  $row->foto ?>" alt="" class="img-circle img-fluid" style="max-height: 256px;max-width: 256px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</div>
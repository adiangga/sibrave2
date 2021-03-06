<section class="content">
  <div class="container-fluid">

    <div class="row">
      <?php foreach ($kegiatan as $r) : ?>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
          <div class="card">
            <div class="card-header text-muted border-bottom-0">
              <?= $r['jenis']; ?>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b><?= $r['nama']; ?></b></h2>
                  <ul class="ml-4 mt-3 mb-0 fa-ul text-muted">
                    <li class="small mb-1"><span class="fa-li"><i class="fa fa-calendar-check-o"></i></span> Mulai: <?= tanggal($r['tgl_mulai']); ?>
                    </li>
                    <li class="small"><span class="fa-li"><i class="fa fa-calendar-times-o"></i></span> Selesai: <?= tanggal($r['tgl_selesai']); ?></li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="<?= base_url('assets/img/') . $r['file']; ?>" alt="" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="<?= base_url('home/detail/') . $r['id']; ?>" class="btn btn-outline-info">
                  <i class="fa fa-search"></i> Informasi Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card card-gray">
          <div class="card-header">
            <h5 class="card-title"><i class="fa fa-bar-chart"></i> Grafik Kegiatan</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="barChart" style="height:230px"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa fa-bullhorn"></i>
              Identitas Petugas
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>Nama dan NIK</h5>

              <p><?= $petugas['nama']; ?>, NIK <?= $petugas['nik']; ?></p>
            </div>
            <div class="callout callout-info">
              <h5>Alamat</h5>

              <p><?= $petugas['alamat']; ?></p>
            </div>
            <div class="callout callout-warning">
              <h5>Rekening</h5>

              <p>Nomor : <?= $petugas['rekening']; ?> Pada : <?= $petugas['nama_bank']; ?> Atas Nama <?= $petugas['nama_rek']; ?></p>
            </div>
            <div class="callout callout-success">
              <h5>NPWP</h5>

              <p> <?= $petugas['npwp']; ?></p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <div class="card-header">

            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="">Target :</label>
                <input type="text" name="jml" class="form-control <?= form_error('jml') ? 'is-invalid' : '' ?>" value="<?= $target['jml']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('jml') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Satuan Biaya :</label>
                <input type="text" name="satuan" class="form-control <?= form_error('satuan') ? 'is-invalid' : '' ?>" value="<?= $target['satuan']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('satuan') ?>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('kegiatan/petugas-index/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
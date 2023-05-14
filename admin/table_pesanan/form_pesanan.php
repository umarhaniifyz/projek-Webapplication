<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="table_pesanan/proses_pesanan.php">
  <div class="form-group row mb-2">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="alamat_pemesanan" class="col-4 col-form-label">Alamat</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="no_hp" class="col-4 col-form-label">No.HP</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="no_hp" name="no_hp" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="email" name="email" type="email" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
          </div>
          <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" value="">
        </div>
      </div>
    </div>
    <div class="form-group row mb-2">
      <label for="deskripsi" class="col-4 col-form-label">Deskripsi Pesanan</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
          </div>
          <textarea name="deskripsi" id="deskripsi" cols="100" rows="5"></textarea>
        </div>
      </div>
    </div>
    <div class="form-group row mb-2">
      <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
          </div>
          <input id="produk_id" name="produk_id" type="text" class="form-control" value="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
          echo 'Update';
        } else {
          echo 'Simpan';
        } ?>" />
      </div>
    </div>
  </div>
  <input type="hidden" name="idedit" value="<?php echo isset($_GET['idedit']) ? $_GET['idedit'] : ''; ?>">
</form>
</div>
</div>
</form>
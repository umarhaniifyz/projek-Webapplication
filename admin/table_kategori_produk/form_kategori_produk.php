<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="table_kategori_produk/kategori_produk.php">
  <div class="form-group row mb-2">
    <label for="nama" class="col-4 col-form-label">Nama Kategori Produk</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="">
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
</form>
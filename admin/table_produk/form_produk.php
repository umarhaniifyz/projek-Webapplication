<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="table_kategori_produk/kategori_produk.php">
  <div class="form-group row mb-2">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="kode" name="kode" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="stok" class="col-4 col-form-label">Stok</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="stok" name="stok" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="min_stok" class="col-4 col-form-label">Minimun stok</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="min_stok" name="min_stok" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
      <label for="deskripsi" class="col-4 col-form-label">Deskripsi Produk</label>
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
      <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk ID</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
          </div>
          <input id="kategori_produk_id" name="kategori_produk_id" type="text" class="form-control" value="">
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
<?= $this->extend('/Layout/Navbar2');  ?>

<?= $this->section('content2');  ?>
<h6 class="text-center fs-3 fw-bold pt-3">Form Perangkat Elektronik</h6>
<form method="post" action="/crud/submitAdd" class="row g-3 col-sm-8 m-auto mb-3" enctype="multipart/form-data">
    <div>
        <label for="nama" class="form-label fw-bold">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="col-md-6">
        <label for="nama_perangkat" class="form-label fw-bold">Nama Perangkat</label>
        <input type="text" class="form-control" id="nama_perangkat" name="nama_perangkat" placeholder="Laptop">
    </div>
    <div class=" col-md-6">
        <label for="tipe_perangkat" class="form-label fw-bold">Merek Perangkat</label>
        <input type="text" class="form-control" id="tipe_perangkat" name="tipe_perangkat" placeholder="Asus">
    </div>
    <div>
        <label for="stock" class="form-label fw-bold">Stock Barang</label>
        <input type="number" class="form-control" id="stock" name="stock">
    </div>
    <div class="mb-2 col-12">
        <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
    </div>
    <div class="mb-3 col-12">
        <label for="gambar" class="form-label fw-bold">Gambar</label>
        <input class="form-control" type="file" id="gambar" name="gambar">
    </div>
    <div>
        <label for="tanggal_input" class="form-label fw-bold">Tanggal Terakhir input</label>
        <input type="date" class="form-control" id="tanggal_input" name="tanggal_input">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?= $this->endSection('content2');  ?>
<?= $this->extend('/Layout/Navbar4');  ?>

<?= $this->section('content4');  ?>
<h6 class="fs-3 fw-bold pt-3 ms-5">Edit Perangkat Elektronik</h6>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <img src="<?= base_url('img/' . $perangkat['gambar']); ?>" class="img-fluid ms-5 d-block">
        </div>
        <div class="col">
            <form method="post" action="/edit/update/<?= $perangkat['id_per']; ?>" class="row g-3 col-sm-13 mb-3"
                enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div>
                    <label for="nama" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $perangkat['nama']; ?>">
                </div>
                <div class="col-md-6">
                    <label for="nama_perangkat" class="form-label fw-bold">Nama Perangkat</label>
                    <input type="text" class="form-control" id="nama_perangkat" name="nama_perangkat"
                        value="<?= $perangkat['nama_perangkat']; ?>">
                </div>
                <div class="col-md-6">
                    <label for="tipe_perangkat" class="form-label fw-bold">Merek Perangkat</label>
                    <input type="text" class="form-control" id="tipe_perangkat" name="tipe_perangkat"
                        value="<?= $perangkat['tipe_perangkat']; ?>">
                </div>
                <div>
                    <label for="stock" class="form-label fw-bold">Stock Barang</label>
                    <input type="number" class="form-control" id="stock" name="stock"
                        value="<?= $perangkat['stock']; ?>">
                </div>
                <div class="mb-2 col-12">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"
                        rows="3"><?= $perangkat['deskripsi']; ?></textarea>
                </div>
                <div class="mb-3 col-12">
                    <label for="gambar" class="form-label fw-bold">Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar"
                        value="<?= $perangkat['gambar']; ?>">
                </div>
                <div>
                    <label for="tanggal_input" class="form-label fw-bold">Tanggal Terakhir input</label>
                    <input type="date" class="form-control" id="tanggal_input" name="tanggal_input"
                        value="<?= $perangkat['tanggal_input']; ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content4');  ?>
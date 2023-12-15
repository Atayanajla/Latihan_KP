<?= $this->extend('/Layout/Navbar3');  ?>

<?= $this->section('content3');  ?>
<h6 class="fs-3 fw-bold pt-3 ms-5">Daftar Perangkat Elektronik</h6>

<div class="d-flex flex-wrap ms-5">
    <?php foreach ($perangkat as $data): ?>
    <div class="card m-2" style="width: 300px;">
        <?php if (!empty($data['gambar'])): ?>
        <img src="<?= base_url('img/' . $data['gambar']); ?>" class="card-img-top" alt="Gambar">
        <?php else: ?>
        <p>No image available.</p>
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><?= $data['nama_perangkat']; ?></h5>
            <p class=" card-text"><?= $data['tipe_perangkat']; ?></p>
            <a href="/crud/list/detail/<?= $data['id_per']; ?>" class="btn btn-primary">Detail</a>
            <a href="/crud/list/delete/<?= $data['id_per']; ?>" class="btn btn btn-danger">Delete</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection('content3');  ?>
<?= $this->extend('/Layout/Navbar1');  ?>

<?= $this->section('content1');  ?>

<h6 class="fs-3 fw-bold pt-3 text-center">Daftar Table</h6>
<h6 class="fs-3 fw-bold text-center">Perangkat Elektronik</h6>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

<table class="mt-4 ms-2 text-center table-bordered col-11 display border-top border-2 " id="myTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nama Perangkat</th>
            <th>Merek Perangkat</th>
            <th>Stock Barang</th>
            <th>Deskripsi</th>
            <th>Tanggal Terakhir input</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach ($perangkat as $data) : ?>
        <tr>
            <th><?= $data['id_per']; ?></th>
            <th class="fw-normal"><?= $data['nama']; ?></th>
            <th class="fw-normal"><?= $data['nama_perangkat']; ?></th>
            <th class="fw-normal"><?= $data['tipe_perangkat']; ?></th>
            <th class="fw-normal"><?= $data['stock']; ?></th>
            <th class="fw-normal"><?= $data['deskripsi']; ?></th>
            <th class="fw-normal"><?= $data['tanggal_input']; ?></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection('content1');  ?>
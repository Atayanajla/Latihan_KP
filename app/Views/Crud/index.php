<?= $this->extend('/Layout/Navbar4');  ?>

<?= $this->section('content4');  ?>
<div class="container">
    <div class="row pt-5">
        <div class="col ps-0">
            <h4 class="fs-1 text-start fw-bolder">Selamat Datang di Daftar Perangkat Elektronik</h4>
            <p class="fw-light text-start font-monospace">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque
                duis cursus vestibulum,facilisi ac, sed faucibus.</p>
        </div>
        <div class="col">
            <img src="home.jpg" class="img-fluid mx-auto d-block" width="300">
        </div>
    </div>
</div>
<?= $this->endSection('content4');  ?>
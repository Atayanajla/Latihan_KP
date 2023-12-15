<?= $this->extend('/Layout/Navbar4');  ?>

<?= $this->section('content4');  ?>

<p class="text-center mt-4 fs-3 fw-bold">Profil</p>

<form class="col-md-5 m-5">
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="">
        </div>
    </div>
    <div class=" mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nohp" class="col-sm-2 col-form-label">no hp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nohp" name="nohp" value="">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
    </div>
    <button type="edit" class="btn btn-primary mt-3">edit</button>
</form>

<?= $this->endSection('content4');  ?>
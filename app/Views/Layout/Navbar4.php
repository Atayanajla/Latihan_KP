<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perangkat Elektonik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse p-1" id="navbarNav">
                <div class="container ms-1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/"><i class="bi bi-house-door-fill"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/crud/list" target="_blank"><i
                                    class="bi bi-car-front-fill"></i>MyAdd</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/crud/datatabel" target="_blank"><i
                                    class="bi bi-car-front-fill"></i>DataTable</a>
                        </li>
                    </ul>
                </div>
                <div class="ms-auto">
                    <a href="/crud/add">
                        <button type="submit" class="btn bg-white text-primary">Add</button>
                    </a>
                </div>
                <div class="nav-item dropdown ms-2 me-2">
                    <button class="btn btn-secondary dropdown-toggle bg-white text-primary" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">user</button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="/user/profil"><i class="bi bi-person-fill"></i>Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content4');  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perangkat Elektonik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
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
                    </ul>
                </div>
                <div class="ms-auto">
                    <a href="/crud/add">
                        <button type="submit" class="btn bg-white text-primary">Add</button>
                    </a>
                </div>
                <div class="nav-item dropdown ms-2 me-2">
                    <button class="btn btn-secondary dropdown-toggle bg-white text-primary" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">User</button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="/user/profil"><i class="bi bi-person-fill"></i>Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content1');  ?>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- < !-- js -->
    <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url(); ?>/js/script.js"></script>

    <script>
    $("#myTable").DataTable({
        order: [
            [0, 'desc']
        ],
        "language": {
            "lengthMenu": "Show_MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'1>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
    </script>

</body>

</html>
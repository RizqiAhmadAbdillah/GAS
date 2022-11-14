<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="img\logo.png" alt="GAS" style="width: 50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="kelontong">Kelontong</a></li>
                            <li><a class="dropdown-item" href="#">Bahan Bangunan</a></li>
                            <li><a class="dropdown-item" href="#">Makanan dan Minuman</a></li>
                            <li><a class="dropdown-item" href="#">Fashion</a></li>
                            <li><a class="dropdown-item" href="#">Restoran</a></li>
                            <li><a class="dropdown-item" href="#">Sayur dan Buah</a></li>
                            <li><a class="dropdown-item" href="#">Otomotif</a></li>
                            <li><a class="dropdown-item" href="#">Lain-lain</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Lihat semua produk</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container text-center mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <a href="kelontong">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/store.svg" class="card-img-top" alt="Kelontong">
                        <div class="card-body">
                            <h5 class="card-title">Kelontong</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/building.svg" class="card-img-top" alt="Bahan Bangunan">
                        <div class="card-body">
                            <h5 class="card-title">Bahan Bangunan</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/food.svg" class="card-img-top" alt="Makanan dan Minuman">
                        <div class="card-body">
                            <h5 class="card-title">Makanan dan Minuman</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/fashion.svg" class="card-img-top" alt="Fashion">
                        <div class="card-body">
                            <h5 class="card-title">Fashion</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/restaurant.svg" class="card-img-top" alt="Restoran">
                        <div class="card-body">
                            <h5 class="card-title">Restoran</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/fruit.svg" class="card-img-top" alt="Buah dan Sayur">
                        <div class="card-body">
                            <h5 class="card-title">Buah dan Sayur</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/automotive.svg" class="card-img-top" alt="Otomotif">
                        <div class="card-body">
                            <h5 class="card-title">Otomotif</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/else.svg" class="card-img-top" alt="Lain-lain">
                        <div class="card-body">
                            <h5 class="card-title">Lain-lain</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container p-4">
        <button type="button" class="btn btn-outline-primary">Lihat semua produk</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>

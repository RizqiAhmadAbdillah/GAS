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
                            <li><a class="dropdown-item" href="#">Kelontong</a></li>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 400px">
            <div class="carousel-item active">
                <img src="img/citrus.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top: 0px;">
                    <h5 style="color: black;">Jeruk</h5>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta
                        provident quidem.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/vegetables.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top: 0px;">
                    <h5 style="color: black;">Sayuran</h5>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta
                        provident quidem.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/berries.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top: 0px;">
                    <h5 style="color: black;">Makanan Ringan</h5>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta
                        provident quidem.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container text-center mt-4">
        <div class="row row-cols-1 row-cols-md-3">
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/water.svg" class="card-img-top" alt="Air Mineral">
                        <div class="card-body">
                            <h5 class="card-title">Air Mineral</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta
                                provident quidem.</p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/cheese.svg" class="card-img-top" alt="Keju">
                        <div class="card-body">
                            <h5 class="card-title">Keju</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta
                                provident quidem.</p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col p-4">
                    <div class="card" style="width: auto;">
                        <img src="img/snack.svg" class="card-img-top" alt="Keju">
                        <div class="card-body">
                            <h5 class="card-title">Makanan Ringan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dicta
                                provident quidem.</p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>

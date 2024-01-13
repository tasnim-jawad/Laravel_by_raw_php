<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_name ?? '' ?></title>
    <link rel="stylesheet" href="<?= assets('css/bootstrap.min.css') ?>">
    
</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</section>
    

<section>
    <div class="container-flude">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://img.freepik.com/premium-vector/corporate-business-blue-wide-banner-design-background-abstract-modern-3d-banner-design-with-dark-blue-technology-geometric-background-vector-illustration_181182-27994.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpiu8L8e19Pfb5kxVG494D2pukVMURK1QZNVrQkYfwQSEVMvPB_A_Z9JAEAdeXfcU3HMU&usqp=CAU" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
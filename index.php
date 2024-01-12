<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>ECOAISLA</title>
</head>

<body>
    <!-- star navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h1 class="text-success"><strong>Eco<span class="text-warning">Aisla</span></strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><span class="text-secondary">Nuestra Tienda</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><span class="text-secondary">Sobre Nosotros</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><span class="text-secondary">Asesoramiento</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- star hero section -->
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="home">
        <div class="container py-5">
            <div class="d-sm-flex align-item-center justify-content-between py-5">
                <div>
                    <h1>Bienvenido a EcoAisla</h1>
                    <h4 class="my-4">ESPECIALISTAS EN CONFORT ACÚSTICO Y DESARROLLO DE SOLUCIONES SOSTENIBLES</h4>
                    <p class="lead my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptates praesentium, odio aperiam,
                        placeat maxime soluta neque dolorem esse blanditiis, tenetur voluptas officiis cum? Reiciendis aspernatur
                        nulla ab laudantium cupiditate.</p>
                    <button class="btn btn-primary">Realiza tu Contizacion</button>
                </div>
                <br>
                <a href="">
                    <img class="img-fluid" src="img/Imagen1.jpg" width="1000">
                </a>
            </div>
        </div>
    </section>



    <section class="p-5" id="services">
        <div class="container py-5">
            <h2>PORQUE ELEGIRNOS ?</h2>
            <hr size="10">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <img src="img/Imagen1.jpg" class="card-img-top" alt="">
                            <div class="h1 mb-3">
                                <i class="bi bi-tree-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Conciencia Ambiental</h3>
                            <p class="card-text"> <em>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptate dolorum quisquam in esse maxime
                                    nostrum! Culpa quod blanditiis saepe libero!</em>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <img src="img/Imagen1.jpg" class="card-img-top" alt="">
                            <div class="h1 mb-3">
                                <i class="bi bi-p-circle"></i>
                            </div>
                            <h3 class="card-title mb-3">Personalizacion</h3>
                            <p class="card-text"><em>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptate dolorum quisquam in esse maxime
                                    nostrum! Culpa quod blanditiis saepe libero!</em>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <img src="img/Imagen1.jpg" class="card-img-top" alt="">
                            <div class="h1 mb-3">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Calidad de Servicio</h3>
                            <p class="card-text"><em>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptate dolorum quisquam in esse maxime
                                    nostrum! Culpa quod blanditiis saepe libero!</em>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- @islaPeru2024 -->

    <section class="p-5" id="Trabajo">
        <div class="container py-5">
            <h2>NUESTROS TRABAJOS</h2>
            <hr size="10">
            <div class="row text-center g-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="max-height: 700px;">
                            <img src="img/Imagen1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" style="max-height: 700px;">
                            <img src="img/Imagen1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" style="max-height: 700px;">
                            <img src="img/Imagen1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- star about section -->

    <section class="p-5" id="about">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <a href="#">
                        <img class="img-fluid" src="img/Imagen1.jpg">
                    </a>
                </div>
                <div class="col-md p-5">
                    <h2>Learn The basics</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Quisquam obcaecati perspiciatis odio quia fuga,
                        voluptatibus adipisci accusamus facere nobis
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Quisquam obcaecati perspiciatis odio quia fuga,
                        voluptatibus adipisci accusamus facere nobis
                    </p>
                    <a href="" class="btn btn-primary mt-3">
                        <i class="bi bi-chevron-right"></i>
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- star learn section -->

    <section class="bg-dark text-light p-5" id="learn">
        <div class="container py-5">
            <div class="row align-items-center justify-content-between"></div>
        </div>

    </section>



    <!-- end learn section -->
</body>

</html>
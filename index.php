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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
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
                        <a class="nav-link active" aria-current="page" href="#"><span class="text-secondary"><strong>Nuestra Tienda</strong></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sobreNosotros.php"><span class="text-secondary"><strong>Sobre Nosotros</strong></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Asesoramiento.php"><span class="text-secondary"><strong>Asesoramiento</strong></span></a>
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
                    <h4 class="my-4"><em>ESPECIALISTAS EN CONFORT ACÚSTICO Y DESARROLLO DE SOLUCIONES SOSTENIBLES</em></h4>
                    <p class="lead my-4">
                        <em>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptates praesentium, odio aperiam,
                            placeat maxime soluta neque dolorem esse blanditiis, tenetur voluptas officiis cum? Reiciendis aspernatur
                            nulla ab laudantium cupiditate.
                        </em>
                    </p>
                    <a href="" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>
                        Realiza tu Contizacion
                    </a>
      
                </div>
                <br>
                <a href="">
                    <img class="img-fluid" src="img/Imagen1.jpg" width="1000" style="border-radius: 25px;">
                </a>
            </div>
        </div>
    </section>



    <section class="p-5" id="services">
        <div class="container py-5">
            <h2>Porque Elegirnos...</h2>
            <hr size="10">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5" style="border-radius: 20px;">
                        <div class="card-body text-center" style="max-height: 400px; overflow-y: auto;">
                            <img src="img/Imagen1.jpg" class="card-img-top" alt="" style="border-radius: 20px;">
                            <div class="h1 mb-3">
                                <i class="bi bi-tree-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Conciencia Ambiental</h3>
                            <p class="card-text"> <em>Fomentar la sostenibilidad implica con frecuencia</em>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5" style="border-radius: 20px;">
                        <div class="card-body text-center" style="max-height: 400px; overflow-y: auto;">
                            <img src="img/Imagen1.jpg" class="card-img-top" alt="" style="border-radius: 20px;">
                            <div class="h1 mb-3">
                                <i class="bi bi-p-circle"></i>
                            </div>
                            <h3 class="card-title mb-3">Personalizacion</h3>
                            <p class="card-text"><em>Diseñamos y construimos loes elementos acusticos se</em>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5" style="border-radius: 20px;">
                        <div class="card-body text-center" style="max-height: 400px; overflow-y: auto;">
                            <img src="img/Imagen1.jpg" class="card-img-top" alt="" style="border-radius: 20px;">
                            <div class="h1 mb-3">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Calidad de Servicio</h3>
                            <p class="card-text"><em>nuestros ezfuersos en convertir cad y algo mas</em>
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
            <h2>Nuestros trabajos...</h2>
            <hr size="10">
            <div class="row text-center g-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius: 20px;">
                        <div class="carousel-item active" style="max-height: 700px;">
                            <img src="img/Imagen1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Título del Trabajo 1</h5>
                                <p>Descripción breve del trabajo realizado.</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="max-height: 700px;">
                            <img src="img/Imagen1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Título del Trabajo 2</h5>
                                <p>Descripción breve del trabajo realizado.</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="max-height: 700px;">
                            <img src="img/Imagen1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Título del Trabajo 3</h5>
                                <p>Descripción breve del trabajo realizado.</p>
                            </div>
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
                        <img class="img-fluid rounded-circle" src="img/Imagen1.jpg">
                    </a>
                </div>
                <div class="col-md p-5">
                    <h2>Learn The basics</h2>
                    <p><em>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Quisquam obcaecati perspiciatis odio quia fuga,
                        voluptatibus adipisci accusamus facere nobis</em>
                    </p>
                    <p>
                       <em>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Quisquam obcaecati perspiciatis odio quia fuga,
                        voluptatibus adipisci accusamus facere nobis</em>
                    </p>
                    <a href="" class="btn btn-dark mt-3">
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
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>Learn The React</h2>
                    <p><em>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Quisquam obcaecati perspiciatis odio quia fuga,
                        voluptatibus adipisci accusamus facere nobis</em>
                    </p>
                    <p>
                       <em>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Quisquam obcaecati perspiciatis odio quia fuga,
                        voluptatibus adipisci accusamus facere nobis</em> 
                    </p>
                    <a href="" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>
                        Read More
                    </a>
                </div>
                <div class="col-md">
                    <a href="#">
                        <img class="img-fluid rounded-circle" src="img/Imagen1.jpg">
                    </a>
                </div>

            </div>
        </div>

    </section>
    <!-- end learn section -->

    <!-- start F&Q section -->
    <!-- <section class="p-5" id="questions">
        <div class="container py-5"></div>
        <h2 class="text-center mb-4">Frequent Asked Questions</h2>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>

    </section> -->
    <!-- end F&Q section -->

    <!-- star instraction section -->

    <section class="p-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center text-dark">Our Instruction</h2>
            <p class="lead text-center text-dark mb-5">
                <em>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem,
                eveniet minus cupiditate quidem nulla ratione unde? Harum nostrum suscipit,
                possimus nemo ipsum quas doloribus similique voluptatibus aliquam quos iure
                ex.</em>
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-dark" style="border-radius: 25px;">
                        <div class="card-body text-center p-5">
                            <img src="" class="rounded-circle mb-3">
                            <h3 class="card-title text-light mb-3">John Doe</h3>
                            <p class="card-text text-light"><em>Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Temporibus, neque.</em>
                            </p>
                            <a href="#"><i class="bi bi-facebook text-light mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-twitter text-light mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-light mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-instagram text-light mx-1 lead"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light" style="border-radius: 25px;">
                        <div class="card-body text-center p-5">
                            <img src="" class="rounded-circle mb-3">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text"><em>Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Temporibus, neque.</em>
                            </p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 lead"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-dark" style="border-radius: 25px;">
                        <div class="card-body text-center p-5">
                            <img src="" class="rounded-circle mb-3">
                            <h3 class="card-title text-light mb-3">John Doe</h3>
                            <p class="card-text text-light"><em>Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Temporibus, neque.</em>
                            </p>
                            <a href="#"><i class="bi bi-facebook text-light mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-twitter text-light mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-light mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-instagram text-light mx-1 lead"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light" style="border-radius: 25px;">
                        <div class="card-body text-center p-5">
                            <img src="" class="rounded-circle mb-3">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">
                                <em>Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Temporibus, neque.</em>
                            </p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 lead"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 lead"></i></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end instraction section -->


    <!-- star footer section -->
    <section class="p-5 bg-dark text-light">
        <footer id="contact" class="page-footer p-5 text-md-left">
            <div class="container py-5">
                <div class="row g-4">
                      
                <div class=" col-md-2"></div>
                    <div class=" col-md-3">
                        <h5 class="text-uppercase font-weight-bold mb-4">
                            Wp$ShopM@rt
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Beatae, fugit.
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Beatae, fugit.
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Beatae, fugit.
                        </p>
                        <a href="#"><i class="bi bi-facebook text-light mx-1 lead"></i></a>
                        <a href="#"><i class="bi bi-twitter text-light mx-1 lead"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-light mx-1 lead"></i></a>
                        <a href="#"><i class="bi bi-instagram text-light mx-1 lead"></i></a>
                    </div>
                    <div class=" col-md-2"></div>
                    <div class="col-md-3">
                        <h5 class="text-uppercase font-weight-bold mb-4">
                            Location
                        </h5>
                        <p class="d-flex"><i class="bi bi-geo-alt text-primary mx-2 lead"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <p class="d-flex  align-items-center"><i class="bi bi-phone text-primary mx-2 lead"></i>
                            +51-980-578-452
                        </p>
                        <p class="d-flex  align-items-center"><i class="bi bi-envelope text-primary mx-2 lead"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class=" col-md-2"></div>
                </div>
            </div>
        </footer>
    </section>


    <!-- start footer bottom -->

    <footer class="p-3 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="mb-0">
                Copyright &copy; 2022 Wp$ShopM@rt
            </p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>

    </footer>


    <!-- end footer bottom -->

</body>

</html>
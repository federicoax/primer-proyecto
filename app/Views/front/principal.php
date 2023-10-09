<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mundo Lácteo</title>
    <meta name="description" content="Esta pagina web es de Nuestra Empresa" />
    <meta name="author" content="Abib Francisco" />
    <meta name="keywords" content="Sitio web de nuestra empresa, empresa de lácteos, leche, queso, manteca" />

    <!--Fuente OSWAL-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <div class="barrasocial">
        <ul>
            <li>
                <a href="https://www.facebook.com/" target="_blank"><img src="assets/img/facebook.png"></a>
            </li>
            <li>
                <a href="https://www.youtube.com/" target="_blank"><img src="assets/img/youtube.png"></a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram.png"></a>
            </li>
        </ul>
    </div>

    <!--NavBar con Bootstrap-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('principal')?>">
            <!--Logo de la empresa-->
            <img src="<?php echo base_url('assets/img/logo.png')?>" class="img-fluid" width="100px" height="100px" alt=""></a>            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      La Empresa
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="quienes_somos">Quienes Somos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nuestra_historia">Nuestra Historia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nuestra_filosofia">Nuestra Filosofía</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactenos">Contáctenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logeo">Iniciar Sesión</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Carrusel-->
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/1.jpg" style="height: 200px;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/2.jpg" style="height: 200px;" class="d-block w-100" alt="...">
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

    <div class="agrupar col-12">
        <header class="cabecera">
            <h1>Mundo Lácteo. Del campo a tu mesa, la frescura que alimenta tu vida</h1>
            <h3>Nos enorgullece ofrecerte una amplia variedad de productos lácteos de la más alta calidad. Nuestro compromiso con la frescura y el sabor auténtico nos impulsa a seleccionar cuidadosamente cada ingrediente, desde la leche fresca de nuestras vacas hasta los deliciosos sabores que llegan a tu mesa. Además, nos esforzamos por brindarte opciones saludables y nutritivas para que puedas disfrutar de nuestros lácteos sin preocupaciones. Vení y descubrí la excelencia que solo nuestra empresa puede ofrecerte. Nos enorgullece llevar a tu hogar una gama de lácteos que reflejan el amor por la tradición y la innovación. Explorá nuestro catálogo y déjate seducir por la magia de nuestros lácteos. ¡Tu bienestar y satisfacción son nuestra prioridad!
            </h3>
        </header>

        <section class="seccion">
            <article>
                <hgroup>
                    <h1>Nuestros productos son de primera calidad</h1>
                </hgroup>
                <img src="https://as01.epimg.net/deporteyvida/imagenes/2019/05/29/portada/1559132933_784891_1559133012_noticia_normal.jpg" alt="Leche, queso, reggianito, parmesano, lácteos">
            </article>
        </section>
    </div>


    <footer class="nb-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about">
                        <img src="assets/img/logo.png" class="img-responsive center-block" alt="">
                        <p>Contactenos a través de nuestras redes sociales o a nuestros números telefónicos. 
                            <br> +54 3777 432437 | +54 3777 421845 | +54 3777 423547 
                            <br><a href="https://wa.me/" target="_blank">Nuestro WhatsApp!</a>
                              </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Sitio desarrolado por</h2>
                        <ul class="list-unstyled">
                            <p>Abib Francisco</p>
                            <p>Axony Federico</p>
                            <p>Insaurralde Juan</p> 
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">para más información</h2>
                        <p>Contáctenos por las vías de comunicación mencionadas
                        </p>
                            
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Correo Electrónico</h2>
                            <p>mundolacteogoya@gmail.com</p>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Mundo Lácteo</h2>
                        <p>Mundo Lácteo S.R.L.
                            Avenida Primeros Consejales 350 - CP 3450
                            Goya (Corrientes) Argentina
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Copyright © 2023-2024 | Todos los derechos reservados | Mundo Lácteo</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
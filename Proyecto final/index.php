<!DOCTYPE html>
<html lang="en">

<head>
    <title>FashionFlow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/banner_img_01.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/banner_img_01.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:FashionFlow@gmail.com">FashionFlow@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">011-3165-3246</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                FashionFlow
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#colaboraciones">Colaboraciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#productos-mas-vendidos">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Vendedores</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Tu local favorito</b> Online</h1>
                                <h3 class="h2">Tu destino para encontrar la combinación perfecta de tu estilo.</h3>
                                <p>
                                    FashionFlow es una tienda de ropa online que ofrece las últimas tendencias y estilos.
                                    Nuestra plataforma está diseñada para brindarte una experiencia de compra fácil y agradable.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Sobre Nosotros</h1>
                                <h3 class="h2">FashionFlow, ubicada en el corazón de la moda urbana y deportiva, se unió con Nike, Adidas y Supreme para crear una línea exclusiva que fusiona lo mejor de cada marca.</h3>
                                <p>
                                 Estas colaboraciones han redefinido la moda urbana, estableciendo un nuevo estándar en la industria y demostrando que la combinación de estilo, funcionalidad y exclusividad es una fórmula ganadora.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_04.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Contactanos</h1>
                                <h3 class="h2">En FashionFlow, estamos aquí para ayudarte a encontrar el estilo perfecto.</h3>
                                <p>
                                  Si tienes alguna pregunta sobre nuestros productos, deseas hacer un pedido especial o simplemente quieres saber más sobre nuestros productos, no dudes en contactarnos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->



    <!-- Start Colaboraciones -->
    <section id="colaboraciones" class="container py-5">
        <div class="row text-center">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Colaboraciones</h1>
                <p>
                    FashionFlow sigue explorando nuevas oportunidades de colaboración para ofrecer lo mejor de la moda urbana y deportiva. ¡Deja que tu estilo fluya con FashionFlow!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/brand_02.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Adidas</h5>
                <p class="text-center"><a class="btn btn-success">Ver productos</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/brand_05.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Supreme</h2>
                <p class="text-center"><a class="btn btn-success">Ver productos</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/brand_03.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Nike</h2>
                <p class="text-center"><a class="btn btn-success">Ver productos</a></p>
            </div>
        </div>
    </section>
    <!-- End Colaboraciones -->

    <!-- Start Productos -->
      <section class="bg-light" id="productos-mas-vendidos">
          <div class="container py-5">
              <div class="row text-center py-3">
                  <div class="col-lg-6 m-auto">
                      <h1 class="h1">Productos</h1>
                      <p>Descubre las prendas que están causando sensación en todas partes.</p>
                  </div>
              </div>

              <!-- Filtros -->
              <div class="text-center mb-4">
                  <a href="?marca=adidas" class="btn btn-outline-dark">Adidas</a>
                  <a href="?marca=supreme" class="btn btn-outline-dark">Supreme</a>
                  <a href="?marca=nike" class="btn btn-outline-dark">Nike</a>
              </div>

              <!-- Productos -->
              <div class="row">
                  <?php
                  // 1) Conexión a la base de datos
                  $conexion = mysqli_connect("127.0.0.1", "root", "");
                  mysqli_select_db($conexion, "tienda");

                  // 2) Preparar la consulta SQL
                  $filtro = isset($_GET['marca']) ? $_GET['marca'] : ''; // Filtro por marca
                  $consulta = "SELECT * FROM ropa";

                  if (!empty($filtro)) {
                      $consulta .= " WHERE marca = '$filtro'";
                  }

                  // 3) Ejecutar la consulta y obtener los registros
                  $datos = mysqli_query($conexion, $consulta);

                  // 4) Mostrar los productos
                  while ($reg = mysqli_fetch_array($datos)) {
                      ?>
                      <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card h-100">
                              <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title"><?php echo ucwords($reg['marca']) ?></h5>
                                  <p class="card-text">$<?php echo $reg['precio']; ?></p>
                                  <p class="card-text">Talle en stock: <?php echo ($reg['talle']) ?></p>
                              </div>
                              <div class="card-footer">
                                  <a href="productos1.php?id=<?php echo $reg['id']; ?>" class="btn btn-primary btn-sm">Ver producto</a>
                              </div>
                          </div>
                      </div>
                      <?php
                  }
                  ?>
              </div>
          </div>
      </section>

    <!-- End Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">FashionFlow Online</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Bella Vista, Buenos Aires Argentina
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">011-3165-3246</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:FashionFlow@gmail.com">FashionFlow@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light"> Más Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Accesorios</a></li>
                        <li><a class="text-decoration-none" href="#">Ropa deportiva</a></li>
                        <li><a class="text-decoration-none" href="#">Zapatos de hombr</a></li>
                        <li><a class="text-decoration-none" href="#">Zapatos de mujer</a></li>
                        <li><a class="text-decoration-none" href="#">Vestidos populares</a></li>
                        <li><a class="text-decoration-none" href="#">Accesorios para el Gym</a></li>
                        <li><a class="text-decoration-none" href="#">Zapatillas deportivas</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Información adicional</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Inicio</a></li>
                        <li><a class="text-decoration-none" href="#">Sobre nostros</a></li>
                        <li><a class="text-decoration-none" href="#">Localidades de negocios</a></li>
                        <li><a class="text-decoration-none" href="#">Redes sociales</a></li>
                        <li><a class="text-decoration-none" href="#">Contacto</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Dirreción electronica</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2024 Nombre de la compania
                            | Diseñado por <a rel="sponsored" href="https://instagram.com" target="_blank">FashionFlow</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>

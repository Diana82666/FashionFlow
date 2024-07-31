<?php
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// Verificar si se ha enviado un valor para 'id' a través de GET
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar si $id tiene un valor válido antes de realizar la consulta
if ($id !== null) {
    $consulta = "SELECT * FROM ropa WHERE id=$id";
    $repuesta = mysqli_query($conexion, $consulta);

    // Verificar si se encontraron resultados
    if ($repuesta && mysqli_num_rows($repuesta) > 0) {
        $datos = mysqli_fetch_array($repuesta);
    } else {
        // Manejo de errores si no se encuentra el producto
        $datos = array(); // Inicializar $datos como un array vacío
    }
} else {
    // Si no se proporcionó un 'id', manejar la situación (por ejemplo, redireccionar a una página de error)
    // Ejemplo de redirección:
    header("Location: error.php");
    exit(); // Asegura que el script se detiene después de la redirección
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>FashionFlow - Detalles del producto</title>
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

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
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
                            <a class="nav-link" href="index.php">Colaboraciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Productos</a>
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

    <!-- Content Section -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="data:image/jpg;base64, <?php echo isset($datos['imagen']) ? base64_encode($datos['imagen']) : ''; ?>" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Detalle del producto</h1>
                            <p class="card-text"><?php echo isset($datos['prenda']) ? ucfirst($datos['prenda']) : ''; ?></p>
                            <h5 class="card-title">Marca: <?php echo isset($datos['marca']) ? ucfirst($datos['marca']) : ''; ?></h5>
                            <p class="card-text">Talle en stock: <?php echo isset($datos['talle']) ? $datos['talle'] : ''; ?></p>

                            <p class="card-text">$<?php echo isset($datos['precio']) ? $datos['precio'] : ''; ?></p>
                            <br>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <span class="list-inline-item text-dark">Puntuación 4.8 | 36 Comentarios</span>
                            <br><br>
                            <div>
                              <form action="https://link.mercadopago.com.ar/diana320" method="GET">
                                  <input type="hidden" name="product-title" value="Activewear">
                                  <div class="row">
                                      <div class="col-auto">
                                          <ul class="list-inline pb-3">
                                              <li class="list-inline-item">Talle :
                                                  <input type="hidden" name="product-size" id="product-size" value="S">
                                              </li>
                                              <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                              <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                              <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                              <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                              <li class="list-inline-item"><span class="btn btn-success btn-size">XXL</span></li>
                                              <li class="list-inline-item"><span class="btn btn-success btn-size">XXXL</span></li>
                                          </ul>
                                      </div>
                                      <div class="col-auto">
                                          <ul class="list-inline pb-3">
                                              <li class="list-inline-item text-right">
                                                  Cantidad:
                                                  <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                              </li>
                                              <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                              <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                              <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="row pb-3">
                                      <div class="col d-grid">
                                          <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Comprar</button>
                                          <a href="link.mercadopago.com.ar/diana320" target="_blank"></a>
                                      </div>
                                      <div class="col d-grid">
                                          <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Añadir al carrito  </button>
                                      </div>
                                  </div>
                              </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

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

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>

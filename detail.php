<?php include_once 'Views/template/header-principal.php'; ?>

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo $data['producto'] ['imagen']; ?>" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"> <?php echo $data['producto'] ['nombre']; ?> </h1>
                            <p class="h3 py-2"> <?php echo MONEDA . ' ' . $data['producto'] ['precio']; ?> </p>
                            
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Categoria</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong> <?php echo $data['producto'] ['categoria']; ?> </strong></p>
                                </li>
                            </ul>

                            <h6>Descripcion:</h6>
                            <p> <?php echo $data['producto'] ['descripcion']; ?> </p>
                            

                            

                            <form action="" method="GET">
                                <input type="hidden" id="idProducto" value="<?php echo $data['producto'] ['id']; ?>">
                                <div class="row">
                                    
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Cantidad
                                                <input type="hidden" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Añadir</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="button" class="btn btn-success btn-lg" id="btnAddCart">Comprar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Obras relacionadas</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
                
              <?php foreach ($data['relacionados'] as $producto) { ?>
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['imagen']; ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white btnAddDeseo" href="#" prod="<?php echo $producto['id']; ?>"><i class="fas fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"><i class="fas fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2 btnAddcarrito" href="#" prod="<?php echo $producto['id']; ?>"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0"><?php echo MONEDA . '' . $producto['precio']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>


        </div>
    </section>
    <!-- End Article -->
<!-- Menú de Accesibilidad -->
<div class="accessibility-menu" style="position: fixed; top: 10px; right: 10px; background: white; padding: 10px; border: 1px solid #ccc; z-index: 1000;">
    <button onclick="changeFontSize('increase')">Aumentar Texto</button>
    <button onclick="changeFontSize('decrease')">Disminuir Texto</button>
    <button onclick="toggleGrayscale()">Escala de Grises</button>
    <button onclick="toggleHighContrast()">Alto Contraste</button>
    <button onclick="resetAccessibility()">Restablecer</button>
</div>

<script>
    let highContrastEnabled = false;
    let grayscaleEnabled = false;

    function changeFontSize(action) {
        const body = document.body;
        if (action === 'increase') {
            body.style.fontSize = '1.2em'; // Aumentar texto
        } else if (action === 'decrease') {
            body.style.fontSize = '0.8em'; // Disminuir texto
        }
    }

    function toggleGrayscale() {
        const body = document.body;
        grayscaleEnabled = !grayscaleEnabled;
        body.style.filter = grayscaleEnabled ? 'grayscale(100%)' : 'none';
    }

    function toggleHighContrast() {
        const body = document.body;
        highContrastEnabled = !highContrastEnabled;
        body.style.backgroundColor = highContrastEnabled ? 'black' : 'white';
        body.style.color = highContrastEnabled ? 'white' : 'black';
    }

    function resetAccessibility() {
        const body = document.body;
        body.style.fontSize = '1em'; // Restablecer tamaño de texto
        body.style.filter = 'none'; // Restablecer escala de grises
        body.style.backgroundColor = 'white'; // Restablecer color de fondo
        body.style.color = 'black'; // Restablecer color de texto
        highContrastEnabled = false;
        grayscaleEnabled = false;
    }
</script>

    <!-- bot de ayuda-->
    <script SameSite="None; Secure" src="https://cdn.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myLandbot = new Landbot.Popup({
            configUrl: 'https://storage.googleapis.com/landbot.site/v3/H-2643729-DX4SWKLNPCI7UXXY/index.json',
        });

        document.querySelector('.chatbot-icon').addEventListener('click', function() {
            myLandbot.open(); 
        });
    });
</script>


    <?php include_once 'Views/template/footer-principal.php'; ?>

    <script src="<?php echo BASE_URL . 'assets/js/modulos/detail.js'; ?>"></script>
    
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="<?php echo BASE_URL . 'assets/js/slick.min.js'; ?>"></script>
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
<?php include_once 'Views/template/header-principal.php';?>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

        <!--    <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Gender
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Men</a></li>
                            <li><a class="text-decoration-none" href="#">Women</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sale
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li>
                </ul>
            </div>   -->



<!-- 
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Todos</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
-->



                <div class="row">
                    <?php foreach ($data['productos'] as $producto) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['imagen']; ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white btnAddDeseo" href="#" prod="<?php echo $producto['id']; ?>"> <i class="fas fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"><i class="fas fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2 btnAddcarrito" href="#" prod="<?php echo $producto['id']; ?>"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?php echo BASE_URL . 'principal/detail/' . $relacion['id']; ?>" class="h3 text-decoration-none"> <?php echo $producto['nombre']; ?> </a>
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
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"> <?php echo MONEDA . ' ' . $producto['precio']; ?> </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <?php 
                        $anterior = $data['pagina'] - 1;
                        $siguiente = $data['pagina'] + 1;
                        $url = BASE_URL . 'principal/shop/';
                        if ($data['pagina'] > 1) {
                            echo '<li class="page-item ">
                             <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href=" '. $url . $anterior.' " >Anterior</a>
                            </li>';
                        }
                        if ($data['total'] >= $siguiente) {
                            echo '<li class="page-item">
                             <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-white" href=" '. $url . $siguiente.' ">Siguiente</a>
                          </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands PARA CARRUSEL DE MARCAS ASOCIADAS COPIAR DEL DE SOBRE NOSOTROS-->
    
    <!--End Brands-->
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
    <!-- End Script -->
</body>

</html>
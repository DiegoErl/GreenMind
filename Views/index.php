<?php include_once 'Views/template/header-principal.php'; ?>



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
                            <img class="img-fluid" src="<?php echo BASE_URL; ?>/assets/images/Carrusel/C1.png" alt="" width="400">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Calidad</b> y <b>Durabilidad Garantizadas</b></h1>
                                <h3 class="h2">Productos diseñados para durar y rendir al máximo</h3>
                                <p>
                                Ofrecemos herramientas diseñadas para resistir el trabajo duro. Equipos confiables para garantizar que tu proyecto avance sin interrupciones. 
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
                            <img class="img-fluid" src="./assets/images/Carrusel/C2.png" alt="" width="350">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Fertilizantes Orgánicos Certificados</b></h1>
                                <h3 class="h2">Cultiva de manera sostenible con soluciones ecológicas</h3>
                                <p>
                                Nutre tus cultivos con fertilizantes orgánicos de alta calidad.   
                                <strong>Aumenta la productividad</strong> de manera sostenible y protege el medio ambiente.
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
                            <img class="img-fluid" src="./assets/images/Carrusel/C3.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"> <b>Semillas de Alta Calidad para una Cosecha Superior</b> </h1>
                                <h3 class="h2">Variedades adaptadas a tus necesidades y a tu clima </h3>
                                <p>
                                Garantiza una cosecha robusta y saludable con nuestras semillas certificadas. Variedades resistentes y adaptadas a tus necesidades.
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


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias</h1>
                <p>
                Encuentra todo lo que necesitas para optimizar tu producción agrícola
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['categorias'] as $categoria) { ?>

            <div class="col-12 col-md-2 p-5 mt-3">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"  width="200"></a>
                <h5 class="text-center mt-3 mb-3"> <?php echo $categoria['categoria']; ?> </h5>
            </div>
            
            <?php } ?>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos nuevos</h1>
                    <p>
                    Descubre nuestros productos más recientes, diseñados para mejorar la calidad de tu producción.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data ['nuevoProductos'] as $producto) { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                            <img src="<?php echo $producto['imagen'] ; ?>" class="card-img-top" alt="<?php echo $producto['nombre'] ; ?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"> <?php echo MONEDA . ' ' . $producto['precio'] ; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"> <?php echo $producto['nombre'] ; ?> </a>
                            <p class="card-text">
                                  <?php echo $producto['descripcion'] ; ?>
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <!-- INICIO DE ACCESIBILIDAD -->
    <script>
    // Recuperar las configuraciones almacenadas en localStorage (si existen)
    let grayscaleEnabled = localStorage.getItem('grayscaleEnabled') === 'true';
    let screenReaderEnabled = localStorage.getItem('screenReaderEnabled') === 'true';
    let daltonismEnabled = localStorage.getItem('daltonismEnabled') === 'true';
    let screenReaderHandler = null;

    // Aplicar configuraciones de la página al cargar
    window.onload = function() {
        if (grayscaleEnabled) {
            document.body.style.filter = 'grayscale(100%)';
            document.getElementById('grayscaleButton').innerHTML = '<i class="fas fa-eye-slash"></i> Desactivar Escala de Grises';
        }
        if (screenReaderEnabled) {
            document.getElementById('screenReaderButton').innerHTML = '<i class="fas fa-volume-mute"></i> Desactivar Lectura en Voz Alta';
        }
        if (daltonismEnabled) {
            // Activamos el filtro simulado de daltonismo (Deuteranopia o Protanopia)
            document.body.style.filter = 'contrast(120%) saturate(100%) sepia(80%)';
            document.getElementById('daltonismButton').innerHTML = '<i class="fas fa-eye-slash"></i> Desactivar Modo Daltonismo';
        }
    }

    // Función para activar/desactivar la escala de grises
    function toggleGrayscale() {
        const body = document.body;
        const button = document.getElementById('grayscaleButton');
        grayscaleEnabled = !grayscaleEnabled;
        
        if (grayscaleEnabled) {
            body.style.filter = 'grayscale(100%)';
            button.innerHTML = '<i class="fas fa-eye-slash"></i> Desactivar Escala de Grises';
        } else {
            body.style.filter = 'none';
            button.innerHTML = '<i class="fas fa-eye"></i> Activar Escala de Grises';
        }

        // Guardar la configuración en localStorage
        localStorage.setItem('grayscaleEnabled', grayscaleEnabled);
    }

    // Función para activar/desactivar la lectura en voz alta
    function toggleScreenReader() {
        const body = document.body;
        const button = document.getElementById('screenReaderButton');

        if (!screenReaderEnabled) {
            screenReaderEnabled = true;

            // Crear el evento de lectura si no existe
            screenReaderHandler = (event) => {
                speechSynthesis.cancel();
                const text = event.target.innerText || event.target.alt || '';
                if (text.trim()) {
                    const utterance = new SpeechSynthesisUtterance(text);
                    speechSynthesis.speak(utterance);
                }
            };

            body.addEventListener('mouseover', screenReaderHandler);
            button.innerHTML = '<i class="fas fa-volume-mute"></i> Desactivar Lectura en Voz Alta';
        } else {
            screenReaderEnabled = false;

            // Eliminar el evento si está activo
            if (screenReaderHandler) {
                body.removeEventListener('mouseover', screenReaderHandler);
                screenReaderHandler = null;
            }

            speechSynthesis.cancel();
            button.innerHTML = '<i class="fas fa-volume-up"></i> Activar Lectura en Voz Alta';
        }

        // Guardar la configuración en localStorage
        localStorage.setItem('screenReaderEnabled', screenReaderEnabled);
    }

    // Función para activar/desactivar el modo daltonismo
    function toggleDaltonism() {
        const body = document.body;
        const button = document.getElementById('daltonismButton');
        daltonismEnabled = !daltonismEnabled;
        
        if (daltonismEnabled) {
            // Aplicamos un filtro de colores simulando daltonismo (Deuteranopia o Protanopia)
            body.style.filter = 'contrast(120%) saturate(100%) sepia(80%)';
            button.innerHTML = '<i class="fas fa-eye-slash"></i> Desactivar Modo Daltonismo';
        } else {
            body.style.filter = 'none';
            button.innerHTML = '<i class="fas fa-eye"></i> Activar Modo Daltonismo';
        }

        // Guardar la configuración en localStorage
        localStorage.setItem('daltonismEnabled', daltonismEnabled);
    }

    // Función para restablecer las configuraciones
    function resetAccessibility() {
        const body = document.body;
        body.style.filter = 'none';
        grayscaleEnabled = false;
        screenReaderEnabled = false;
        daltonismEnabled = false;

        // Restaurar íconos y texto
        document.getElementById('grayscaleButton').innerHTML = '<i class="fas fa-eye"></i> Activar Escala de Grises';
        document.getElementById('screenReaderButton').innerHTML = '<i class="fas fa-volume-up"></i> Activar Lectura en Voz Alta';
        document.getElementById('daltonismButton').innerHTML = '<i class="fas fa-eye"></i> Activar Modo Daltonismo';

        // Eliminar eventos y detener síntesis
        if (screenReaderHandler) {
            body.removeEventListener('mouseover', screenReaderHandler);
            screenReaderHandler = null;
        }
        speechSynthesis.cancel();

        // Restablecer en localStorage
        localStorage.removeItem('grayscaleEnabled');
        localStorage.removeItem('screenReaderEnabled');
        localStorage.removeItem('daltonismEnabled');

        alert("Accesibilidad restablecida.");
    }
</script>

<!-- Menú de Accesibilidad -->
<div class="accessibility-menu" style="position: fixed; top: 10px; right: 10px; z-index: 1000;">
    <button class="btn btn-primary" onclick="toggleMenu()">☰</button>
    <div id="accessibilityDropdown" style="display: none; background: white; border: 1px solid #ccc; padding: 10px; position: absolute; right: 0;">
        <button id="grayscaleButton" onclick="toggleGrayscale()" class="btn btn-secondary">
            <i class="fas fa-eye"></i> Activar Escala de Grises
        </button>
        <button id="screenReaderButton" onclick="toggleScreenReader()" class="btn btn-secondary">
            <i class="fas fa-volume-up"></i> Activar Lectura en Voz Alta
        </button>
        <button id="daltonismButton" onclick="toggleDaltonism()" class="btn btn-secondary">
            <i class="fas fa-eye"></i> Activar Modo Daltonismo
        </button>
        <button onclick="resetAccessibility()" class="btn btn-danger">
            <i class="fas fa-redo-alt"></i> Restablecer
        </button>
    </div>
</div>

<script>
    function toggleMenu() {
        const dropdown = document.getElementById('accessibilityDropdown');
        dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    }
</script>





    
    <!-- bot de ayuda-->
    <script SameSite="None; Secure" src="https://cdn.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myLandbot = new Landbot.Popup({
                configUrl: 'https://storage.googleapis.com/landbot.site/v3/H-2694736-BM6DZA94ZPV0OKW0/index.json',

               
            });

            
            document.querySelector('.chatbot-icon').addEventListener('click', function() {
                myLandbot.open(); 
            });
        });
        
    </script>



    

<?php include_once 'Views/template/footer-principal.php'; ?>


   
</body>

</html>
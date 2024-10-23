<?php include_once 'Views/template/header-principal.php'; ?>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contactanos :D</h1>
            <p>
            ¡Nos encantaría saber de ti! Si tienes alguna pregunta, comentario o necesitas más información sobre nuestros productos y servicios, no dudes en ponerte en contacto con nosotros. 
            Nuestro equipo está aquí para ayudarte y te responderá lo más pronto posible.
            </p>
        </div>
    </div>

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" role="form" id="frmContactos">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control mt-1" id="nombre" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control mt-1" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Mensaje</label>
                    <textarea class="form-control mt-1" id="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3" id="btnContactos">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
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

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="<?php echo BASE_URL . 'assets/js/modulos/contactos.js';?>"></script>
</body>

</html>
 <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header bg-primary text-white">
                 <h5 class="modal-title"><i class="fas fa-cart-arrow-down"></i>Carrito</h5>
                 <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                 </button>
             </div>
             <div class="modal-body">
                 <div class="table-responsive">
                     <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Producto</th>
                                 <th>Precio</th>
                                 <th>Cantidad</th>
                                 <th>SubTotal</th>
                                 <th></th>
                             </tr>
                         </thead>
                         <tbody>
                         </tbody>
                     </table>
                 </div>
             </div>
             <div class="d-flex justify-content-around mb-3">
                 <h3 id="totalGeneral"></h3>
                 <?php if (!empty($_SESSION['correo'])) { ?>
                     <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar pedido</a>
                 <?php } else { ?>
                     <a class="btn btn-outline-primary" href="#" onclick="abrirModalLogin();">Iniciar sesion</a>

                 <?php } ?>
             </div>

         </div>
     </div>
 </div>

 <!-- Login directo -->

 <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header bg-primary text-white">
                 <h5 class="modal-title" id="titleLogin">Inicio de Sesión</h5>
                 <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                 </button>
             </div>
             <div class="modal-body m-3">
                 <form method="get" action="">
                     <div class="text-center">
                         <img class="img-thumbnail " src="<?php echo BASE_URL . 'assets/images/logo1.png'; ?>" alt="" width="300">
                     </div>
                     <div class="row">
                         <div class="col-md-12" id="frmLogin">
                             <div class="form-group mb-3">
                                 <label for="correoLogin"><i class="fas fa-envelope"></i> Correo</label>
                                 <input id="correoLogin" class="form-control" type="text" name="correoLogin" placeholder="Correo Electrónico">
                             </div>
                             <div class="form-group mb-3">
                                 <label for="claveLogin"><i class="fas fa-key"></i> Contraseña</label>
                                 <input id="claveLogin" class="form-control" type="text" name="claveLogin" placeholder="Contraseña">
                             </div>
                             <a href="#" id="btnRegister">¿Todavia no tienes una cuenta?</a>
                             <div class="float-end">
                                 <button class="btn btn-primary btn-lg" type="button" id="login">Iniciar sesión</button>
                             </div>
                         </div>
                         <!-- formulario de registro -->
                         <div class="col-md-12 d-none" id="frmRegister">
                             <div class="form-group mb-3">
                                 <label for="nombreRegistro"><i class="fas fa-list"></i> Nombre</label>
                                 <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro" placeholder="Nombre completo">
                             </div>
                             <div class="form-group mb-3">
                                 <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
                                 <input id="correoRegistro" class="form-control" type="text" name="correoRegistro" placeholder="Correo Electrónico">
                             </div>
                             <div class="form-group mb-3">
                                 <label for="claveRegistro"><i class="fas fa-key"></i> Contraseña</label>
                                 <input id="claveRegistro" class="form-control" type="text" name="claveRegistro" placeholder="Contraseña">
                             </div>
                             <a href="#" id="btnLogin">¿Ya tienes una cuenta?</a>
                             <div class="float-end">
                                 <button class="btn btn-primary btn-lg" type="button" id="registrarse">Registrarse</button>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- Start Footer -->
 <footer class="bg-dark" id="tempaltemo_footer">
     <div class="container">
         <div class="row">

             <div class="col-md-4 pt-5">
                 <h2 class="h2 text-success border-bottom pb-3 border-light logo">Green Mind</h2>
                 <ul class="list-unstyled text-light footer-link-list">
                     <li>
                         <i class="fas fa-map-marker-alt fa-fw"></i>
                         123 Consectetur at ligula 10660
                     </li>
                     <li>
                         <i class="fa fa-phone fa-fw"></i>
                         <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                     </li>
                     <li>
                         <i class="fa fa-envelope fa-fw"></i>
                         <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                     </li>
                 </ul>
             </div>

             <div class="col-md-4 pt-5">
                 <h2 class="h2 text-light border-bottom pb-3 border-light">Nuestra Localización</h2>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36383.69025999965!2d-99.17801812660682!3d19.37651112311336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff9b396b3c8f%3A0x48275f020cdf6e36!2sGRUPO%20CONSULTOR%20DE%20MERCADOS%20AGR%C3%8DCOLAS!5e1!3m2!1ses-419!2smx!4v1729469208529!5m2!1ses-419!2smx" 
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>

             <div class="col-md-4 pt-5">
                 <h2 class="h2 text-light border-bottom pb-3 border-light">Publicaciones mas recientes</h2>
                 
                 <div id="fb-root"></div>
                 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v21.0"></script>

                 <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61566973666615&amp;mibextid=ZbWKwL" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/profile.php?id=61566973666615&amp;mibextid=ZbWKwL" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=61566973666615&amp;mibextid=ZbWKwL">greenminditiz</a></blockquote></div>
             </div>

         </div>

         <div class="row text-light mb-4">
             <div class="col-12 mb-3">
                 <div class="w-100 my-3 border-top border-light"></div>
             </div>
             <div class="col-auto me-auto">
                 <ul class="list-inline text-left footer-icons">
                     <li class="list-inline-item border border-light rounded-circle text-center">
                         <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/profile.php?id=61566973666615&mibextid=ZbWKwL"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                     </li>
                     <li class="list-inline-item border border-light rounded-circle text-center">
                         <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/green_minditiz/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                     </li>
                     <li class="list-inline-item border border-light rounded-circle text-center">
                         <a class="text-light text-decoration-none" target="_blank" href="https://x.com/Artgallery15721"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                     </li>
                 </ul>
             </div>
            <!-- <div class="col-auto">
                 <label class="sr-only" for="subscribeEmail">Email</label>
                 <div class="input-group mb-2">
                     <input type="text" class="form-control bg-white border-light" id="subscribeEmail" placeholder="Email address">
                     <div class="input-group-text btn-success text-light">Subscribe</div>
                 </div>
             </div>-->
         </div>
     </div>

     <div class="w-100 bg-black py-3">
         <div class="container">
             <div class="row pt-2">
                 <div class="col-12">
                     <p class="text-left text-light">
                         Copyright &copy; 2024 Green Mind

                     </p>
                 </div>
             </div>
         </div>
     </div>

 </footer>
 <!-- End Footer -->

 <!-- Start Script -->
 <script src=" <?php echo BASE_URL . 'assets/js/jquery-1.11.0.min.js'; ?> "></script>
 <script src=" <?php echo BASE_URL . 'assets/js/jquery-migrate-1.2.1.min.js'; ?> "></script>
 <script src=" <?php echo BASE_URL . 'assets/js/bootstrap.bundle.min.js'; ?> "></script>
 <script src=" <?php echo BASE_URL . 'assets/js/templatemo.js'; ?> "></script>
 <script src=" <?php echo BASE_URL . 'assets/js/custom.js'; ?> "></script>
 <script src=" <?php echo BASE_URL . 'assets/js/sweetalert2.all.min.js'; ?> "></script>
 <script>
     const base_url = '<?php echo BASE_URL; ?>';
 </script>
 <script src=" <?php echo BASE_URL . 'assets/js/carrito.js'; ?> "></script>
 <script src=" <?php echo BASE_URL . 'assets/js/login.js'; ?> "></script>
 <!-- End Script -->
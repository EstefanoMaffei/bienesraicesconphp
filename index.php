
<?php 
     require 'includes/funciones.php';
     incluirTemplate('header', $headerPrincipal = true);
?>
     <main>
          <section class="sobre-nosotros">
               <h2>Sobre Nosotros</h2>
               <div class="sobre-nosotros_boxes"></div>

          </section>

          <section class="departamentos-casas">
               <h2>Departamentos y Casas en venta</h2>

               <div class="departamentos-casas_box">


               </div>

          </section>

          <section class="contactanos">
               <div class="contactanos-texto">
                    <h2>Encuentra la casa de tus sueños</h2>
                    <p>llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
                    <button id="btnAmarillo" class="btn-amarillo"> <a href="contacto.html">Contactános</a></button>
               </div>
          </section>

          <section class="testimonio-blog">
               
               <div class="blog">
                    <h2>Nuestro Blog</h2>
                    <li>
                         <img src="build/img/blog1.jpg" alt="blog1">

                         <div>
                              <h3>TERRAZA EN EL TECHO DE TU CASA</h3>
                              <div class="linea"></div>
                              <p>escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                              <p>Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                         </div>

                    </li>

                    <li>
                         <img src="build/img/blog2.jpg" alt="blog2">
                         <div>
                              <h3>TERRAZA EN EL TECHO DE TU CASA</h3>
                              <div class="linea"></div>
                              <p>escrito el <span>20/10/2022</span> por <span>Admin</span></p>
                              <p>Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                         </div>
                    </li>
               </div>
               
               <div class="testimonio-box">
                    <h2>Testimoniales</h2>
                    
                    <div class="testimonio-general">
                         <img src="build/img/comilla.svg" alt="comilla">
                         <div class="testimonio-texto">
                              <p>El personal se comporto de una manera excelente, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas</p>
                              <p><span>-Estefano Maffei</span></p>
                         </div>
                    </div>
               
               </div>
          </section>
     </main>
     <script src="build/js/bundle.min.js"></script>
<?php
     require 
     'includes/funciones.php';
     incluirTemplate('footer');
?> 
</body>
</html>
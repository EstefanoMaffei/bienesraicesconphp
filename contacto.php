
<?php 
       require 
       'includes/funciones.php';
       
       incluirTemplate('header');
?> 

     <main>
          <h1>CONTACTANOS</h1>

          <picture>
          <source srcset="build/img/destacada3.webp" type="img/webp">
          <source srcset="build/img/destacada3.jpg" type="img/jpg">
          <img loading="lazy" width="200" heigh="300" src="build/img/destacada3.jpg" alt="destacada Contacto">
          </picture> 

          <h2>Llena el formulario y te contactaremos</h2>

          <form class="formulario">
               <fieldset>
                    <legend>Informacion Personal</legend>
                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="tu nombre aqui" id="nombre">

                    <label for="email">Email</label>
                    <input type="email" placeholder="tu Email aqui" id="email">

                    <label for="telefono">Telefono</label>
                    <input type="tel" placeholder="tu celular aqui" id="telefono">

                    <label for="mensaje">Mensaje</label>
                   <textarea id="mensaje" > </textarea>
               </fieldset>

               <fieldset>
                    <legend>Informacion sobre Propiedad</legend>
                    
                    <label for="opciones">Vende o Compra</label>
                    <select id="opciones" >
                         <option value="" disabled selected >--Seleccion--</option>
                         <option value="compra">Compra</option>
                         <option value="Vende">Vende</option>
                    </select>

                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">

               </fieldset>

               <fieldset>
                    <legend>Contacto</legend>
                    
                    <p>Como desea ser contactado</p>
                     
                    <div class="contactar-forma">
                         
                              <label for="contactar-telefono">Telefono</label>
                              <input name="contacto" type="radio" value="telefono" id="contactar-telefono">


                              <label for="contactar-Email">Email</label>
                              <input name="contacto" type="radio" value="Email" id="contactar-Email">

                    

                    </div>


                    <p>Si eligio telefono, elija la fecha y hora</p>

                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha">
                    
                    <label for="hora">Fecha</label>
                    <input type="time" id="fecha" min="09:00" max="18:00">
               </fieldset>
          
               <input type="submit" value="enviar" class="btn-verde btn_contacto">
          </form> 
     </main>

     <script src="build/js/bundle.min.js"></script>

<?php
     require 'includes/funciones.php';
     incluirTemplate('footer');
?> 
</body>
</html>
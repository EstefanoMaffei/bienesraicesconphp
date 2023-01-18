<?php
     require '../../includes/funciones.php';
     incluirTemplate('header');
?>
<main class="contenedor">
     <h1>Crear Servicio</h1>
     <form>
               <fieldset class="formulario-crear">
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
     </form>


     <a href="../index.php" class="btn-amarillo">Volver</a>
</main>
<?php
     incluirTemplate('footer');
?>
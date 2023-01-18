<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bienes Raices</title>
     <link rel="stylesheet" href="/BienesRaices/build/css/app.css">
</head>
<body>
     <header class="<?php echo $headerPrincipal ? 'header-principal' : 'header-secundario'; ?>">
          <nav class="header-navegacion">
               <a href="index.php"><h2>BIENES<span>RAICES</span></h2></a>
               <div class="menu-mobile">
                    <img src="build/img/barras.svg" id="menuHamburguesa">
               </div>
               <ul class="header-navegacion_ul">
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="anuncio.php">Anuncios</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><img src="build/img/dark-mode.svg" id="darkMode"></li>
               </ul>
          </nav>

          <?php
          if($headerPrincipal){?>
               <div class="header-texto">
               <h1>Ventas de Casas y Departamentos</h1>
               <picture>
               <source srcset="src/img/anuncio1.webp" type="webp">
               <source srcset="src/img/anuncio1.jpg" type="jpg">
               <img loading="lazy" width="200" heigh="300" src="build/" alt="">
               </picture> 

          </div>
          <?php }?>
          
     </header>
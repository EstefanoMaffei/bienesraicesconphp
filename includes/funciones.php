<?php
require 'app.php';

function incluirTemplate( string   $nombre , $headerPrincipal =  false){
     include TEMPLATES_URL . "/${nombre}.php";
}

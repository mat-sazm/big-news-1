<?php 

function errors_404()
{
    header('HTTP/1.0 404 Not Found'); 
    include_once "../src/views/errors/404.php";
}
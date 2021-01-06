<?php 

/**
 * Redirige l'utilisateur vers une URL
 */
if (!function_exists("redirect"))
{
    function redirect( string $to = "/" )
    {
        header("location: ". $to);
        exit;
    }
}
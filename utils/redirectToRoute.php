<?php 

if (!function_exists("redirectToRoute"))
{
    function redirectToRoute( string $routeName, bool $absoulute = false )
    {
        redirect( url( $routeName, $absoulute ) );
    }
}
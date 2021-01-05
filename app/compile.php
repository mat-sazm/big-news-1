<?php
/**
 * Fichier de compilation de l'application
 * 
 * Ce fichier génére la page finale HTML avant de retourner le résultat au navigateur
 */

// Dans le cas ou la route est vide, on force le programme a redefinir la route
// vers la page 404
if (empty($route)) 
{
    $route = end($routes);
}


/**
 * Récupération des éléments de la route qui definissent le controleur
 */

// Si ce paramètre est vide, on arrete le programme
if (!isset($route[2]) || empty($route[2])) 
{
    throw new Exception("Le controleur n'est pas définit.");
}

// Initialisation des variables qui définiront le fichier et la fonction à exécuter
$controller_expression  = $route[2];    // homepage:index
$controller_file        = null;         // homepage
$controller_path        = null;         // "../src/controllers/".$controller_file.".php";
$controller_methode     = null;         // homepage_index


//////



echo "<pre>";
print_r($_SERVER['REQUEST_URI']);
echo "</pre>";

echo "<pre>";
print_r($route);
echo "</pre>";

echo "<h3>controller_expression</h3>";
echo "<pre>";
print_r($controller_expression);
echo "</pre>";

echo "<h3>controller_file</h3>";
echo "<pre>";
print_r($controller_file);
echo "</pre>";

echo "<h3>controller_path</h3>";
echo "<pre>";
print_r($controller_path);
echo "</pre>";

echo "<h3>controller_methode</h3>";
echo "<pre>";
print_r($controller_methode);
echo "</pre>";

echo "<hr>";

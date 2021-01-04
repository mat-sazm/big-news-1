  <?php
/**
 * Fichier de routage de l'application
 * 
 * RAPPEL du format d'une route dans le tableau $route
 *  - Le nom de la route
 *  - Le "path"
 *  - Le "controller", la focntion déclenché par la route
 *  - La|Les méthode(s)
 */

// Dans le cas ou la variable $routes n'est pas défini (dans le fichier routes.php)
// On initalise la variable $routes avec un tableau vide
if (!isset($routes)) 
{
    $routes = [];
}

// Récupération de l'uri courant
if (!empty($_SERVER['REQUEST_URI'])) 
{
    $uri = $_SERVER['REQUEST_URI']; // Récupération de l'URI avec eventuel paramètres
    $uri = explode("?", $uri); // Séparation de l'URI est des paramètres
    $uri = $uri[0]; // Récupération de l'URI sans paramètre
}


// Recherche de l'URI dans le tableau de routage
foreach ($routes as $route) 
{
    if ($route[1] == $uri) 
    {
        // Si la route est trouvé dans la table de routage on sort de la boucle
        // grace au mot clé "break;"
        // La variable $route contient les infos de la dernière itération de la boucle
        break;
    }
}





echo "<hr>";
var_dump( $_SERVER['REQUEST_URI'] );

echo "<hr>";
var_dump( $uri );
echo "<hr>";
echo "<pre>";
print_r( $route );
echo "</pre>";
echo "<hr>";
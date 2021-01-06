<?php 
/**
 * Fichier de chargement automatique des script du répertoire "utils"
 */

// Test si la constante UTILS_PATH n'est pas définie.
if (!defined("UTILS_PATH"))
{
    // const UTILS_PATH = null;
    define('UTILS_PATH', null);
}

// Si UTILS_PATH n'est pas définit à NULL, C.A.D que UTILS_PATH est bien définit en amont (dans le fichier config.php)
if (UTILS_PATH != null)
{
    
    // Verifier l'existance du répertoire "utils"

        // Scanner le contenu du répertoire


        // Boucle sur le tableau du contenu du répertoire "utils"

            // Filtre les fichiers PHP

                // Inclure le fichier PHP

                // include_once "../utils/url.php";
                // include_once "../utils/redirect.php";
                // include_once "../utils/redirectToRoute.php";

}
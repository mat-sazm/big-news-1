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
    if (is_dir( UTILS_PATH ))
    {

        // Scanner le contenu du répertoire
        $utils = scandir(UTILS_PATH);

        // Boucle sur le tableau du contenu du répertoire "utils"
        foreach ($utils as $util)
        {
            // Filtre les fichiers PHP
            // if (preg_match( "/\.php$/i", $util))
            // if (preg_match( "/\.(php|PHP)$/", $util))
            // if (preg_match("/^.*\.php$/", $util))
            if (preg_match("/\.php$/i", $util))
            {
                // Inclure le fichier PHP
                include_once UTILS_PATH . $util;
            }

        }
    }
}
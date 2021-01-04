<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exécution
 * 3. Définition des variables de base de données
 * 4. Définition des variables de routage
 * 5. Definition des exepressions régulières
 */


/**
 * 1. Définition des constantes
 */

// Definition du titre du site
const WEBSITE_TITLE = "Big News, L'actu.. la grosse Actu !";

// Definir le chemin du répertoire "utils"
const UTILS_PATH = "../utils/";


/**
 * 2. Définition des variables d'environnement d'exécution
 */

// Environnement de développement ou production ?
// les valeur peuvent être : "prod" ou "dev"
// Par défaut, on considère que l'application s'exécute en environnement de PROD
$env = "prod";

// Liste des domaines que l'on considères comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "bignews.local"
];


/**
 * 3. Définition des variables de base de données
 */

/**
 * 4. Définition des variables de routage
 */

/**
 * 5. Definition des exepressions régulières
 */
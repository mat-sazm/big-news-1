<?php
/**
 * Fichier de définition des routes de l'applications
 * 
 * - Chaque ligne du tableau $routes défini une route
 * - Chaque route est défini par
 *      - Le nom de la route
 *      - Le "path"
 *      - Le "controller", la focntion déclenché par la route
 *      - La|Les méthode(s)
 */

$routes = [

    // Homepage
    // --

    [
        "homepage",         // Nom de la route
        "/",                // path
        "homepage:index",   // Infos concernat le fichier et la fonction du controleur
        ["HEAD","GET"]      // Methodes autorisées pour la requete
    ],


    // Articles
    // --

    // Index des articles
    ["article_index", "/tous-nos-articles", "article:index", ["HEAD", "GET"]],

    // Read article
    ["article_read", "/article", "article:read", ["HEAD", "GET"]],


    // Catégorie
    // --

    // Index des categories
    ["category_index", "/nos-categories", "category:index", ["HEAD", "GET"]],

    // Read category
    ["category_read", "/category", "category:read", ["HEAD", "GET"]],


    // Pages de sécurité
    // --

    ["login",               "/connectez-vous",                   "security:login",               ["HEAD","GET","POST"]],
    ["register",            "/inscription",                 "security:register",            ["HEAD","GET","POST"]],
    ["forgotten_password",  "/mot-de-passe-oublie",         "security:forgotten_password",  ["HEAD","GET","POST"]],
    ["renew_password",      "/modifier-mon-mot-de-passe",   "security:renew_password",      ["HEAD","GET","POST"]],
    ["logout",              "/deconnexion",                 "security:logout",              ["HEAD","GET"]],

    
    // User Account
    // --

    // Profil utilisateur
    ["account", "/mon-compte", "account", ["HEAD","GET"]],


    // ---

    // Erreur 404 
    // /!\ TOUJOURS EN DERNIER DU TABLEAU ROUTE
    ["error-404", "/404", "errors:404", ["HEAD","GET"]]

];
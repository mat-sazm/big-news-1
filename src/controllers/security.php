<?php 

function security_login()
{
    // 1. Recupération des "Models" / Données
    // 2. Traitement des données
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {

    }

    // 3. Integration de la vue
    include_once "../src/views/security/login.php";
}


function security_register()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/security/register.php";
}


function security_forgotten_password()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/security/forgotten_password.php";
}


function security_renew_password()
{
    // 1. Recupération des "Models" / Données

    // 2. Traitement des données

    // 3. Integration de la vue
    include_once "../src/views/security/renew_password.php";
}

function security_logout()
{
    // Traitement des données
    session_destroy();

    // header("location: ". url("homepage"));
    header("location: /categories");
    exit;
}
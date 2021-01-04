<?php
/**
 * Fichier de connexions aux base de sonnées
 * - http://php.net/manual/fr/class.pdo.php
 * 
 * 
 * Instance PDO - Exemple 1
 * Passage de paramètres au constructeur :
 * ---
 * $pdo = new PDO('mysql:host=localhost;dbname=DBNAME', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
 * 
 * 
 * Instance PDO - Exemple 2
 * construction de objet, puis passage de paramètres à PDO::setAttribute() :
 * ---
 * $pdo = new PDO('mysql:host=localhost;dbname=DBNAME', 'root', '');
 * $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 */

// Génère la chaine DSN (Domain Source Name) PDO (ex: 'mysql:host=localhost;dbname=DBNAME')
$db_dsn = $db_type.":";
$db_dsn.= "host=". $db_host.";";
$db_dsn.= "port=". $db_port.";";
$db_dsn.= "dbname=". $db_schema.";";
$db_dsn.= "charset=". $db_charset.";";


// Tester Connection à la BDD
try {

    // instance de connexion à la BDD
    $db = new PDO($db_dsn, $db_user, $db_pass);

    // Affiche les erreurs de BDD
    if ($env == "dev")
    {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }

} 

// Echec de connexion BDD
catch (PDOException $e) {
    die ("Erreur de connexion à la BDD.<br>Message : ". $e->getMessage());
}


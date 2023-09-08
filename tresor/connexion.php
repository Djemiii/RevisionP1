<?php

$servername = 'localhost';
$username = 'root';
$pwd = '';
$dbname='tresor';

$connexion = new mysqli( $servername, $username,$pwd,$dbname);

if($connexion->connect_error) {
    die('Echec lors de la connexion à la db:'.$connexion->connect_error);
}
else {
    
        echo " La connexion a réussi ";
    
}
$connexion->close();




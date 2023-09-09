<?php

try {
    $db=new PDO('mysql:host=localhost;dbname=tresor;charset=utf8','root','');
    
} catch (Exception $e) {
    die($e->getMessage());
}
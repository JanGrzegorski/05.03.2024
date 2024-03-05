<?php

$server = "localhost";
$port = 3306;
$username = "root";
$password = "";
$bazadanych = "2CT05031024";

    try {
        $polaczenie = new PDO('mysql:host='.$server.';dbname='.$bazadanych.';port ='.$port."charset=utf8",$username,$password);
        echo("<h3>Polaczono z baza danych</h3>");
        
    } catch (PDOException $e){
    echo("<h3>Error z polaczeniem do bazy danych</h3>");
        die();
    }

    
?>
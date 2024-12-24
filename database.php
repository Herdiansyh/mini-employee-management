<?php 

    $host = 'localhost';
    $dbname = 'tutorialphp';
    $username = 'root';
    $password = '';


    try{
        // membuat koneksi ke database dengan PDO
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch(PDOException $e){
    die("koneksi database gagal: " . $e->getMessage());
    }










?>
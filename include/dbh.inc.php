<?php
    // $dsn = "mysql:host=localhost;dbname=qwerty";
    // $dbuser = "root";
    // $dbpassword = "";

    // try {
    //     $pdo = new PDO($dsn, $dbuser, $dbpassword);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOExeption $e) {
    //     echo "Connection failed: " .$e->getMEssage();
    // }



    // $dbname = "mysql:host=localhost;dbname=qwerty";
    // $dbauser = "root";
    // $dbpwd = "";

    // try {
    //     $pdo = new PDO($dbname, $dbauser, $dbpassword);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     echo "Connection Error: " . $e->gteMessage();
    // }


    $dbcon =  "mysql:host=localhost;dbname=qwerty";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO($dbcon,$dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo "Connection Erro: " . $e->getMEssage();
    }
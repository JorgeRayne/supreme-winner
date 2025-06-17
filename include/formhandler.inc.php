<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($username) || !empty($password) || !empty($email)) {
        try {

            require_once "dbh.inc.php";

            $query = "INSERT INTO person (username, pwd, email) VALUES (:username, :pwd, :email);";

            $stmt = $pdo->prepare($query);
            
            $stmt->bindParam(":username" ,$username);
            $stmt->bindParam(":pwd" ,$password);
            $stmt->bindParam(":email" ,$email);

            $stmt->execute();

            header("Location: ../index.php");

            die()

        } catch (PDOException $th) {
            die("Query Error: " . $e->getMessage());
        }
    }
}

//     try {
//     require_once "dbh.inc.php";

//     $querty = "INSERT INTO person(username, pwd, email) 
//                 VALUES(:username, :pwd, :email); ";

//     $stmt = $pdo->prepare($querty);

//     $stmt->bindParam(":username", $username);
//     $stmt->bindParam(":pwd", $password);
//     $stmt->bindParam(":email", $email);

//     $stmt->execute();

//     $pdo = null;
//     $stmt = null;

//     header("Location: ../index.php");
 
//     die();
        
// } catch (PDOException $e) {
//     die("Query failed: " . $e->getMessage());
// }
// } else{
//     header("Location: ../index.php");
// }
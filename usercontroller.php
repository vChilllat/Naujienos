<?php

 
require "../classes/users.php"; // klasiu failo itraukimas
 
 
 
$connect= new mysqli("localhost", 'root', '', 'articles');
 
$sql="SELECT userID, userName, password, FROM users";
$result= mysqli_query($connect, $sql);
 
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "articles";
$message = "";
try {
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["login"])) {
        if (empty($_POST["userName"]) || empty($_POST["Password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM users WHERE username = :userName AND Password = :Password";
            $statement = $connect->prepare($query);
            $statement->execute(
                    array(
                        'userName' => $_POST["userName"],
                        'Password' => $_POST["Password"]
                    )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION["userName"] = $_POST["userName"];
                header("location:userview.php");
            } else {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}

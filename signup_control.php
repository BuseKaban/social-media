<?php

session_start();
require("baglanti.php");

$sorgu = "INSERT INTO `users`(`name`, `password`) VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

if($baglan){
    $success = mysqli_query($baglan,$sorgu);
    

    if($success){
        echo 1;
        $_SESSION["username"] = $_POST["username"];
        $last_id = mysqli_insert_id($baglan);
        $_SESSION["id"] = $last_id;
        die();
    }
    else{
        echo "Omadı";
    }
}

?>
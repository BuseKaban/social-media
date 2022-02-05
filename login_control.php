<?php

session_start();

require("baglanti.php");

 $sorgu = "SELECT * from users where name like '" .$_POST["username"].  "'
 and password like '" .$_POST["password"].  "' ";

 if($baglan){
    $result = mysqli_query($baglan,$sorgu);
    if(mysqli_num_rows($result)>0){
        $_SESSION["username"] = $_POST["username"];
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id"] = $row["id"];
        echo 1;
    }
 }
?>
<?php

require("baglanti.php");

 $sorgu = "SELECT * from users where name like '" .$_POST["username"].  "'
 and password like '" .$_POST["password"].  "' ";

 if($baglan){
    $result = mysqli_query($baglan,$sorgu);

    if(mysqli_num_rows($result)>0){
        echo 1;
    }
 }
 





?>
<?php
session_start();
require("baglanti.php");




if($baglan){

    $sorgu = "select * from likes where user_id ='".$_SESSION["id"]."' and post_id = '".$_POST["post_id"]."'";

    $result = mysqli_query($baglan,$sorgu);

    if(mysqli_num_rows($result)>0){

        $sorgu = "DELETE FROM `likes` WHERE user_id = '".$_SESSION["id"]."' and post_id = '".$_POST["post_id"]."'";
        mysqli_query($baglan,$sorgu);
    }
    else{
        $sorgu = "INSERT INTO `likes`(`user_id`, `post_id`) VALUES ('".$_SESSION["id"]."','".$_POST["post_id"]."')";
        mysqli_query($baglan,$sorgu);
    }

    $sorgu ="SELECT COUNT(*) as toplam from likes where post_id = '".$_POST["post_id"]."'";

    $result = mysqli_query($baglan,$sorgu);
    
    $row = mysqli_fetch_array($result);
        
    echo $row[0];
    
}


?>
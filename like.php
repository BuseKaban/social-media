<?php

require("baglanti.php");


$sorgu = "INSERT INTO `likes`(`user_id`, `post_id`) VALUES (3,'".$_POST["post"]."')";

if($baglan){
    $success = mysqli_query($baglan,$sorgu);

    $sorgu ="SELECT COUNT(*) as toplam from likes where post_id = '".$_POST["post"]."'";

    $result = mysqli_query($baglan,$sorgu);
    
    $row = mysqli_fetch_array($result);
        
    

    if($success){ 
        echo $row[0];
    }
    
}


?>
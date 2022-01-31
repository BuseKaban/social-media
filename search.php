<?php
include("baglanti.php");

$sorgu = "SELECT * FROM users where name like '".$_POST["search"]."%'";

if($baglan){
    $result = mysqli_query($baglan,$sorgu);
    

    
    $veri = array();

    while($row = mysqli_fetch_assoc($result))    {
        $veri[] = $row;
    }

    echo json_encode($veri);
}

?>
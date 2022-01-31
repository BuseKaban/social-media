<?php

require("baglanti.php");

$foto_klasor = "uploads/";

$foto_dosya = $foto_klasor.basename($_FILES["img"]["name"]);

$foto_dosya_tip = strtolower(pathinfo($foto_dosya,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["img"]["tmp_name"],$foto_dosya)){
    echo "dosya yüklendi";
}
else{
    echo "yüklenemedi";
}

$sorgu = "INSERT INTO `post`(`user_id`, `url`) VALUES (3,'".$_FILES["img"]["name"]."')";

if($baglan){
    $success = mysqli_query($baglan,$sorgu);

    if($success){
        echo "Veritabanına eklendi.";
    }
    else{
        echo "Omadı";
    }
}


?>
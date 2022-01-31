<?php
include("head.php");
require("baglanti.php");

if($baglan){
    $sorgu= "select * from post ";
    $result = mysqli_query($baglan,$sorgu);

    foreach($result as $row){
        
       
        
        echo "<img class='center-cropped' src='uploads/".$row["url"]."'>";
        
    }
}
?>

<script>
    $(document).ready(function(){
            $("#login_button").click(function(){
            $.post("like.php",{
                username : $("#username").val(),
                password : $("#password").val()
            },function(data,status){
                console.log(data);
            });
        });

        });
</script>

    <style>
        .center-cropped {
            object-fit: cover; 
            object-position: center; 
            height: 400px;
            width: 400px;
            align-self: center;
        }
    </style>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="img">
        <input type="submit" value="buton" name="submit">

    </form>
    
    


<?php
session_start();
include("head.php");
require("baglanti.php");

if ($baglan) {
    $sorgu = "SELECT post.*, count(likes.post_id) as begeni FROM `post` left join likes on post.id = likes.post_id
    group by post.id";
    $result = mysqli_query($baglan, $sorgu);

    foreach ($result as $row) {
        echo $row["user_id"]. "<br>";
        echo "<img class='center-cropped' src='uploads/" . $row["url"] . "'>  <br>"; 
        echo $row["begeni"]. "<br>";
        echo "<button class='like' value ='".$row["id"]."'>Like</button>" ;
    }
}

?>

<script>
    $(document).ready(function(){
        $(".like").click(function(){
            $.post("like.php",
            {
                post_id : $(this).val()
            },
            function(data,status){
                console.log(data);
            });

        });
    });
</script>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img" id="img">
    <input type="submit" value="buton" name="submit">
</form>
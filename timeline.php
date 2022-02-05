<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:index.php");
    die();
}
include("head.php");
?>

<a href="logout.php">Logout</a>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img" id="img">
    <input type="submit" value="buton" name="submit">
</form>

<?php
require("baglanti.php");

if ($baglan) {
    $sorgu = "SELECT post.* ,users.name, count(likes.post_id) as begeni FROM `post` left join likes on post.id = likes.post_id
    left join users on users.id = post.user_id
    group by post.id";
    $result = mysqli_query($baglan, $sorgu);

    foreach ($result as $row) {
        echo '<div class= "PostContainer">';
            echo '<div class = "User">' .$row["name"]. '</div>';
            echo "<img class='center-cropped' src='uploads/" . $row["url"] . "'>"; 
            echo "<div class='PostInfo'>";
                echo "<p id='".$row["id"]."'>" .$row["begeni"]. "</p>";
                echo "<button class='like' value ='".$row["id"]."'>Like</button>" ;
            echo '</div>';
        echo '</div>';
    }
}
?>

<script>
    $(document).ready(function(){
        $(".like").click(function(){
            var id = $(this).val() 
            $.post("like.php",
            {
                post_id : id
            },
            function(data,status){
                $("#" + id).html(data)
            });
        });
    });
</script>

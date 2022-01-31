<?php
include("head.php")
?>

    <label for="username">Username </label>
    <input type="text" id ="username" name="username" > <br>
    <label for="password">Password </label>
    <input type="text" id = "password" name="password"> <br>
    <button id ="login_button">Login</button>
    
    <script>
        $(document).ready(function(){
            $("#login_button").click(function(){
            $.post("giris.php",{
                username : $("#username").val(),
                password : $("#password").val()
            },function(data,status){
                console.log(data);
            });
        });

        });
        
        


       
    
    </script>


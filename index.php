<?php
session_start();
include("head.php")
?>

    <label for="username">Username </label>
    <input type="text" id ="username" name="username" > <br>
    <label for="password">Password </label>
    <input type="text" id = "password" name="password"> <br>
    <button id ="login_button">Login</button>
    <p id = "giris_uyari">Giriş Yapılamadı!</p>
    
    <script>
        $(document).ready(function(){
            $("#giris_uyari").hide();

            $("#login_button").click(function(){
                $.post("login_control.php",
                {
                    username : $("#username").val(),
                    password : $("#password").val()
                },
                function(data,status){
                    if(data == 1){
                        location.href = 'timeline.php';
                    }
                    else{
                        $("#giris_uyari").show();
                    }
                });
            });
        });
    </script>


<?php
session_start();
if(isset($_SESSION["username"])){
    header("Location:timeline.php");
    die();
}
include("head.php");

?>   
    
    <label for="username">Username </label>
    <input type="text" id ="username" name="username" > <br>
    <label for="password">Password </label>
    <input type="text" id = "password" name="password"> <br>
    <button id ="signup_button">Sign Up </button>
    <!--<p id = "account_uyari">Thisaccount!Login.</p>-->

    <script>
        $(document).ready(function(){
            //$("#giris_uyari").hide();

            $("#signup_button").click(function(){
                $.post("signup_control.php",
                {
                    username : $("#username").val(),
                    password : $("#password").val()
                },
                function(data,status){
                    if(data == 1){
                        location.href = 'timeline.php';
                    }
                });
            });
        }); 
    </script>
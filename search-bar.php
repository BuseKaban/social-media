
<?php
include("head.php");
?>
    <input type="text" id="search" name="search"> <br>
    <button id = "search_button">Search</button>
    <ul id = "list"></ul>
    <script>
    
        $(document).ready(function(){
            $("#search_button").click(function(){
            $.post("search.php",{
                search : $("#search").val(),
            
                
            },function(data,status){
                const obj = JSON.parse(data);
                var ul =document.getElementById("list");
                for(const element of obj){
                    var li = document.createElement("li");
                    li.appendChild(document.createTextNode(element.name));
                    ul.appendChild(li);
                    li.addEventListener("click",function(){
                        console.log(element.name);
                        
                    })
                }
                
                
            });
        });

        });
      
        


       
    
    </script>

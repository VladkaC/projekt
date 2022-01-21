<?php
    function logout(){
        if(isset ($_POST["logout"])){
            unset ($_SESSION["id"]);
            unset ($_SESSION["username"]);
            unset ($_SESSION["email"]);
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: index.php");
            header("Connection: close");
            }
    }
    
    function NotLoggedIn (){
        if($_SESSION["id"]==""){
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: index.php");
            header("Connection: close");
        }
    }
   
?>
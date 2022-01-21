<?php
    
    function Connection(){
            global $conection;
            //připojení do databáze
            $conection=mysqli_connect("localhost","root","","loginapplication");
        }
    
   
?>
     
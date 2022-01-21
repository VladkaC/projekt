<?php
include_once "bd.php";
Connection();

if(isset($_POST["submit"])){
    $password=$_POST["password"];
    $password2=$_POST["password2"];

    $password=mysqli_real_escape_string($conection,$password);
    $password2=mysqli_real_escape_string($conection,$password2);

    $query="SELECT * FROM registr  WHERE username='".$_SESSION["username"]."'";
    $result=mysqli_query($conection,$query);
    mysqli_num_rows($result);
    $checkArray=mysqli_fetch_array($result);

    if($checkArray['username']===$_SESSION["username"]){
        session_regenerate_id (); 
        if($password){       
        if($password!==$password2){
            echo '<script type="text/javascript"> alert ("Heslo není stejné.")</script>';
        }elseif (strlen($password) <= 5){
            echo '<script type="text/javascript"> alert ("Heslo musí obsahovat minimálně 6 znaků a maximálně 20.")</script>';
        }elseif (strlen($password) > 20){
            echo '<script type="text/javascript"> alert ("Heslo musí obsahovat minimálně 6 znaků a maximálně 20.")</script>';
        }
        else{
            $hashFormat="$2y$10$";
            $salt="uKkRwhlohen15ra24Nqwpt";
            $hasFormat_salt=$hashFormat . $salt;
            $password = crypt($password ,$hasFormat_salt);
            $password2 = crypt($password2 ,$hasFormat_salt);
            $query2="UPDATE registr SET password2='$password', password3='$password2' WHERE username='".$_SESSION["username"]."' ";
            $result2=mysqli_query($conection,$query2);
           
            echo '<script type="text/javascript"> alert ("Heslo změněno.")</script>';
                if(!$result2){
                    echo '<script type="text/javascript"> alert ("chyba!!!!!")</script>';
                }
        }
    }        
    }else{
        echo '<script type="text/javascript"> alert ("Vyskytla se chyba")</script>';
    }
}   
?>

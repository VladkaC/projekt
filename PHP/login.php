<?php 
include_once "bd.php";
Connection();
session_start();

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $password=mysqli_real_escape_string($conection,$password);
    $username=mysqli_real_escape_string($conection,$username);
    $hashFormat="$2y$10$";
    $salt="uKkRwhlohen15ra24Nqwpt";
    $hasFormat_salt=$hashFormat . $salt;
    $password = crypt($password ,$hasFormat_salt);
 
    $query="SELECT * FROM registr WHERE  username='$username' AND password2='$password' ";
    $result=mysqli_query($conection,$query);
        mysqli_num_rows($result);
        $checkArray=mysqli_fetch_array($result);
            
            if($checkArray['username']==$username && $checkArray['password2']==$password){
                session_regenerate_id ();
                $check=mysqli_fetch_assoc($result);
                $_SESSION["id"]=$id;
                $_SESSION["username"]=$username;
                $_SESSION["email"]=$email;
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: loginIndex.php");
                header("Connection: close");
            }else{
            echo '<script type="text/javascript"> alert ("Přihlašovací údaje jsou chybné.")</script>'; 
            } 
    }

   
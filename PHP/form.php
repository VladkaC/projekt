
<?php

include_once "PHP/bd.php";


Connection();
  
if(isset($_POST["send"])){
    $radio1=$_POST["radio1"]; 
        //ochrana = pro bezpečnost 
        $radio1=mysqli_real_escape_string($conection,$radio1);
    $query="INSERT INTO questionn(anketa)VALUES('$radio1')";
    $result=mysqli_query($conection,$query,);       
}
    //registrace emailu
    if (isset($_POST["register"])){  
        $email=$_POST["email"];
        $email=mysqli_real_escape_string($conection,$email);
        if ($email){
            $query= "SELECT * FROM newemail WHERE email='$email'";
            $result2=mysqli_query($conection,$query);
            $overeni2=mysqli_num_rows($result2);
            $overeni=mysqli_fetch_array($result2);
                if($overeni["email"]==$email){
                    echo '<script type="text/javascript"> alert ("Email je již používán.")</script>';  
                }
                elseif (!preg_match("#^.+@.+\\..+$#", $email))
                    {
                    echo '<script type="text/javascript"> alert ("Nesprávně zadaná emailová adresa.")</script>';
                }
                
                else {
                    $query="INSERT INTO newemail(email)VALUES('$email')";
                    $result=mysqli_query($conection,$query);
                        if($result){
                        echo '<script type="text/javascript"> alert ("Email byl úspěšně odeslán")</script>';
                        }      
                    } 
        }  
    }     
      //uživatelská registrace 
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $password2=$_POST["password2"];
         
        $name=mysqli_real_escape_string($conection,$name);
        $email=mysqli_real_escape_string($conection,$email);           
        if($name){
            $query= "SELECT * FROM registr WHERE username='$name' OR email='$email'";
            $result2=mysqli_query($conection,$query);
            $overeni2=mysqli_num_rows($result2);
            $overeni=mysqli_fetch_array($result2);
                if($overeni["username"]==$name){
                    echo '<script type="text/javascript"> alert ("Uživatelské jméno již existuje.")</script>';  
                }
                elseif($overeni["email"]==$email){
                    echo '<script type="text/javascript"> alert ("Email je již používán.")</script>';  
                }
                elseif (strlen($password) <= 5){
                    echo '<script type="text/javascript"> alert ("Heslo musí obsahovat minimálně 6 znaků a maximálně 20.")</script>';
                }
                elseif (!preg_match("#^[0-9a-zA-Z]{5,20}$#",$password)){
                    echo '<script type="text/javascript"> alert ("Heslo musí obsahovat minimálně 6 znaků a maximálně 20.")</script>';
                }
                elseif (strlen($password)>20){
                    echo '<script type="text/javascript"> alert ("Heslo musí obsahovat minimálně 6 znaků a maximálně 20.")</script>';
                }
                elseif($password !== $password2){
                    echo '<script type="text/javascript"> alert ("Heslo není stejné.")</script>';
                }
                elseif (!preg_match("#^.+@.+\\..+$#", $email)){
                    echo '<script type="text/javascript"> alert ("Špatný e-mail.")</script>';
                }
                elseif (strlen($name)<=5 ){
                    echo '<script type="text/javascript"> alert ("Uživatelské jmeno musí obsahova minimálně 6 zanků a maximálně 20.")</script>';
                }
                elseif (!preg_match("#^[0-9a-zA-Z]{5,20}$#",$name)){
                    echo '<script type="text/javascript"> alert ("Uživatelské jmeno musí obsahova minimálně 6 zanků a maximálně 20.")</script>';
                }
                else {
                    $hashFormat="$2y$10$";
                    $salt="uKkRwhlohen15ra24Nqwpt";
                    $hasFormat_salt=$hashFormat . $salt;
                    $password = crypt($password ,$hasFormat_salt);
                    $password2 = crypt($password2 ,$hasFormat_salt); 
                    $query="INSERT INTO registr(username,email,password2,password3) VALUES('$name','$email','$password','$password2')";
                    $result=mysqli_query($conection,$query);
                        if($result){
                            echo '<script type="text/javascript"> alert ("Registrace proběhla úspěšně.")</script>';                         
                        }
                        else {
                            echo '<script type="text/javascript"> alert ("Vyskytla se chyba.")</script>';
                        }
                    }
                }
                    
    }
     //výpis registrovaných uživatelů        
    $query= "SELECT username FROM registr";
    $result2=mysqli_query($conection,$query);
    

/*
    accept:function(file,done){
        console.log(file);
      if(  file.type!='image/jpeg'){
            done();
        }
        else {var reader = new FileReader();
        reader.onload = (function(entry) {
      // The Image() constructor creates a new HTMLImageElement instance.
      var image = new Image(); 
      image.src = entry.target.result;
      image.onload = function() {

        console.log(this.width);
        console.log(this.height);
        if (this.width / this.height != 0.75) {done("Spatne rozmery")}
        else { done(); }

      };
    });

    reader.readAsDataURL(file);
    done();}
        
        }
    
    
    
        accept: function(file, done) {
            maxFilesize=5;
          var sirka = 0;   
          var vyska = 0; 
          var reader = new FileReader();   
            reader.onload = (function(file) {      
              var image = new Image();     
              image.src = file.target.result;     
              image.onload = function() {
                sirka = this.width;
                vyska = this.height;       
            if ((pomer_min < (sirka / vyska)) && ((sirka / vyska)< pomer_max)) {done("spatny pomer stran");}       
                else { done(); }     
              };   
            });   
          reader.readAsDataURL(file); 
        },
            
            }; 
*/
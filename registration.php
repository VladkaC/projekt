<!DOCTYPE html>
<html lang="cs">
<head>
    <link rel="stylesheet" type="text/css" href="styly3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="registraion_header">
        <img class="sakura" src="images/sss.png" alt="">
        <h1 class="registration_h1">Japonsko</h1>
    </div>
    <?php 
    include "PHP/form.php";
    ?>
    <div class="registration">
        <h2>Registrace</h2>
        <form  action="registration.php" method="POST">
            <input type="text" name="name" size="20" placeholder="Uživatelské jméno"><br>
            <input type="text" name="email" placeholder="vas@email.cz"><br>
            <input type="password" name="password" placeholder="Heslo"><br>
            <input type="password" name="password2" placeholder="Potvrďte heslo"><br>
            <input type="submit" name="submit" value="Registovat">
        </form>
        <a href="index.php">Zpět na úvodní stránku</a>
    </div>  
    <?php 
    include "footer.php";
    ?>
</body>
</html>
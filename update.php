<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <link rel="stylesheet" type="text/css" href="styly3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japonsko</title>
</head>
<body>
<?php 
include_once "PHP/bd.php";
include_once "PHP/updatePHP.php";
include "header.php" 
?>
<main>
        <div class="container">
            <div class="update" >
                <h2>Změna hesla</h2>
                    <form  class ="changPassword" action="update.php" method="POST">
                        <input type="text" name="username" size="30" value="<?php echo $_SESSION ['username'] ?> " disabled><br>
                        <input type="password" name="password" size="30" placeholder="Nové heslo"><br>
                        <input type="password" name="password2" size="30" placeholder="Potvrďte své heslo"><br>
                        <input type="submit" name="submit" value="Změnit">
                    </form>
            </div>
        </div> 
    </main> 
    <?php 
        include "footer.php";
    ?>   
</body>
</html>

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
            include_once "PHP/login.php";
            include_once "PHP/form.php";
            
    ?>
 
    <?php 
    include "header.php" 
    ?>
    <main>
        <div class="container">
            <div class="left col">
                <div class="login">
                    <h2>Přihlášení</h2>
                    <form method="POST" action="index.php">
                        <label for="jmeno">Uživatelské jméno</label><br>
                        <input type="text" name="username" size="20" ><br>
                        <label for="heslo">Heslo</label><br>
                        <input type="password" name="password" id="heslo"><br>
                        <input type="submit" value="Přihlásit se " name="login">
                    </form>
                    <a href="registration.php">Registrovat se</a>
                </div>
                <div class="anime">
                    <h2>Druhy anime</h2>
                    <a href="">Komedie</a>
                    <a href="">Fantasy</a>
                    <a href="">Sci-fi</a>
                    <a href="">Horor</a>
                    <a href="">Drama</a>
                    <a href="">Supernatural</a>
                    <a href="">Historie</a>
                </div>
                <div class="question">
                    Vyberte oblíbené anime: <br>
                    <form action="index.php" method="POST">
                        <input type="radio" name="radio1" value="a"/>Akame ga kill <br>
                        <input type="radio" name="radio1" value="b"/>Blood+ <br>
                        <input type="radio" name="radio1" value="c"/>Bleach <br>
                        <input type="submit" name="send" value="Hlasovat">
                    </form>
                </div>
                <div class="new">
                    <h2>Zadejte svůj e-mail pro odběr novinek</h2>
                        <form action="index.php" method="POST">
                            <input name="email" size="15" id="email" placeholder="vas@email.cz" type="text">
                            <input name="register" value="Registrovat" type="submit">
                        </form>
                </div>

            </div><!--konec left-->

            <div class="mid col">
                <h2>Vznik Japonska</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Praesent vitae arcu tempor neque lacinia pretium. Integer vulputate sem a nibh rutrum consequat.
                Pellentesque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac 
                turpis egestas. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Pellentesque arcu.
                onec vitae arcu. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem
                purus in lacus. Maecenas libero. Nam quis nulla. Cras pede libero, dapibus nec, pretium sit amet, 
                tempor quis. Vivamus luctus egestas leo. Nullam rhoncus aliquam metus. Phasellus et lorem id felis 
                nonummy placerat.
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vitae arcu tempor neque lacinia pretium. Integer vulputate sem a nibh rutrum consequat. Pellentesque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Pellentesque arcu. Donec vitae arcu. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Maecenas libero. Nam quis nulla. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Vivamus luctus egestas leo. Nullam rhoncus aliquam metus. Phasellus et lorem id felis nonummy placerat.
                </p>
      
                <h2>Tokio</h2>
                <p>
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut tempus purus at lorem. Donec quis nibh at felis congue commodo. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Donec vitae arcu. Phasellus rhoncus. Etiam neque. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quisque porta. Nulla quis diam. Vestibulum fermentum tortor id mi. Proin mattis lacinia justo. Maecenas libero. Phasellus et lorem id felis nonummy placerat. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim.
                </p>
                <p>
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut tempus purus at lorem. Donec quis nibh at felis congue commodo. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Donec vitae arcu. Phasellus rhoncus. Etiam neque. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quisque porta. Nulla quis diam. Vestibulum fermentum tortor id mi. Proin mattis lacinia justo. Maecenas libero. Phasellus et lorem id felis nonummy placerat. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim.
                </p>
    
                <h2>Krásy Japonska</h2>
                <p>
                <!--<img src="images/chram5.jpg" alt=""> -->
                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Mauris elementum mauris vitae tortor. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Pellentesque ipsum. Aliquam id dolor. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Quisque tincidunt scelerisque libero. Integer imperdiet lectus quis justo. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien.
                <br>
                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Mauris elementum mauris vitae tortor. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Pellentesque ipsum. Aliquam id dolor. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Quisque tincidunt scelerisque libero. Integer imperdiet lectus quis justo. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien.
                </p>
            </div><!--konec mid-->
            <div class="right col">
                    <br>
                <div class="user">    
                <h2>Registrovaní uživatelé:</h2>
                
                    <?php 
                    while($row= mysqli_fetch_assoc($result2)){
                        echo htmlspecialchars($row["username"]) ;
                        echo "<br>";
                    }
                    ?>
                </div>    
            </div><!--konec right-col-->
        </div> <!--konec conteiner-->
    </main> 
    <?php 
        include "footer.php";
    ?>
</body>
</html>
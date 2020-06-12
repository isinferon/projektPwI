<?php
session_start();

//if((isset($_SESSION['udanarejestracja'])) 
//{
//    header('Location: zalogujsie.php');
//    exit();
//}
//   else
//   {
//       unset($_SESSION['udanarejestracja']);
//   }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Kristoff Hotel</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
</head>

<body>
    <header>
        <nav>
            <ul>
                
                <li><a  href="zalogujsie.php">Zaloguj sie</a></li>
                <li><a href="index.php">Hotel</a></li>
                <li><a href="restauracja.php">Restauracja</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li class="logo"><a href=" index.php"> Loko kristoff hotel</a></li>
                <li><a href="onas.php">O nas</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="opinie.php">Opinie</a></li>
                <li><a href="rejstracja.php">Zarejstruj sie</a></li>
                
             
            </ul>
        
        </nav>
        
    
    </header>
    
        Pomyslna rejestracja! Zaloguj sie!
    
        
        <form action="2zalogujsie.php" method="post"> 
        Email:<br/><input type="text" name="mail" /> <br/>
        Hasło:<br/><input type="password" name="haslo" /> <br/><br/>
            <input type="submit" value="Zaloguj się" />
    
    
    </form>
    
    <?php
    if(isset($_SESSION['blad']))
        echo $_SESSION['blad'];
    
?>
        
<!--
    <section class="logowanie">
        
        <b class="log"> Zaloguj sie</b>
        
        <div class="blok">
            <label for="E-mail"> Adres e-mail</label>
        </div>
        <input type="email" class="form-control" id="email">
        <div class="blok1">
            <label for="haslo">   Password    </label>
        </div>
        <input type="haslo" class="form-control" id="haslo">
        <button type="button" class="btn btn-primary">Zaloguj się</button>
        
        <b>Nie masz konta?</b>
        <button class="btn btn-link" href="rejestracja.html">Zarejstruj sie</button>

    
    </section>
    
-->
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
</body>
    
    
</html>
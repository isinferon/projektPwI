
<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Kristoff Hotel</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!--    <meta charset="utf-8">-->
<!--     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
</head>
 <style>
        .error
        {
            color:red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
    
    
<body>
    <header>
        <nav>
            <ul>
                
                <li><a  href="logout.php">Wyloguj sie</a></li>
                <li><a href="2index.php">Hotel</a></li>
                <li><a href="2restauracja.php">Restauracja</a></li>
                <li><a href="2galeria.php">Galeria</a></li>
                <li class="logo"><a href=" 2index.php"> Loko kristoff hotel</a></li>
                <li><a href="2onas.php">O nas</a></li>
                <li><a href="2kontakt.php">Kontakt</a></li>
                <li><a href="2opinie.php">Opinie</a></li>
                <li><a href="2mojekonto.php">Moje konto</a></li>
                
             
            </ul>
        
        </nav>
        
    
    </header>
    
        
<!--       <br/> <a href='changepassword.php'> Zmien Hasło </a> -->
    
        <a href="changepassword.php"><input type="submit" class="button" value="Zmien haslo"></a>
        <br/><a href="changeemail.php"><input type="submit" class="button" value="Zmien E-mail"></a>
        <br/><a href="usunkonto.php"><input type="submit" class="button" value="Usun konto"></a>

         
                    
    
    
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
</body>
    
    
</html>
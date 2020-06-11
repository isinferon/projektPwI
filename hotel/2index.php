<?php
session_start();

        require_once "connect.php";
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        $rezultat = $polaczenie->query("SELECT * FROM uzytkownik");
        $wiersz = $rezultat->fetch_assoc();

    if($wiersz['banned']==1)
    {
        header('Location: index.php');
        exit();
    }
    

    

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
    <section class="wyroznienia">
        <figure>
            <img src="zdjecia/pokoj1.jpg" alt="Czyste i zadbane pokoje">
            <figcaption>Czyste i zadbane pokoje</figcaption>
        </figure> 
        <figure>
            <img src="zdjecia/obsluga.jpg" alt="Obsluga na najwyzszym poziomie">
            <figcaption>Obsluga na najwyzszym poziomie</figcaption>
        </figure>
        
        
    
    </section>
    
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
</body>
    
    
</html>
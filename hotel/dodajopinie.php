<?php
    session_start();
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
  
    
 <form action="2opinie.php" method="post">
            <input type="text" name="autor" placeholder="Twój nick"/> <br/>
            <textarea name="tresc" placeholder="Treść kometarza" style="height: 300px; width: 400px"></textarea><br/>
            <input type="submit" value="Wyślij"/>
    </form>
    
    
    
    
    
    
    
    
     <?php
            if(isset($_SESSION['blad'])){
                echo '<div style="color: red;">'.$_SESSION['blad'].'</div>';
                unset($_SESSION['blad']);
            }
            else if(isset($_SESSION['wyslano'])){
                echo '<div style="color: green;">'.$_SESSION['wyslano'].'</div>';
                unset($_SESSION['wyslano']);
            }
        ?>
        <hr/>
        <?php
            
            try{
                require_once("connect.php");
                
                $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                
                if($polaczenie->connect_errno != 0){
                    throw new Exception(mysqli_connect_error());
                }
                else{
                    
                    mysqli_query($polaczenie, "SET CHARSET utf8");
                    mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
                    
                    $sprawdz = $polaczenie->query("SELECT * FROM komentarze");
                    
                    if($sprawdz->num_rows > 0){
                        $num = $sprawdz->num_rows+1;
                        
                        for($i = 1; $i < $num; $i += 1){
                            if($komentarz = $sprawdz = $polaczenie->query("SELECT * FROM komentarze WHERE id='$i'")){
                                $wiersz = $komentarz->fetch_assoc();
                                
                                if($wiersz['banned']==1){
                                    continue;
                                }
                                
                                echo '
                                <div class="komentarz">'.
                                    $wiersz['autor'].' / '.
                                    $wiersz['data'].'
                                    <br/>'.$wiersz['tresc'].'
                                    <a href="usun.php?id='.$i.'">Usuń komentarz</a>
                                    </div>
                                    <br/>
                                ';
                                
                            }
                        }
                    }
                    
                    $polaczenie->close();
                }
            }
            catch(Excample $error){
                echo "ERROR!";
            }
            
        ?>
    
    
    
    
    
    
    
    
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
</body>
<!--
        <form action="2opinie.php" method="post">
            
         Imie:<br/><input type="text" name="imiee"/> <br/>
        Opinia:<br/><input type="text" name="opiniaa" style="height: 300px; width: 400px"  /> <br/>
        <br/> <input type="submit" value="Wyslij" /> <br/>
            
            
        </form>
-->
    
    
    
</html>
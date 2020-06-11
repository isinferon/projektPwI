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
    
    <div class="oped">
        <a class= "btn btn-primary " href="dodajopinie.php" >Dodaj opinie</a>       
        <a class="btn btn-link" href="edycja.php">Edytuj</a>
    </div>
    
    
    
    <section>
       

            <?php
    
    if(!isset($_POST['autor'])){
        header('Location: dodajopinie.php');
        exit();
    }

    $nick = $_POST['autor'];
    $tresc = $_POST['tresc'];

    if(strlen($nick) == 0 || strlen($tresc) == 0){
        $_SESSION['blad'] = "Żadne pole nie może być puste!";
        header('Location: dodajopinie.php');
    }
    else{
        
        require_once("connect.php");
        
        try{
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            
            if($polaczenie->connect_errno != 0){
                throw new Exception(mysqli_connect_error());
            }
            else{
                
                mysqli_query($polaczenie, "SET CHARSET utf8");
                mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
                
                $data = date("d-m-Y | h:i:s");
                
                if($polaczenie->query("INSERT INTO komentarze VALUE(NULL, '$tresc', '$nick', '$data', 0)")){
                    $_SESSION['wyslano'] = true;
                    header('Location: 2opinie.php');
                }
                else{
                    $_SESSION['blad'] = "Błąd podczas wysyłania kometarza!";
                    header('Location: dodajopinie.php');
                }
                
                $polaczenie->close();
            }
            
        }
        catch(Exception $error){
            echo "Connection Error!";
        }
    }
?>

    </section>
    
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
</body>
    
    
</html>
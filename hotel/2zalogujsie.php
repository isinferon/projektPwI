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


</body>
    
    





<?php
//
//    require_once "connect.php";
// 
//    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
//
//    if($polaczenie->connect_errno!=0)
//    {
//        echo "Error: ".$polaczenie ->connect_errno;
//    }
//
//    else
//    {
//    $mail = $_POST['email'];
//    $haslo = $_POST['haslo'];
//        
//    $sql = "SELECT*FROM uzytkownik WHERE mail='$mail' AND haslo='$haslo'";
//        
//    if ($rezultat = $polaczenie->query($sql))
//    {
//        $ilu_userow = $rezultat->num_rows;
//        if($ilu_userow>0)
//        {
//            $_SESSION['zalogowany'] = true;
//            $wiersz = $rezultat->fetch_assoc();
//            $_SESSION['id'] = $wiersz['iduzytkownika'];
//            $mail = $wiersz['mail'];
//            
//            unset($_SESSION['blad']);
//             
//            $rezultat->free_result();
//            
//            echo "Zalogowales sie pomyslnie!";
//            
//            
//        
//            
//        }else{
//            $_SESSION['blad'] = '<span style="color:red">Nieprawidlowy login lub haslo!</span>';
//            header('Location: zalogujsie.php');
//              
//        }
//    }
//        
//    $polaczenie->close();   
//        
//    }
//
//
//
//
//    
//
    
    
    
    
    
    
     

 
    require_once "connect.php";
 
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
     
    if ($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $login = $_POST['mail'];
        $haslo = $_POST['haslo'];
         
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
     
        if ($rezultat = $polaczenie->query(
        sprintf("SELECT * FROM uzytkownik WHERE email='%s' AND haslo='%s'",
        mysqli_real_escape_string($polaczenie,$login),
        mysqli_real_escape_string($polaczenie,$haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            
            
            
            if($ilu_userow>0)
                {
                
                $_SESSION['zalogowany'] = true;
                 
                $wiersz = $rezultat->fetch_assoc();

                $_SESSION['email'] = $wiersz['email'];
                 
                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: 2index.php');
                 
            } else {
                 
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: zalogujsie.php');
                 
            }
             
        }
         
        $polaczenie->close();
    }
     

?> 
    
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
    </html>
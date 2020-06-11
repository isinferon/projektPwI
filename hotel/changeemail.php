


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
    
        
    <?php 
 
session_start();


$user = $_SESSION['email'];

if($user){

    if(isset($_POST['submit']))
       {
        
        $oldmail =  $_POST['oldmail'];
        $newmail =  $_POST['newmail'];
        $repeatnewmail =  $_POST['repeatnewmail'];
        
        require_once "connect.php";
        
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        
//       $connect = mysql_connect("localhost", "root", "");
//        mysql_select_db("crisshotel");
       
//       $queryget = msql_query("SELECT haslo FROM uzytkownik WHERE email ='$user");
        
        $rezultat = $polaczenie->query("SELECT * FROM uzytkownik WHERE email='$user'");
        
//        $row = mysql_fetch_assoc($queryget);
        
        
        
        $wiersz = $rezultat->fetch_assoc();
        
        $oldmaildb = $wiersz['email'];
        
        if($oldmail == $oldmaildb)
        {
            if($newmail==$repeatnewmail){
                
                
                $rezultat = $polaczenie->query("UPDATE uzytkownik SET email='$newmail' WHERE email='$user'");
                
                echo("E-mail pomyslnie zmienione");
                
                
            }
            else
                die("nowy maile nie sa identyczne");
            
            
        }else 
            die ("stary mail jest bledny");
            
             
    
        
        
        
        
        
       }
        else
    {
        
    
    echo"
    
    <form action='changeemail.php' method='POST'>
     Old E-mail:<br/> <input type='text' name=' oldmail'><br/>
    New E-mail:<br/><input type='text' name='newmail'><br>
    Repeat new E-mail:<br/> <input type='text' name='repeatnewmail'><br/><p>
    <input type='submit' name='submit' value='zmien mail'>
    
     
    </form>
    ";
    }
    
}
else{
    
    
}



 

 

 
?>



    
    
    <footer>876 Swietokszyska, Tel: 000 000 000 </footer>
</body>
    
    
</html>



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
        
        $password =  $_POST['password'];
        $repeatpassword =  $_POST['repeatpassword'];
        
        require_once "connect.php";
        
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        
//       $connect = mysql_connect("localhost", "root", "");
//        mysql_select_db("crisshotel");
       
//       $queryget = msql_query("SELECT haslo FROM uzytkownik WHERE email ='$user");
        
        $rezultat = $polaczenie->query("SELECT * FROM uzytkownik WHERE email='$user'");
        
//        $row = mysql_fetch_assoc($queryget);
        
        
        
        $wiersz = $rezultat->fetch_assoc();
        
        $passworddb = $wiersz['haslo'];
        
        if($password == $passworddb)
        {
            if($password==$repeatpassword){
                
                
   //             $rezultat = $polaczenie->query("UPDATE uzytkownik SET banned=1 WHERE email='$user'");
                $rezultat = $polaczenie->query("DELETE FROM uzytkownik WHERE email='$user'");
                
                echo("Konto usunieto pomyslnie");
                header('Location: zalogujsie.php');
                
                
            }
            else
                die("nowe haslo nie sa identyczne");
            
            
        }else 
            die ("stare haslo jest bledne");
            
             
    
        
        
        
        
        
       }
        else
    {
        
    
    echo"
    
    <form action='usunkonto.php' method='POST'>
     Password:<br/> <input type='password' name='password'><br/>
    Repeat password:<br/><input type='password' name='repeatpassword'><br>
    <input type='submit' name='submit' value='Usun konto'>
    
     
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
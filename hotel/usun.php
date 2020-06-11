<?php
    if(isset($_GET['id'])){
        
        try{
                require_once("connect.php");
                
                $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                
                if($polaczenie->connect_errno != 0){
                    throw new Exception(mysqli_connect_error());
                }
                else{
                    
                    $id = $_GET['id'];
                    
                    if($polaczenie->query("UPDATE komentarze SET banned=1 WHERE id='$id'"))
                    
                    $polaczenie->close();
                }
            }
            catch(Excample $error){
                echo "ERROR!";
            }
        
    }
    else{
        header('Location: dodajopinie.php');
    }

    header('Location: dodajopinie.php');
?>
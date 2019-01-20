<?php
$pnom = $_POST['pnom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
 try {
    $mbd = new PDO('mysql:host=localhost;dbname=cv_mamadou', "root", "");
   
     $req = " INSERT INTO commentaires VALUES 
      ('','$pnom','$nom','$email','$phone','$message')"; 
     $mbd->exec($req) or  print_r($mbd->errorInfo()); 
     } catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
   
}        
      header('location:../chunks/confirmation.php');
       echo '<div class="alert alert-success" role="alert">
            Votre message a bien été envoyé.</div>';    
    
?>
<?php
try { $mbd = new PDO('mysql:host=localhost;dbname=cv_mamadou', "root", "");
    } 
catch (PDOException $e) {print "¡Error!: " . $e->getMessage() . "<br/>"; die();}
?>
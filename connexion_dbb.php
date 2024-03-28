<?php
// Connexion à la base de donnée
$con = mysqli_connect("localhost","root","","chat_db");
// gérer les accents et autres caractères français
$req = mysqli_query($con, "SET NAMES UTF8");
if(!$con){
    // si la connxion échoue , affiche
    echo "Connexion échouée";
}

?>
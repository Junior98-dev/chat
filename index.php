<?php 
    //démarrer la session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        if(isset($_POST['button_con'])){
            // si le formaulaire est envoyé
            // se connecter à la base de donnée
            include "connexion_dbb.php";
            //extraire les infos du formulaire
            extract($_POST);
            //verifions si les champs sont vides
            if(isset($email) && isset($mdp1) && $email != "" && $mdp1 !=""){
                //verifions si les identifiants sont justes
                $req = mysqli_query($con, "SELECT * FROM utilisateurs WHERE email= '$email' AND mdp = '$mdp1'");
                if(mysqli_num_rows($req) > 0){
                    //si les ids sont justes
                    //creation d'une session qui contient l'email
                    $_SESSION['user'] = $email;
                    //redirection vers la page de chat
                    header("location:chat.php");
                }else{
                    //si non
                    $error = "Email ou Mots de passe incorrecte(s) !";
                }
            }else{
                //si les champs sont vides
               $error =  "Veuillez remplir tous les champs !";
            }
        }
    
    ?>

    <form method="POST" action="" class="form_connexion_inscription">
        <h1>CONNEXION</h1>
        <p class="message_error">
            <!-- affichons l'erreur -->
            <?php 
                if(isset($error)){
                    echo $error;
                }
            ?>
        </p>

        <label for="">Adresse Mail :</label>
        <input type="email" name="email">
        <label for="">Mot de passe :</label>
        <input type="password" name="mdp1">
        <input type="submit" value="Connexion" name="button_con">
        <p class="link">Vous n'avez pas de compte ? <a href="inscription.php">Créer un compte</a></p>
    </form>

</body>
</html>
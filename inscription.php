<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" class="form_connexion_inscription">
        <h1>INSCRIPTION</h1>
        <p class="message_error"></p>

        <label for="">Adresse Mail :</label>
        <input type="email" name="email">
        <label for="">Mot de passe :</label>
        <input type="password" name="mdp1" class="mdp1">
        <label for="">Confirmation du mot de passe :</label>
        <input type="password" name="mdp2" class="mdp2">
        <input type="submit" value="Inscription">
        <p class="link">Vous avez un compte ? <a href="index.php">Se connecter</a></p>
    </form>

    <!-- Relié notre page à notre fichier javaScript -->
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior@gmail | CHAT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="chat"> 
        <div class="button-email">
            <span>Junior@gmail.com</span>
            <a href="" class="deconnexion_btn">Déconnexion</a>
        </div>

        <!-- message -->

        <div class="message_box">
            <div class="message your_message">
                <span>Vous</span>
                <p>Comment ça vas ??</p>
                <p class="date">24-03-20 00:25</p>
            </div>
            <div class="message others_message">
                <span>junior@gmail.com</span>
                <p>Oui ça va merci</p>
                <p class="date">24-03-20 00:25</p>
            </div>  
        </div>
        <!-- Fin nmessage -->

        <form action="" class="send_message" method="post">
            <textarea name="message" id="" cols="30" rows="2" placeholder="Votre message"></textarea>
            <input type="submit" value="Envoyer" name="send">
        </form>
    </div>
</body>
</html>
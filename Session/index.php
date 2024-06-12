<?php
    session_start();
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exercices sessions</title>
    </head>
    <body>
        <form action="nickname.php" method="post">
            <fieldset>
                <label for="nickname">
                    Pseudo
                </label>
                <input type="text" name="nickname" id="nickname" />
            </fieldset>
            <fieldset>
                <button type="submit">Envoyer</button>
            </fieldset>
        </form>
        <a href="logout.php">Déconnexion</a>
    </body>
</html>


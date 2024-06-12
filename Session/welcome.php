<?php

session_start();

?>

<?php

if(isset($_SESSION['nickname'])){
    echo "<h1>Bienvenue {$_SESSION["nickname"]}</h1>";
}
else {
    echo "<h1>Bienvenue invité-e</h1>";
}

?>


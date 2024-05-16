<?php
function isOdd(int $nb) : bool{
    if ($nb % 2 === 0){
        return true;
    }
    else {
        return false;
    }
}

echo isOdd(12) ? 'true' : 'false';
echo "<br>";
echo isOdd(29) ? 'true' : 'false';
?>
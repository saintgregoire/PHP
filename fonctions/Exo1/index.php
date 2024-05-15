<?php
function concat(string $a, string $b) : string {
    
    return $a . " " . $b;
}

echo concat("Hello ", "World !<br>");
echo concat("À la ", "claire fontaine<br>");
echo concat("La vie, l'univers ", "et tout le reste<br>");
?>
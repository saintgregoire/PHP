<?php

function add(int $nb1, int $nb2) : int
{
 return $nb1 +  $nb2;
}

function substract(int $nb1, int $nb2) : int
{
return $nb1 -  $nb2;
}

function multiply(int $nb1, int $nb2) : int
{
return $nb1 * $nb2;
}

function divide(int $nb1, int $nb2) : ?int
{
  if ($nb2 != 0) {
                    return  $nb1 / $nb2;
                } else {
                    return  null;
                }
}

function modulo(int $nb1, int $nb2) : ?int
{
if ($nb2 != 0) {
                    return  $nb1 % $nb2;
                } else {
                    return  null;
                }
}

$result = "";

 if(
   isset($_POST["numberFirst"]) && !empty($_POST["numberFirst"]) &&
   isset($_POST["numberSecond"]) && !empty($_POST["numberSecond"]) &&
   isset($_POST["operations"])
 ){
     $num1 = $_POST["numberFirst"];
     $num2 = $_POST["numberSecond"];
     $operation = $_POST["operations"];
     
     switch ($operation) {
         case '*':
             $result = multiply($num1, $num2);
             break;
        case '/':
            $result = divide($num1, $num2);
            break;
         case '+':
            $result = add($num1, $num2);
             break;
        case '-':
            $result = substract($num1, $num2);
             break;
        case '%':
            $result = modulo($num1, $num2);
             break;
        default:
            $result = 'Opération invalide';
     }
 }
 

    echo "<h2>Résultat : $result</h2>";

 
?>
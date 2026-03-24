<?php
function calcular($operacio, $a, $b) {
    switch ($operacio) {
        case "s":
            return $a + $b;
        case "r":
            return $a - $b;
        case "m":
            return $a * $b;
        case "d":
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Error: divisió per zero";
            }
        default:
            return "Error: operació desconeguda";
    }
}

$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];
$operacio = $_POST['op'];

$resultat = calcular($operacio, $primerNumero, $segonNumero);
echo $resultat;
?>
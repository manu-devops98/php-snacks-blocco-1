<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
 $numberRand = [];
 while (count($numberRand) < 15) {
    $num = rand(1,50);
    if (!in_array($num, $numberRand)) {
       $numberRand[] = $num; 
    }
 }
 var_dump($numberRand);
?>
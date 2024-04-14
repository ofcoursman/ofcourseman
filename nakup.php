<?php

$nakup = [
    'kos'=> 20,
    'sako' => 50,
    'ponozky' => 10,
    'trenky' => 20,
    'tenisky' => 35,
];

$max_value = max($nakup);
echo "Najdrahsie je:" . $max_value;
echo "<br>";
$sum = array_sum($nakup);
echo "suma je:" . $sum;

?>
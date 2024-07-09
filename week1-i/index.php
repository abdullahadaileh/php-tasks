<?php
// task1

echo "<h3>-------------------------------------------------------------Task 1----------------------------------------------------------------</h3>";
$cities = [ "AL-KARAK","Amman", "Zarqa", "Irbid", "Russeifa", "Aqaba", "Mafraq", "Madaba", "Salt", "Tafila"];

$removedCity = "Amman";

$searche = array_search($removedCity,$cities); 
if ($searche !== false ) {
    unset($cities[$searche]);
};

$cities = array_values($cities);

for ($i=0; $i <count($cities) ; $i++) { 
    echo "<h3>$cities[$i]</h3>";
};

if (in_array("Amman",$cities)) {
   echo "<h3>We found it</h3>";
}

print_r(array_slice($cities,2));

// task2
echo "<h3>-------------------------------------------------------------Task 2----------------------------------------------------------------</h3>";

$store = [
    "phone"=>10,
    "tablet"=>23,
    "iBad"=>42,
    "tv"=>21
];

foreach ($store as $products => $prices) {
    echo "<h3>$products</h3>";
}
foreach ($store as $products => $prices) {
    echo "<h3>$prices</h3>";
}


$result = 0;
foreach ($store as $products => $prices) {
    $result += $prices;
}

$countTotal = count($store); 
echo "<h3>Total :{$result}</h3>";


$average = $result / $countTotal;
echo "<h3>Average : {$average}</h3>";



















echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
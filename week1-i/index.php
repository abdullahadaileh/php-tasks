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


// $result = 0;
// foreach ($store as $products => $prices) {
//     $result += $prices;
// }

// $countTotal = count($store); 
// echo "<h3>Total :{$result}</h3>";


// $average = $result / $countTotal;
// echo "<h3>Average : {$average}</h3>";


$result = 0;
foreach ($store as $products => $prices) {
    $result += $prices;
}

$theTotal = count($store);
echo "<h3>TOTAL: {$result}</h3>";

echo "<h3>-------------------------------------------------------------Task 3----------------------------------------------------------------</h3>";

$books = [
    [
        "title" => "The Night Circus",
        "author" => "Erin Morgenstern",
        "year" => 2011
    ],
    [
        "title" => "Moby-Dick",
        "author" => "Herman Melville",
        "year" => 1851
    ],
    [
        "title" => "Where the Crawdads Sing",
        "author" => "Delia Owens",
        "year" => 2018
    ]
];

$books[] = [
    "title" => "The Goldfinch",
    "author" => "Donna Tartt",
    "year" => 2013
];

$books[0]["author"] = "Eren Yeager";

// usort($books, function($a, $b) {
//     return strcmp($a['title'], $b['title']);
// });

foreach ($books as $book) {
    if ($book["year"] >= 2010) { 
        echo "Title: " . $book['title'] . "<br>";
        echo "Author: " . $book['author'] . "<br>";
        echo "Year: " . $book['year'] . "<br><br>";
    }else {
        echo "<br><br><br>";
        echo "this the deleted book";
        echo "Title: " . $book['title'] . "<br>";
        echo "Author:" . $book['author'] . "<br>";
        echo "Year: " . $book['year'] . "<br><br><br>";
        }
    }



    echo "<h3>-------------------------------------------------------------Task 4----------------------------------------------------------------</h3>";


// 1
    $array = ["apple", "banana", "cherry"];
    $uppercaseArray = array_map('strtoupper', $array);
    print_r($uppercaseArray);

    echo "<br><br><br>";

// 2
$numbers = [1, 2, 3, 4, 5];
$filteredNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0; 
});
print_r($filteredNumbers);

echo "<br><br><br>";

// 3

echo "<br><br><br>";

// 4

echo "<br><br><br>";

// 5

echo "<br><br><br>";

// 6

echo "<br><br><br>";

// 7

echo "<br><br><br>";

// 8

echo "<br><br><br>";

// 9

echo "<br><br><br>";

// 10





echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// task1

echo "<h3>-------------------------------------------------------------Task 1----------------------------------------------------------------</h3>";
$cities = [ "AL-KARAK","Amman", "Zarqa", "Irbid", "Russeifa", "Aqaba", "Mafraq", "Madaba", "Salt", "Tafila"]; //creat

$removedCity = "Amman";  //remove

$searche = array_search($removedCity,$cities); // search
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

print_r(array_slice($cities,2));  // slice

// task2
echo "<h3>-------------------------------------------------------------Task 2----------------------------------------------------------------</h3>";

$store = [  // creat
    "phone"=>10,
    "tablet"=>23,
    "iBad"=>42,
    "tv"=>21
];

foreach ($store as $products => $prices) {  // print products
    echo "<h3>$products</h3>";
}
foreach ($store as $products => $prices) { // print prices
    echo "<h3>$prices</h3>";
}


// $result = 0;
// foreach ($store as $products => $prices) {
//     $result += $prices;
// }





$result = 0;
foreach ($store as $products => $prices) {  //calculate 
    $result += $prices;
}

echo "<h3>TOTAL: {$result}</h3>";

$countTotal = count($store); //avarage
$average = $result / $countTotal;
echo "<h3>Average : {$average}</h3>";

$maxPrice = max($store);  //find the most expensive products
$mostExpensiveProduct = array_search($maxPrice, $store);
echo "$mostExpensiveProduct --- $maxPrice.";


echo "<h3>-------------------------------------------------------------Task 3----------------------------------------------------------------</h3>";

$books = [          //creat
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
    "title" => "The Goldfinch",    // add
    "author" => "Donna Tartt",
    "year" => 2013
];

$books[0]["author"] = "Eren Yeager";   //update

usort($books, function($a, $b) {
    return strcmp($a['title'], $b['title']);
});

foreach ($books as $book) {
    if ($book["year"] >= 2010) { 
        echo "Title: " . $book['title'] . "<br>";
        echo "Author: " . $book['author'] . "<br>";
        echo "Year: " . $book['year'] . "<br><br>";
    }
    }



    echo "<h3>-------------------------------------------------------------Task 4----------------------------------------------------------------</h3>";


// 1
echo "task1<br><br>";

    $array = ["apple", "banana", "cherry"];
    $uppercaseArray = array_map('strtoupper', $array); 
    print_r($uppercaseArray);

    echo "<br><br><br>";

// 2
echo "task2<br><br>";
// فلتر للاعداد الزوجية
$numbers = [1, 2, 3, 4, 5];
$filteredNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0; 
});
print_r($filteredNumbers);

echo "<br><br><br>";
// 3
echo "task3<br><br>";



echo "<br><br><br>";

// 4
echo "task4<br><br>";
// بضيف الfunk الي بدي ياه على كل عناصر ال array
$fruits = ['apple', 'banana', 'cherry'];
array_walk($fruits, function(&$item, $key) {
    $item = strtoupper($item);
});

print_r($fruits);


echo "<br><br><br>";

// 5
echo "task5<br><br>";
// الاختلافات
$array5a = ['abdullah', 'ahmad', 'mohammad', 'rashed'];
$array5b = ['ala', 'abdullah', 'abood', 'ahmad'];

$diff = array_diff($array5a, $array5b);
$diff = array_diff($array5b, $array5a);

print_r($diff);

echo "<br><br><br>";


// 6
// المتشابهات
echo "task6<br><br>";
$array6a = ['abdullah', 'ahmad', 'mohammad', 'rashed'];
$array6b = ['ala', 'abdullah', 'abood', 'ahmad'];
$intere = array_intersect($array5a, $array5b);
print_r($intere);



echo "<br><br><br>";

// 7
echo "task7<br><br>";
// بعمل النا من ال index array => associative array
$key = ["book1","booke2","booke3"];
$value = ["The Night Circus","Moby-Dick","Where the Crawdads Sing"];
$comp = array_combine($key,$value);
echo "<pre>";
    print_r($comp);
echo "</pre>";


echo "<br><br><br>";

// 8
echo "task8<br><br>";

$students =
[
    ["Name" => "Abdullah", "Age" => 19, "grade" => 99],  // بطبعلك العنصر الي بدك ياه بال بال array  لكن اذا كان في اشي متشابه ما بطبعه
    ["Name" => "Ahmad", "Age" => 18, "grade" => 98],
    ["Name" => "Ala", "Age" => 20, "grade" => 97],

];

$coloms = array_column($students, 'Name','Age',);

// Print the result
print_r($coloms);


echo "<br><br><br>";

// 9
echo "task9<br><br>";

$array = array('a', 'b', 'c', 'd', 'e');

// Extract elements starting from index 1, up to 3 (exclusive)
$portion = array_slice($array, 1, 3);

print_r($portion);

echo "<br><br><br>";

// 10
echo "task10<br><br>";

$cities = [ "AL-KARAK","Amman", "Zarqa", "Irbid", "Russeifa", "Aqaba", "Mafraq", "Madaba", "Salt", "Tafila"]; //creat


if (in_array("Amman",$cities)) {
    echo "<h3>We found it</h3>";
 }
 



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

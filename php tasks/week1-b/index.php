<?php

// START task1
echo "<h1>----------------------------Task1----------------------------</h1>";

$fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];  // creat

array_push($fruits,"some"); // add

array_pop($fruits); // remove


for ($i=0; $i <count($fruits) ; $i++) { // print
    echo "<h3>{$fruits[$i]}</h3>";
}

if (in_array("Apple",$fruits))   // search 
{
    echo "<h4>We foun it</h4>";
}


// done


echo "<h1>----------------------------Task2----------------------------</h1>";

// START task2
$users =
[
    "Abdullah" => 18,        // creat
    "Ahmad" => 18,
    "Abdullrahman" => 22,
    "Mohammad" => 20,
    "Saleh" => 25
];

// var_dump($users);

$users ["Ala"]=23;      // add

unset($users["Ala"]);   // remove

if (array_key_exists("Ala",$users)) {  // search
    echo "we found him";
}else{
    echo "we didnt foun him";
}

foreach($users as $name => $age){  //print
    echo "<h3>$name,$age</h3>";
}




echo "<h1>----------------------------Task3----------------------------</h1>";

// START task3

$students =
[
    ["Name" => "Abdullah", "Age" => 18, "grade" => 90],  // creat
    ["Name" => "Ahmad", "Age" => 18, "grade" => 90],
    ["Name" => "Ala", "Age" => 20, "grade" => 90],

];
foreach ($students as $student) {   //print
    echo "<h3>Name: {$student['Name']}, Age: {$student['Age']}, Grade: {$student['grade']}</h3>";
}
echo "<br><br>";

$new_student = ["Name" => "Hamed", "Age" => 17, "grade" => 80]; // add
$students[] = $new_student;


unset($students[2]);   // remove 

foreach ($students as $student) {
    echo "<h3>Name: {$student['Name']}, Age: {$student['Age']}, Grade: {$student['grade']}</h3>";
}

echo "<br><br>";
$student_name = "Abdullah"; //uppdate
$new_grade = 99;
foreach($students as &$student){
    if ($student["Name"]==$student_name) {  
        $student["grade"]=$new_grade;
    }
}





echo "<h1>----------------------------Task4----------------------------</h1>";
//task1
echo "task1<br><br>";
$array1 = [1, 2, 3];
array_push($array1, 4, 5);  // add
print_r($array1);

echo "<br><br><br><br>";


//task2
echo "task2<br><br>";   //delet
$array2 = [1, 2, 3, 4, 5];
array_pop($array2);
print_r($array2);

echo "<br><br><br><br>";


//task3
echo "task3<br><br>";  // print keys
$array3 = ['a' => 1, 'b' => 2, 'c' => 3];  
$keys3 = array_keys($array3);
print_r($keys3);

echo "<br><br><br><br>";


//task4
echo "task4<br><br>";  //print values
$array4 = ['a' => 1, 'b' => 2, 'c' => 3];
$values4 = array_values($array4);
print_r($values4);
echo "<br><br><br><br>";


//task5
echo "task5<br><br>";  // يعد العناصر في ال array
$array5 = [1, 2, 3, 4, 5];
echo count($array5);

echo "<br><br><br><br>";


// task6
echo "task6<br><br>";
$array6a = [1, 2, 3]; // تدمج الarrays في array وحدة
$array6b = [4, 5, 6];
$mergedArray = array_merge($array6b,$array6a);
echo "<pre>";
print_r($mergedArray);
echo "</pre>";


echo "<br><br><br><br>";


// task7
echo "task7<br><br>";
$array7 = [1, 2, 3, 4, 5];  // تبحث عن عنصر معين في ال array
$key7 = array_search(3, $array7);
echo $key7;

echo "<br><br><br><br>";


// task8
echo "task8<br><br>";
$array8 = [5, 3, 1, 4, 2]; // ترتيب تصاعدي وبتغير على الا index تاعها
sort($array8);
print_r($array8);

echo "<br><br><br><br>";


// task 9
echo "task9<br><br>";
$array9 = ['c' => 3, 'a' => 1, 'b' => 2];  //ترتيب العناصر بناءا على ال keys
ksort($array9);
echo '<pre>';
print_r($array9);
echo '</pre>';

echo "<br><br><br><br>";



echo "task10<br><br>"; 
$array10 = ['c' => 1, 'a' => 2, 'b' => 3]; // ترتيب بناءا على ال value وما بتغير ال key تاعتها 
asort($array10);
print_r($array10);

echo "<br><br><br><br>";

?>

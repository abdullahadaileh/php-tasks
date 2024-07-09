<?php
// START task1

// $fruits = array('Apple', 'Banana', 'Cherry', 'Date', 'Elderberry');
// $fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];

// array_push($fruits,"some");

// array_pop($fruits);


// for ($i=0; $i <count($fruits) ; $i++) { 
//     echo "<h3>{$fruits[$i]}</h3>";
// }

// if (in_array("Apple",$fruits))
// {
//     echo "<h4>We foun it</h4>";
// }

// END task1





// START task2

// $users =
// [
//     "Abdullah" => 18,
//     "Ahmad" => 18,
//     "Abdullrahman" => 22,
//     "Mohammad" => 20,
//     "Saleh" => 25
// ];


// $users ["Ala"]=23;

// unset($users["Ala"]);

// if (array_key_exists("Ala",$users)) {
//     echo "we found him";
// }else{
//     echo "we didnt foun him";
// }

// foreach($users as $name => $age){
//     echo "<h3>$name,$age</h3>";
// }

// END task2




// START task3

$students =
[
    ["Name" => "Abdullah", "Age" => 18, "grade" => 90],
    ["Name" => "Ahmad", "Age" => 18, "grade" => 90],
    ["Name" => "Ala", "Age" => 20, "grade" => 90],

];


$new_student =["Name"=>"Hamed","Age"=>17,"grade"=>80];
$students[] = $new_student;

$student_name = "Abdullah";
$new_grade = 99;

foreach($students as &$student){
    if ($student["Name"]==$student_name) {
        $student["grade"]=$new_grade;
    }
}


foreach ($students as $student){
    echo "<h3>Name:{$student['Name']},Age:{$student['Age']},grade:{$student['grade']}</h3>";
    //echo "<h3>Name:{$student['Name']}</h3><h3>Age:{$student['Age']}</h3><h3>grade:{$student['grade']}</h3>";

}


// END task3






?>

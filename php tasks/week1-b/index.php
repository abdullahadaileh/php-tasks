<?php
// START task1

// $fruits = array('Apple', 'Banana', 'Cherry', 'Date', 'Elderberry');


// for ($i=0; $i <count($fruits) ; $i++) { 
//     echo "<h3>{$fruits[$i]}</h3>";
// }



// array_push($fruits,"Papaya");
// print_r($fruits);



// array_splice($fruits,5);
// print_r($fruits);



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

// $users ["Ala"]=27; // task2-c

// unset($users["Abdullrahman"]); // task2-d


// foreach($users as $name => $age){
//     echo "<h3>$name,$age</h3>";
// }


// if (array_key_exists("Abdllah",$users)) {
//     echo "<h3>we found him</h3>";
// }else{
//     echo "<h3>we didnt found him</h3>";
// }


// END task2




// START task3

$students =
[
    ["Name" => "Abdullah", "Age" => 18, "grade" => 90],
    ["Name" => "Ahmad", "Age" => 18, "grade" => 90],
    ["Name" => "Ala", "Age" => 20, "grade" => 90],

];

$new_student = ["Name" => "Mohammad", "Age" => 21, "grade" => 89];
$students[] = $new_student;

$student_Name = "Abdullah";
$new_grade = 100;

foreach($students as &$student){
    if ($student["Name"] === $student_Name) {
        $student["grade"] = $new_grade;
    }
}

foreach ($students as $student){
    echo "<h3>Name:{$student['Name']},Age:{$student['Age']},grade:{$student['grade']}</h3>";
    //echo "<h3>Name:{$student['Name']}</h3><h3>Age:{$student['Age']}</h3><h3>grade:{$student['grade']}</h3>";

}







?>

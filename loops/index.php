<?php


echo "--------------------------------------------------------------loops task1-----------------------------------------------------------";
echo "<br><br><br><br>";

$output = '';

for ($i = 1; $i <= 10; $i++) {  // تعمل loop من 1-10 لكن مع فواصل بينهم بدون الاطراف
    $output .= $i;
    
    if ($i < 10) {
        $output .= '-';
    }
}

echo $output;


echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task2-----------------------------------------------------------";
echo "<br><br><br><br>";


$total = 0;

for ($i = 0; $i <= 30; $i++) { // بجمعلك الارقام كم 1-30 
    $total += $i;
}

echo "Total: $total";



echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task3-----------------------------------------------------------";
echo "<br><br><br><br>";


for ($row=1; $row <5 ; $row++) {  // nasted loop بتعمل النا 5 صفوف و 5 اعمدة 
    for ($column=1; $column <5 ; $column++) { 
        echo "*";
    }
    echo "<br>";
}


echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task4-----------------------------------------------------------";
echo "<br><br><br><br>";

$num = 5;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   // بحسبلنا المضروب الخاص بكل رقم
{  
  $factorial = $factorial * $x;  
} 
echo "Factorial of $num is $factorial";  

echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task5-----------------------------------------------------------";
echo "<br><br><br><br>";

$x = 0;
$y =1;
$terms = 15;
echo $x.",".$y;
for ($i=2; $i <$terms ; $i++) { // كل مرة بجمع كل الارقام الي قبله
    $z = $x + $y;
    echo ",".$z;
    $x = $y;
    $y = $z;
}


echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task6-----------------------------------------------------------";
echo "<br><br><br><br>";


$text = "Orange Coding Academy";

$char = "c";

$count = substr_count(strtolower($text), strtolower($char)); // عشان يحسبلنا الاحرف الكبيرة والصغيرة مع بعض

echo "we found the letter: $char <br> $count times ";


echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task7-----------------------------------------------------------";
echo "<br><br><br><br>";


echo "multiplication";
echo '<table cellpadding="3px" cellspacing="0px" border="1px">';  // جدول ضرب 

$result = 1;

for ($rowss = 1; $rowss <= 6; $rowss++) {
    echo '<tr>';
    for ($colums = 1; $colums <= 5; $colums++) {
        $result = $rowss * $colums;
        echo "<td>";
        echo "$rowss * $colums = $result";
        echo "</td>";
    }
    echo '</tr>';
}
echo '</table>';

echo "<br><br>";

echo "Division";

echo '<table cellpadding="3px" cellspacing="0px" border="1px">'; // جدول قسمة 

$result = 1;

for ($rowss = 1; $rowss <= 6; $rowss++) {
    echo '<tr>';
    for ($colums = 1; $colums <= 5; $colums++) {
        $result = $rowss / $colums;
        echo "<td>";
        echo "$rowss / $colums = $result";
        echo "</td>";
    }
    echo '</tr>';
}
echo '</table>';


echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task8-----------------------------------------------------------";
echo "<br><br><br><br>";


for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {  // اذا كانت العدد يقبل القسمة على 3و5 ينم طباعة BizzBuzz الخ....
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}


echo "<br><br><br><br>";
echo "--------------------------------------------------------------loops task9-----------------------------------------------------------";
echo "<br><br><br><br>";


$count = 1; 

for ($roww = 1; $roww <= 5; $roww++) {  // مثلث فلويد

    for ($colm = 1; $colm <= $roww; $colm++) {
        echo $count . " "; 
        $count++; 
    }
    echo "<br>"; 
}











echo "<br><br><br><br>";
?>
<?php

echo "--------------------------------------------------------------Function task1-----------------------------------------------------------";
echo "<br><br><br><br>";





echo "<br><br><br><br>";
echo "--------------------------------------------------------------Function task2-----------------------------------------------------------";
echo "<br><br><br><br>";



$input = "hello world";  // عكس ال string
$output = strrev($input);

echo $output;



echo "<br><br><br><br>";
echo "--------------------------------------------------------------Function task3-----------------------------------------------------------";
echo "<br><br><br><br>";

function isLowercase($str) {  // تتاكد اذا كل الحرف صغار
    return ctype_lower($str);
}

$input = "helloworld"; 

if (isLowercase($input)) {
    echo "كلهم lowercase";
} else {
    echo "مش كلهم lowercase";
}





echo "<br><br><br><br>";
echo "--------------------------------------------------------------Function task4-----------------------------------------------------------";
echo "<br><br><br><br>";


function swap(&$x, &$y) {  // بتبدل قيمة المتغيرات عن طريق ال swap // & نستخدمها عشان التعديلات الي اجريناها على ال var داخل ال funk يتعدلو خارجو ايضا

    $sweper = $x;
    $x = $y;
    $y = $sweper;
}

$x = 12;
$y = 10;

swap($x, $y);
echo "x = $x, y = $y";


echo "<br><br><br><br>";
echo "--------------------------------------------------------------Function task5-----------------------------------------------------------";
echo "<br><br><br><br>";


$x = 12;
$y = 10;

list($x, $y) = [$y, $x];  // تبدبل القيم لكن عن طريق list function
echo "x = $x, y = $y";


echo "<br><br><br><br>";
echo "--------------------------------------------------------------Function task7-----------------------------------------------------------";
echo "<br><br><br><br>";





function isPalindrome($str) {    // بتتاكد اذنو ال string بنقرأ من الجهتين نفس الاشي
    
    return $str == strrev($str);
}
$input = "karak";

if (isPalindrome($input)) {
    echo "  yes it is a Palindrome";
} else {
    echo " no it is not a Palindrome  ";
}



echo "<br><br><br><br>";
echo "--------------------------------------------------------------Function task8-----------------------------------------------------------";
echo "<br><br><br><br>";

$array1 = array(2, 4, 7, 4, 8, 4);  // ازالة المتكرر

$array1 = array_unique($array1);

echo "<pre>";
print_r($array1);
echo "</pre>";

















echo "<br><br><br><br>";

?>

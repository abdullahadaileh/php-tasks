<?php

echo "-----------------------------------------------------------------string task1-----------------------------------------------------------";

$inputString = "hello world!";

// task1
echo"task1";
echo "<br><br>";
$uppercaseString = strtoupper($inputString); // تحويل الى احرف كبيرة
echo $uppercaseString;
echo "<br><br><br><br>";

// task2
echo"task2";
echo "<br><br>";
$lowercaseString = strtolower($inputString); // تحويل الى احرف صغيرة
echo $lowercaseString;
echo "<br><br><br><br>";


// task3
echo"task3";
echo "<br><br>";
$ucfirstString = ucfirst($inputString);         // تحويل اول حرف الى حرف كبير 
echo $ucfirstString;
echo "<br><br><br><br>";

// task4
echo"task4";
echo "<br><br>";
$ucwordsString = ucwords($inputString);        // تحويل اول حرف من كل كلمة الى حرف كبير 
echo $ucwordsString;
echo "<br><br><br><br>";

echo "-----------------------------------------------------------------string task2-----------------------------------------------------------";
echo "<br><br><br><br>";

$numericString = '023520';

$hours = substr($numericString, 0, 2);  // الاول هو ال index والثاني هو عدد الخانات الي يمشي عليها 
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

$timeFormat = $hours . ':' . $minutes . ':' . $seconds;
echo $timeFormat;

echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task3-----------------------------------------------------------";
echo "<br><br><br><br>";

$sentence = "I am a full stack developer at Orange Coding Academy";  // تتاكد اذا الجملة فيها كلمة معية

$searchWord = "Orange";


if (strpos($sentence,$searchWord) !== false) {
    echo "We found it";
} else {
    echo "We didnt found it";
}
echo ": ". $searchWord;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task4-----------------------------------------------------------";
echo "<br><br><br><br>";


$url = 'http://www.orange.com/index.php';  // استخراج اسم الملف من الرابط

$filename = basename($url);

echo $filename;

echo "<br><br>";

echo basename('http://www.orange.com/index.php'); // طريقة مختصرة 

echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task5-----------------------------------------------------------";
echo "<br><br><br><br>";



$email = 'abdullahadaileh@gmail.com';

$username = strstr($email, '@', true);  // بطلعلك اسم اليوزر عن طريق انو يوخذ اي اشي قبل ال @

echo $username;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task6-----------------------------------------------------------";
echo "<br><br><br><br>";



$string = 'Hello world';

$lastThree = substr($string, -3);  // بطبعلك اخر 3 احرف من النص

echo $lastThree;



echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task7-----------------------------------------------------------";
echo "<br><br><br><br>";


$characters = '#$!1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';  // كلمة سر عشوائية 

$passwordLength = 8; 

$shuffle = str_shuffle($characters);
$password = substr($shuffle,0,$passwordLength);
echo "password: ". $password;



echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task8-----------------------------------------------------------";
echo "<br><br><br><br>";

$sentence = 'That new trainee is so genius.';  // استبدال الكلمة الولى بكلمة اخرى 

$newWord = 'Our';

$newSentence = preg_replace('/^\w+/', $newWord, $sentence);  // regular exprtion ببحث عن الكلمة الاولى
echo $newSentence;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task9-----------------------------------------------------------";
echo "<br><br><br><br>";

// ما فهمته

echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task10-----------------------------------------------------------";
echo "<br><br><br><br>";

// 😂

$string = "Twinkle, twinkle, little star.";  //  بحطلك اي اشي بين فواصل في index لحاله

$array = explode(', ', $string);

echo "<pre>";
var_dump($array);
echo "</pre>";

echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task11-----------------------------------------------------------";
echo "<br><br><br><br>";


function getNextLetter($Letter) {  // وظيفتها بتوخذ الك حرف ك مدخل على انك تتعامل معو وتعطيه ال funk الي بدك ياه 
    
    if ($Letter === 'a') {
        return 'b';
    } elseif ($Letter === 'z') {
        return 'a';
    } 
}
echo getNextLetter('a')." / ";
echo getNextLetter('z');


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task12-----------------------------------------------------------";
echo "<br><br><br><br>";


$firstString = 'The brown fox';
$secondString = 'quick ';
$position = strpos($firstString, 'brown');

$lastString = substr_replace($firstString, $secondString, $position, 0); // اضافة string قبل الموضع المحدد

echo $lastString;



echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task13-----------------------------------------------------------";
echo "<br><br><br><br>";


$orgString = "0000657022.24";

$newstring = str_replace(0,"",$orgString);
echo $newstring;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task14-----------------------------------------------------------";
echo "<br><br><br><br>";

$orgeString = "The quick brown fox jumps over the lazy dog";

$newwString = str_replace("fox","",$orgeString);
echo $newwString;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task15-----------------------------------------------------------";
echo "<br><br><br><br>";


$foxy = "The quick brown fox jumps over the lazy dog---";
$newFoxy = str_replace("-","",$foxy);
echo $newFoxy;




echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task16-----------------------------------------------------------";
echo "<br><br><br><br>";

$Special = "\"\1+2/3*2:2-3/4*3";
$withoutSpecial = preg_replace("/[^0-9\s]/","",$Special);  // regular exprtion بشيل النا الاحرف الخاصة 
echo $withoutSpecial;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task17-----------------------------------------------------------";
echo "<br><br><br><br>";

$fox5 = "The quick brown fox jumps over the lazy dog"; //  بوخذ اول 5 لكمات من ال string 
$newFox5 = explode(" ", $fox5);
$just5 = array_slice($newFox5,0,5);
$implo = implode(" ", $just5);
echo $implo;


echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task18-----------------------------------------------------------";
echo "<br><br><br><br>";


$srting18 = 'hell,o worl,d';
$result = str_replace(',', '', strtoupper($srting18));  // ازالة الفواصل من الكلمة 

echo $result;



echo "<br><br><br><br>";
echo "-----------------------------------------------------------------string task19-----------------------------------------------------------";
echo "<br><br><br><br>";

$start_a = 97;
$end_z = 122;

for ($i = $start_a; $i <= $end_z; $i++) {  //بطبعلنا الاحرف الابجدية هن طريق معرف كل حرف بال ASCII 
    echo chr($i) . ' ';
}


?>

<?php

echo  nl2br(" This is My First Line \n \r  This is my second line \n \r");

$text = "Insert a new line" . PHP_EOL . "before here";
echo $text;

//-------------------------String built in func ---------------------
echo "<br/>";

$str1="I Love PHP   ";
$chop_str=chop($str1);
echo"<span style=\"background-color:yellow;\">".$str1."</span>";
echo "<br/>";

// Explode function 
$str = "The birds are flying in the sky.";
echo "<br/>";

// Split string by space and print
print_r (explode(" ", $str));
echo "<br/>";

//shuffle 
echo str_shuffle("Hello World");
echo "<br/>";

//compare 
echo substr_compare("Hello world","Hello world",0);
echo "<br/>";

//encryption md5

$str = "Hello";
echo md5($str);
echo "<br/>";
$str = "Hello World";
echo nl2br(str_pad($str,20,"."));

//string formatting

// Sample strings
$count = 50;
$country = "United States";
$format = "There are %d states in the %s.";

// Formatting and print the string
printf($format, $count, $country);

//------------------Readable assosiative array format -----------------------

echo "<pre>";
var_export($_SERVER);
echo "</pre>";


foreach($_SERVER as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//------------------------- Reverse Sorted Array -----------------

echo "<br/>";
echo "<br/>";

$arr=[];
$arr[1]=45;
$arr[0]=12;
$arr[3]=25;
$arr[2]=2;

echo nl2br("<span style=\"color:red;'\">This is the original array </span>");
print_r($arr);
echo "</br>";

echo " Sum and Average of an array";
echo $average = array_sum($array) / count($array);

rsort($arr);

echo nl2br("<span style=\"color:red;'\">Array Sotred highest to lowest </span>");
print_r($arr);

//------------------------ Associative Array -------------------------

echo "<br/>";
echo "<br/>";

$student_age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

// a) ascending order sort by value
echo "<br/>";

asort($student_age);
echo nl2br("<span style=\"color:red;'\"> ascending order sort by value </span>");
print_r($student_age);

echo "<br/>";
// b) ascending order sort by Key

ksort($student_age);
echo nl2br("<span style=\"color:red;'\"> ascending order sort by key </span>");
print_r($student_age);

echo "<br/>";

// c) descending order sorting by Value

arsort($student_age);
echo nl2br("<span style=\"color:red;'\"> descending order sorting by Value</span>");
print_r($student_age);

echo "<br/>";

// d) descending order sorting by Key  

krsort($student_age);
echo nl2br("<span style=\"color:red;'\"> descending order sorting by Key </span>");
print_r($student_age);

echo "<br/>";






?>
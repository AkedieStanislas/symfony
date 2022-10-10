<?php
// Write your code below:
 //we print multiple strings;
  echo "1. thing you have to do";
  echo "\n2. Another thing to do";
  echo "\n3. She have \"a\" dog";
 
//Concatenate
// Write your code below:   
echo "Code"."cademy";

  //echo "\nMy name is:" 
  echo "\nMy name is:"." "."Bitume";
  echo "\n"."tur"."duck"."en";
//Assign value to a variable
// Write your code below:
  $name= "href";
  $biography= "\ngrf";
  $favorite_food = "\n"."tur"."duck"."en";
  #Print a value of declared variable
  echo $name, $biography, $favorite_food;
  echo "\nMy name is: ".$name." and ".$biography." is my biography";

    $noun = "bottle";
    $adjective = "prett";
    $verb = "have";
    echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";
   echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";
#concatenating assignment operator
  $sentence = "\nI'm going on a picnic, and I'm taking apples";
$sentence .= ", bananas";
$sentence .= ", candies";
  echo $sentence;

  /* Create an alias for a variable, instead of just a copy 
  and concatenating assignment operator */  
  $very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order =&$very_bad_unclear_name;
$order.="href";

  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";

// Calcul:
  $last_month = 1187.23;
  $this_month = 1089.98;
  echo $last_month - $this_month;
/*Meg is trying to figure out how long, on average it takes her to 
learn a programming language. So far, she knows Ruby, Python, 
JavaScript, and C++. Create a variable, and assign 
to it the number of programming languages she has learned. 
Create a second variable $months, which is the number of months 
she’s spent learning how to code. */
  $num_languages = 4;
  $months = 11;
  /*Meg realizes that 
  she hasn’t quite studied every day. Create 
  a variable $days and assign as its value 
  the result of multiplying $months by the 
  number of days per month she thinks she actually spent studying, 
  which is 16 days each month. */
  $days = $months * 16;
  /*on average, how many days it took her to learn each language. 
  Assign the result of this operation to a variable $days_per_language.
  and print the result*/
  $days_per_language = $days / $num_languages;
  echo $days_per_language;
  /*
  I’m trying to figure out how much money I should have. 
  At the start of the day I had $94.

I spent $4.25 on coffee
A friend gave me $7 that he owed me
I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
Some friends and I found $20 on the ground and split it four ways
I think that’s everything.
Use a single chained operation to get your result! */
$answer = 94-4.25+7-23.5*1.2+20/4;
echo $answer;
/* Declare a function*/
function praisePHP()
{
  echo "praising the PHP language";
  #return statement
  return 4
}
function first()
{
  return "You did it!\n";
}
function second()
{
  return "You're amazing!\n";
}
function third()
{
  return "You're a coding hero!\n";
}
 praisePHP(); #invoke a function 
 #Capture your function’s return value in a variable named $my_num
 $my_num = praisePHP();
  echo $my_num;
  

  echo first(), second(), third(); # return values of functions
  //Function and parameters
  function increaseEnthusiasm($str_param)
{
  return $str_param. "!";
}
function repeatThreeTimes($powder)
{
 return "\n$powder \n$powder \n$powder";
}
echo increaseEnthusiasm("hello");
echo repeatThreeTimes("it's good!");

#function with two parameters
function calculateArea($height, $width)
{
  return $width * $height; 
}
function calculateVolume($height, $width, $depth)
{
  return  $height * $width * $depth;
}
echo calculateVolume(12, 10, 8);
echo "\n";
echo calculateArea(12, 10);
<?php

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

/**Create a function convertToQuestion(). It should 
 * take a reference to a string variable as its argument. 
 * The function should prepend the string with "Do you think " 
 * and it should add a question mark (?) and new line character 
 * (\n) to the end of the string. 
 * So the string "no" would become "Do you think no?\n" 
 * We’ve provided you with three variables $string_one, 
 * $string_two, and $string_three. Invoke your 
 * function three times—once with each of the three variables.
 * use echo to print each of the string variables to confirm 
 * that their value has been permanently changed.*/
function convertToQuestion(&$str)
{
  $str = "Do you think " . $str . "?\n";
}
$sr = "no";
convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);
echo $string_one;
echo $string_two;
echo $string_three;

/* type of variable 
It prints details about the argument it receives.
built-functions
 */
$first = "Welcome to the magical world of built-in functions.";
$second = 82137012983; 
#INTRO TO BUILT-IN PHP FUNCTIONS
echo gettype($first);
echo "\n";
echo gettype($second);
echo "\n";
echo var_dump($first);
echo "\n";
echo var_dump($second);

echo strrev(" .pu ti peeK .taerg gniod er'uoY");
echo strtolower("SOON, tHiS WILL Look NoRmAL.");
echo str_repeat("\nThere's no place like home.\n", 3);
echo substr_count($essay_one, "really");
echo substr_count($essay_two, "obvious"); #haystack and needle


/**
 * Write a function called calculateDistance() 
 * that calculates the distance between two numbers. 
 * The function should return the same result for two 
 * arguments no matter what order they’re passed into the function.
*Here are some examples of how the function should work:
*calculateDistance(-1, 4) should return 5
*calculateDistance(4, -1) should return 5
*calculateDistance(3, 7) should return 4
*calculateDistance(7, 3) should return 4
*Once you’ve finished writing your function, 
*you should run it to make sure it’s working how it should.
*Write a function called calculateDistance() 
*that calculates the distance between two numbers. The function should return the same result for two arguments no matter what order they’re passed into the function.

*Here are some examples of how the function should work:

*calculateDistance(-1, 4) should return 5
*calculateDistance(4, -1) should return 5
*calculateDistance(3, 7) should return 4
*calculateDistance(7, 3) should return 4
*Once you’ve finished writing your function, you should run it to make sure it’s working how it should.
 */
function calculateDistance($first, $second)
{
  return abs($first-$second);
}
calculateDistance(-1, 4);
echo "\n";
calculateDistance(4,-1);
echo "\n";
calculateDistance(3,7);
echo "\n";
calculateDistance(7,3);

function calculateTip($total)
{
  return round($total*1.18);
}
calculateTip(100);
echo "\n";
calculateTip(35);
echo "\n";
calculateTip(88.77);
//rand() function
$max = getrandmax();
echo $max;
echo rand();
echo "\n";
echo rand(1, 52);
?>
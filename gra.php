<?php
$language = "PHP";
$topic = "scope";


/*abs ( mixed $number ) : number
substr_count ( string $haystack , 
string $needle [, int $offset = 0 [, int $length ]] ) : int*/

$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

// Write your code below:
echo str_pad($b, $a, $d, $c );

function convertToShout($string)
{
  echo strtoupper($string). "!";
}

function tipGenerously($number)
{
  echo ceil($number*1.2);
}

function calculateCircleArea($diameter)
{
  echo pi() * ($diameter/2)**2;
}
$string_var = "Check it out";
echo strtoupper($string_var) . "!\n";

echo ceil(8.873);
echo "\n";
  
echo pi();
echo "\n";

echo str_pad("PHP", 30, "*^*-", STR_PAD_BOTH);
echo "\n";

echo getrandmax();
echo "\n";

echo rand();
echo "\n";

echo rand(1, 52);
echo "\n";

echo abs(-1287);
echo "\n";

echo round(8723.999);
echo "\n";

echo substr_count($string_var, " ");
echo "\n";

echo strrev("\n.pu ti peeK .taerg gniod er'uoY");

echo strtolower("SOON, tHiS WILL Look NoRmAL.\n");

echo str_repeat("There's no place like home.\n", 3);

echo gettype($string_var);
echo "\n";
echo var_dump($string_var);
//Array Functions
$with_function = array("PHP", "popcorn", 555.55);
$with_short = ["PHP", "popcorn", 555.55];
$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];
$favorite_nums = [7, 201, 33, 88, 91];
echo implode("!", $message);#affiche le contenu d'un array
print_r($favorite_nums);#affiche le contenu d'un array

/* Create a new array $winners. This array should have three 
elements—the winning element from each of the three provided arrays.
Use array indexing to access the elements. */
$round_one = ["X", "X", "first winner"];
$round_two = ["second winner", "X", "X", "X"];
$round_three = ["X", "X", "X", "X", "third winner"];
$winners = [$round_one[2], $round_two[0], $round_three[4]];
print_r($winners);

//Ajoute et supprimer 
$change_me = [3, 6, 9];
$change_me[] = "play on !";
$change_me[] = 10;
$change_me[1] = "tadpole";
print_r($change_me);

$stack = ["wild success", "failure", "struggle"];
array_push($stack, "blocker", "impediment");
array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);
print_r($stack);


$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
print $treasure_hunt[3][4][2][0];
//add a random number in array
array_push($hybrid_array, rand());
//joined arrays.
$potluck = $giraffe_foods + $impala_foods;
$potluck = $potluck + $rat_foods;
print_r($potluck);
//union (+) operator takes two array operands and returns a new array with any unique keys from the second array appended to the first array
$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$doge_meme["new value"] = "Woah I'm new";

echo "\n" . $doge_meme["new value"];

array_push($doge_meme, "just an example");

echo "\n" . $doge_meme[0] . "\n";

//remove a key=>value pair entirely using the PHP unset() function
unset($doge_meme[0]);
unset($doge_meme["new value"]);

$doge_meme["description"] = "A wonderful dog picture with a brand new description.";

function createMeme ($meme) 
{
  $meme["top_text"] = "Much PHP";
  $meme["bottom_text"] = "Very programming. Wow.";
  return $meme;
}  

$php_doge = createMeme($doge_meme);

print_r($doge_meme);

print_r($php_doge);

function fixMeme (&$meme) 
{
  $meme["top_text"] = "I can haz";
  $meme["bottom_text"] = "PHP, plz?";
} 

$lame_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "An very fat cat looks happy."];

print_r($lame_meme);

fixMeme ($lame_meme);23


print_r($lame_meme);

/*other method de <?=?>*/
<?="<p>Let's insert some text into our HTML using PHP!</p>";?>

<form method="get">
Country:
//the first input a name of country and the second input a name of language. 
<input type="text" name="country">
<br>
Language: 
//the second input a name of language.
<input type="text" name="language">
<br>
<input type="submit" value="Submit">
</form>
<br>
//Use the PHP shorthand to print the user’s country and language from the $_GET superglobal array.
<p>Your language is: <?= $_GET['language'];?></p>
<p>Your country is: <?= $_GET['country'];?></p>
<a href="index.php">Reset</a>

function chooseCheckoutLane($number)
{
  if ($number<=12)
  {
    return "express lane";
  } else {
    return "regular lane";
  }
}
function canIVote($age)
{
  if ($age >= 18)
  {
    return "yes";
  }else {
    return "no";
  }
}
echo canIVote(17);
echo canIVote(19);
echo chooseCheckoutLane(9);
echo chooseCheckoutLane(13);

function returnSeason($month)
{
  switch($month) {
    case "December":
    case "January":
    case "February":
  return "winter";
  break;
case "March":
case "April":
case "May":
  return "spring";
  break;
case "June":
case "July":
case "August":
  return "summer";
  break;
case "September":
case "October":
case "November":
  return "fall";
  break;
  }
}

function truthyOrFalsy($ram)
{
  if ($ram)
  {
    return "True";
  }else{
    return "False";
  }
}
echo truthyOrFalsy(4);
echo truthyOrFalsy(FALSE);

<?php
namespace Codecademy;

echo "Hello, there. What's your first name?\n";
$user_name = readline(">> ");
$name = strlen($user_name);
if($name>8){
  echo "Hi, {$user_name}. That's a long name.";
}elseif($name > 3){
  echo "Hi, {$user_name}.";
}else
{
  echo "Hi, {$user_name}. That's a short name.";
}
<?php
$gryffindor = 0;
$hufflepuff = 0;
$ravenclaw = 0;
$slytherin = 0;

//$answer1, $answer2, $answer3;

echo  "================\nThe Sorting Hat!\n================\n\n";


  // ~~~~~~~~~~ Question 1 ~~~~~~~~~~

  echo "Q1) When I'm dead, I want people to remember me as:\n\n  1) The Good\n  2) The Great\n  3) The Wise\n  4) The Bold\n\nEnter your answer (1-4): ";
  
  

  $answer1 = readline(">>");

  if ($answer1 === "1")
    $hufflepuff++;
  elseif ($answer1 === "2")
    $slytherin++;
  elseif ($answer1 === "3")
    $ravenclaw++;
  elseif ($answer1 === "4")
    $gryffindor++;

  // ~~~~~~~~~~ Question 2 ~~~~~~~~~~

  echo "\nQ2) Dawn or Dusk?\n\n  1) Dawn\n  2) Dusk\n\nEnter your answer (1-2): ";

  $answer2 = readline(">>");

  if ($answer2 === "1") 
  {
    
    $gryffindor++;
    $ravenclaw++;
  
  } 
  elseif ($answer2 === "2") 
  {

    $hufflepuff++;
    $slytherin++;

  }
  else 
  {

    echo "Invalid input\n";

  }

  // ~~~~~~~~~~ Question 3 ~~~~~~~~~~

  echo "\nQ3) Which kind of instrument most pleases your ear?\n\n  1) The violin\n  2) The trumpet\n  3) The piano\n  4) The drum\n\nEnter your answer (1-4): ";

  $answer3 = readline(">>");

  if ($answer3 === "1")
    $slytherin++;
  elseif ($answer3 === "2")
    $hufflepuff++;
  elseif ($answer3 === "3")
    $ravenclaw++;
  elseif ($answer3 === "4")
    $gryffindor++;

  // ~~~~~~~~~~ Question 4 ~~~~~~~~~~

  echo "\nQ4) Which road tempts you the most?\n\n  1) The wide, sunny grassy lane\n  2) The narrow, dark, lantern-lit alley\n  3) The twisting, leaf-strewn path through woods\n  4) The cobbled street lined (ancient buildings)\n\nEnter your answer (1-4): ";

  $answer4 = readline(">>");

  if ($answer4 === "1")
    $hufflepuff++;
  elseif ($answer4 === "2")
    $slytherin++;
  elseif ($answer4 === "3")
    $gryffindor++;
  elseif ($answer4 === "4")
    $ravenclaw++;
  
  // ========== Sorting ==========

  echo "Congrats on being sorted into... ";

  $max = 0;
  $house = "";

  if ($gryffindor > $max) 
  {

    $max = $gryffindor;
    $house = "Gryffindor";
    
  }

  if ($hufflepuff > $max) 
  {

    $max = $hufflepuff;
    $house = "Hufflepuff";

  }
  
  if ($ravenclaw > $max) 
  {

    $max = $ravenclaw;
    $house = "Ravenclaw";

  }
  
  if ($slytherin > $max) 
  {

    $max = $slytherin;
    $house = "Slytherin";

  }
  
  echo $house . "!\n";

  <?php
  namespace Codecademy;
  function both($trust, $falsi)
  {
    if ($trust){
      if ($falsi){
        return "both";
      }else{
        return "not both";
      }
    }else{
      return "not both";
    }
  }
  echo both(4, 2);
  echo both(FALSE, 2);

function willWeEat($str, $bool)
{
  if ( $bool || ($str === "dessert"))
  {
    return "Yum. Thanks!";
  }else {
    return "No thanks. We're not hungry.";
  }
}
echo willWeEat("dessert", TRUE);
echo willWeEat("o", FALSE);

function clapYourHands($happy, $know)
{
  if($happy && $know)
  {
    return "CLAP!";
  }else {
    return ":(";
  }
}
echo clapYourHands("ream", "ream");
echo clapYourHands(TRUE, FALSE);

function duckDuckGoose($is_goose){
  if(!$is_goose){
    return "duck";
  }else{
    return "goose!";
  }
}
echo duckDuckGoose(FALSE);
echo duckDuckGoose(FALSE);
echo duckDuckGoose(TRUE);

$fruit = "banana";
$protein = "pork";

// Write your code below:
if ($fruit == "banana" xor $protein == "chicken"){
  echo "Dig in!";
}

$is_admin = FALSE;
$is_user = TRUE;
if ($is_admin or $is_user){
  echo "You can change the password.\n";
}


$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin and $sufficient_funds){
  echo "You can make the withdrawal.";
}

include "top_bread.php";
include "mayo.php";
include "lettuce.php";
echo "with a good meat";
include "bottom_bread.php";

<h1>Only Shoes Shoe Shop</h1>
<?php
for ($i = 0; $i < 5; $i++) :
?>
<p>We sell shoes</p>
<?php
endfor;
?>

<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 5):
?>
<p>We sell shoes</p>
  <?php
  foreach ($repeats as $value):
  ?>
  <p>(only shoes)</p>
  <?php
  endforeach;
  ?>
<?php
  $i++;
endwhile;
?>
<h1>Shoe Shop</h1>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach (<?=$footwear?> as <?=$type?> => <?=$brands?>):
?>
<p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;
?>
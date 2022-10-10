<?php
// Using array() to construct an array:
$prime_numbers = array(2, 3, 5, 7, 11, 13, 17);  
  
// Using short array syntax:
$animals = ["dog", "cat", "turtle", "cow"];  

// Printing with print_r() or by converting them into strings using the implode() function.
print_r($prime_numbers);

echo "\n\n";

// Printing with echo and implode()
echo implode(", ", $animals);

// Adding an element with square brackets:
$prime_numbers[] = 19;

// Accessing an array element:
$favorite_animal = $animals[0];
echo "\nMy favorite animal: " . $favorite_animal;

// Reassigning an element:
$animals[1] = "tiger";

// Using array_pop() removes the last element of an array.
echo "\nBefore pop: " . implode(", ", $animals);
array_pop($animals);
echo "\nAfter pop: " . implode(", ", $animals);

// Using array_push() adds elements to the end of an array.
echo "\nBefore push: " . implode(", ", $prime_numbers);
array_push($prime_numbers, 23, 29, 31, 37, 41);
echo "\nAfter push: " . implode(", ", $prime_numbers);

//Using array_shift() removes the first element of an array.
echo "\nBefore shift: " . implode(", ", $animals);
array_shift($animals);
echo "\nAfter shift: " . implode(", ", $animals);

//Using array_unshift()  adds elements to the beginning of the array Regular Expressions
echo "\nBefore unshift: " . implode(", ", $animals);
array_unshift($animals, "horse", "zebra", "lizard");
echo "\nAfter unshift: " . implode(", ", $animals);

//Using chained operations with nested arrays:
$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

echo "\nWe found " . $treasure_hunt[3][4][2][0];

With the PHP shorthand you have just learned, you can now create more readable HTML files with embedded PHP loops.

Here are the key ideas from this lesson:

The PHP shorthand for loops uses a colon (:) instead of a bracket ({) to open the code block.
The shorthand uses keywords to close the code block instead of a bracket (}):
Use endfor to close a for loop
Use endforeach to close a foreach loop
Use endwhile to close a while loop
The closing keyword needs to be followed by a semicolon (;).
Make sure to re-enter PHP mode using <?php or the echo shorthand <?= before using PHP variables in the loop
Instructions
We’ve given an example of a for, foreach, and while loop using the PHP shorthand. Each example also uses the echo shorthand to add PHP variable values to the HTML.


<html>
	<body>
		<form method="post" action="">
			Your name:
			<br>
  		<input type="text" name="name">
 			<br><br>
  		What is the best thing about learning to code:
  		<br>
  		<input type="text" name="best">
  		<br><br> 
  		<input type="submit" value="Submit Answers">
		</form>
    <div id="form-output">
    <p id="name">Hello <?= $_POST["name"]?>!</p><p id="best">Hello <?= $_POST["best"]?>!</p>
    </div>
		<a href="index.php">Reset</a>
	</body>
</html>
    
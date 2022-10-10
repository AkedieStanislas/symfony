<?php
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];  
  
  
$feedback = "";
$message = "You're logged in!";
$validation_error = "* Incorrect username or password.";
$username = "";

// Write your code here:
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"];
   $password  = $_POST["password"];
   if (isset($users[$username]) && $users[$username] === $password){
     $feedback = $message;
   } else {
     $feedback = $validation_error;
   }
};

?>
  
<h3>Welcome back!</h3>
<form method="post" action="">
Username:<input type="text" name="username" value="<?php echo $username;?>">
<br>
Password:<input type="text" name="password" value="">
<br>
<input type="submit" value="Log in">
</form>
<span class="feedback"><?= $feedback;?></span>

<?php
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];  
$message = "";
$validation_error = "* Please enter a 10-digit North American phone number.";
$name = "";
$number = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $number  = $_POST["number"];
   // Write your code here:
   if (strlen($number)<30){
     $formatted_number = preg_replace("/[^0-9]/", "", $number);
     if (strlen($formatted_number)===10){
       $contacts[$name] = $formatted_number;
       $message = "Thanks ${name}, we'll be in touch.";
     } else {
       $message = $validation_error;
     } 
   } else {
     $message = $validation_error;
   }
   

};
?>
<html>
	<body>
  <h3>Contact Form:</h3>
		<form method="post" action="">
			Name:
			<br>
  		<input type="text" name="name" value="<?= $name;?>">
 			<br><br>
  		Phone Number:
  		<br>
  		<input type="text" name="number" value="<?= $number;?>">
  		<br><br> 
  		<input type="submit" value="Submit">
		</form>
		<div id="form-output">
			<p id="response"><?= $message?></p>
    </div>
	</body>
</html>
<?php
$validation_error = "";
$username = "";
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["username"];
   $password  = $_POST["password"];
   if (isset($users[$username]) && $users[$username] === $password){
// Add your code here:
header("Location: success.html")
exit;
     
   } else {
     $validation_error = "* Incorrect username or password.";
   }
 }

?>
  
<h3>Welcome back!</h3>
<form method="post" action="">
Username:<input type="text" name="username" value="<?php echo $username;?>">
<br>
Password:<input type="text" name="password" value="">
<br>
<span class="error"><?= $validation_error;?></span>
<br>
<input type="submit" value="Log in">
</form>
  
  
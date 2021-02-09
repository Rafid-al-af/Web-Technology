<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr = $websiteErr = "";
$name = $email = $dob = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["gender"])) {
    $dobErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  
  ​<label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
 
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";

echo "<br>";
echo $dob;
?>

</body>
</html>
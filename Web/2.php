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
$nameErr = $emailErr = $dergeeErr = $websiteErr = "";
$name = $email = $degree = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  
  <input type="checkbox" id="1" name="1" value="1">
  <label for="1"> SSC</label>
  <input type="checkbox" id="2" name="2" value="2">
  <label for="2">HSC</label>
  <input type="checkbox" id="3" name="3" value="3">
  <label for="3"> BSC</label>
  <input type="checkbox" id="4" name="4" value="4">
  <label for="4"> MSc</label>
  <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";

echo $degree;
?>

</body>
</html>
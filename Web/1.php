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
  
  
  <label for="blood group">Blood Group:</label>
  <select name="1" id="1">
      <option value="1"></option>
      <option value="2">A+</option>
	  <option value="1">B+</option>
      <option value="2">AB+</option>
	  <option value="1">AB-</option>
      <option value="2">A-</option>
	  <option value="1">B-</option>
      <option value="2">O-</option>
      <option value="2">O+</option>
</form>

<?php
echo "<h2>Your Input:</h2>";

echo $degree;
?>

</body>
</html>
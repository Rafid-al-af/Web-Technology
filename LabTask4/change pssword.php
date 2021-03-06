<?php

if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['opwd']);
 $useremail=$_SESSION['login'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM userinfo where password='$oldpass' && email='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update userinfo set password=' $newpassword' where email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<?php include 'footer2.php';?>
<html>
<head>



<form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Current Password :</td>
<td><input type="password" name="opwd" id="opwd"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<tr height="50">
<td>Retype New Passowrd:</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>

<td><input type="submit" name="Submit" value="Submit" /></td>
</tr>
 </table>
</form>
</form>
<table align="center">
<tr height="70">
<td>
<?php include 'footer 1.php';?>
</td>
</tr>

</body></html>

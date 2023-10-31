<HTML>
<BODY>
<FORM method="post" >
<DIV style="border: 2px solid darkblue;padding:10px; align:center;width:50%">
User Name:<input type="text" name="user">
DOB:<input type="date"  name="dob">
<input type="submit" value="SUBMIT" name="submit">
</DIV>
</FORM>
</BODY>
</HTML>
<?php
if (isset($_POST['submit']))
{
	session_start();
	$user=$_POST['user'];
	$dob=$_POST['dob'];
	$_SESSION['uname']=$user;
	$_SESSION['age']=$dob;
	
	echo( '<h1>Session Data entered</h1>');
	echo( '<h3>Hello '. $user. '! your DOB is '.$dob.'</h3>');
	
	echo( '<h1>Session Data Encoded as serialized string</h1>');
	echo "<h3>".session_encode()."</h3>";
	$sess_encoded='cust_name|s:10:"Sara Priet";cust_dob|s:10:"2020-12-31";';
	session_decode($sess_encoded);
	echo( '<h1>after decode</h1>');
	print_r( $_SESSION);
	
}
?>
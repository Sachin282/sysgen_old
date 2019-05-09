<?php
// 	echo "<script>alert('arrived')</script>";
// 	echo 'hgjgf';
if(isset($_POST['email']) || isset($_POST['phone'])){
	$sql = mysqli_connect('fdb24.awardspace.net','2936315_intellicraft','Sachin@282','2936315_intellicraft');
	$execute = mysqli_query($sql,"insert into queries (name,email,phone,message) value('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[message]')");
	if($execute)
		echo '1';
	else
		echo '0';
	// echo "<script>alert('em => $_POST[email] ph: $_POST[phone])</script>";
}
?>
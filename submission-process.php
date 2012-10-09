<?php
	require('functions.php');
	if(!isset($_POST['name']) or !isset($_POST['email']) or !isset($_POST['msg']) ) {
		redirect('form.php');
	}
	if(!validateEmail($_POST['email'])) {
		redirect('form.php');
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	
?>

<html>
<head>
	<title></title>
</head>
<body>

<?php

	if(validateEmail($email)) {
		echo "Thank you for your submission.";
	}
	else {
		echo "Try again.";
		// redirect('form.php');
	}

?>

</body>
</html>
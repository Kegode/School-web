<?php
include 'config.php';

if(isset($_POST['save']))

{	 
	 $all_name = $_POST['name'];
	 $email = $_POST['email'];
	 $comment = $_POST['comment'];
	 
	 $sql = "INSERT INTO `contact_data`(`id`, `all_name`, `email`, `comment`) VALUES (NULL,'$all_name','$email','$comment')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
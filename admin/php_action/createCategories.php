<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$categoriesCode = $_POST['categoriesCode'];
	$categoriesName = $_POST['categoriesName'];
  	$categoriesStatus = $_POST['categoriesStatus']; 

	$sql = "INSERT INTO categories (categories_code, categories_name, categories_active, categories_status) 
	VALUES ('$categoriesCode', '$categoriesName', '$categoriesStatus', 1)";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
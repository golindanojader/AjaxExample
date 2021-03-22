
<?php 

//Login

if (isset($_POST['username']) && $_POST['username']=="jader" && isset($_POST['password']) && $_POST['password']=="123") {

	echo json_encode(array('success' => 1));
	# code...
}else{


	echo json_encode(array('success' => 0));

}
?>

<?php
include '../Note.php';

if(isset($_POST['id'])){
	$note = new Note();

	if($note->deleteNote($_POST['id'])){
		echo json_encode(['status' => 'success']);
	}
	else{
		echo json_encode(['status' => 'error']);
	}
}
else{
	echo json_encode(['status' => 'error']);
}





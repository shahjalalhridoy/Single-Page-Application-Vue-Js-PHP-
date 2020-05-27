<?php
include '../Note.php';

if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];

	$note = new Note();
	$noteData = $note->findNotes($id);
	echo json_encode(['status'=> 'success', 'data'=> $noteData]);
}







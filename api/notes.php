<?php

include '../Note.php';

$note = new Note;

$notes = $note->getNotes();
/*print_r($notes);*/
echo json_encode(['success'=> true, 'data'=> $notes]);
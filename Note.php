<?php
include 'Connection.php';
Class Note extends Connection{

	public function getNotes(){
		$sql = "SELECT * FROM notes ORDER BY id DESC";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function searchNotes($search){
		$sql = "SELECT * FROM notes WHERE title LIKE ? OR details LIKE ?";
		$stmt = $this->db->prepare($sql);
		$stmt->execute(array("%$search%", "%$search%"));
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function findNotes($id){
		$sql = "SELECT * FROM notes WHERE id=? limit 1";
		$stmt = $this->db->prepare($sql);
		$stmt->execute(array($id));
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function addNote($title, $details, $author_id){
		$sql = "INSERT INTO notes(title, details, author_id) VALUES(?,?,?)";
		$stmt = $this->db->prepare($sql);
		if($stmt->execute(array($title, $details, $author_id))){
			return true;
		}
		
		return false;
	}


	public function updateNote($title, $details, $author_id, $id){
		$sql = "UPDATE notes SET title=?, details=?, author_id=? WHERE id=?";
		$stmt = $this->db->prepare($sql);
		if($stmt->execute(array($title, $details, $author_id, $id))){
			return true;
		}
		
		return false;
	}

	public function deleteNote($id){
		$sql = "DELETE FROM notes WHERE id=?";
		$stmt = $this->db->prepare($sql);
		if($stmt->execute(array($id))){
			return true;
		}
		
		return false;
	}


}


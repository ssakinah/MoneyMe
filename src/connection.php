 <?php
 
 class connection
 {
	 public $pdo;
	 
	 public function __construct()
	 { 
		 $this->pdo = new PDO('mysql:server=localhost;dbname=note', 'root', '');
		 $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 }
	 
	 public function getNotes()
	 {
		 $statement = $this->pdo->prepare("SELECT * FROM note ORDER BY create_date DESC");
		 $statement -> execute();
		 return $statement->fetchAll(PDO::FETCH_ASSOC);
	 }
	 
	 public function addNote($note1)
	 {
		$statement = $this->pdo->prepare("INSERT INTO note (username, title, create_date)
								VALUES (:username, :title, :date)");
		$statement->bindValue('username', $note1['username']);						
		$statement->bindValue('title', $note1['title']);
		$statement->bindValue('date', date('Y-m-d H:i:s'));
		return $statement->execute();
	 }
	 
	 public function getNoteById($id)
	 {
		 $statement = $this->pdo->prepare("SELECT * FROM note WHERE id = :id");
		 $statement->bindValue('id', $id);
		 $statement->execute();
		 return $statement->fetch(PDO::FETCH_ASSOC);
	 }
	 
	 public function updateNote($id, $note1)
	 {
		$statement = $this->pdo->prepare("UPDATE  note SET title = :title WHERE id = :id ");
		$statement->bindValue('id', $note1['id']);
		$statement->bindValue('title', $note1['title']);
		return $statement->execute();
	 }
	 
	 public function removeNote($id)
	 {
		$statement = $this->pdo->prepare("DELETE FROM note WHERE id = :id ");
		$statement->bindValue('id', $id);
		return $statement->execute();
	 }
 }

return new connection();
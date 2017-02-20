<?php
	namespace Mini\Model;

	use Mini\Core\Model;

	class Book extends Model
	{
		public function getAllBooks()
		{
			$sql = "SELECT id, title, publisher, publish_year, description FROM book";
			$query = $this->db->prepare($sql);
			$query->execute();

			return $query->fetchAll();
		}

		public function addBook($title, $publisher, $publish_year, $description)
		{
			$sql = "INSERT INTO book (title, publisher, publish_year, description) VALUES (:title, :publisher, :publish_year, :description)";
			$query = $this->db->prepare($sql);
			$parameters = array(':title' => $title, ':publisher' => $publisher, ':publish_year' => $publish_year, ':description' => $description);
			$query->execute($parameters);
		}

		public function deleteBook($book_id)
		{
			$sql = "DELETE FROM book WHERE id=:book_id";
			$query = $this->db->prepare($sql);
			$parameters = array(':book_id' => $book_id);
			$query->execute($parameters);
		}

		public function getBook($book_id)
		{
			$sql = "SELECT id, title, publisher, publish_year, description FROM book WHERE id=:book_id LIMIT 1";
			$query = $this->db->prepare($sql);
			$parameters = array(':book_id' => $book_id);
			$query->execute($parameters);
			return $query->fetch();
		}

		public function updateBook($title, $publisher, $publish_year, $description, $book_id)
		{
			$sql = "UPDATE book SET title=:title, publisher=:publisher, publish_year=:publish_year, description=:description WHERE id=:book_id";
			$query = $this->db->prepare($sql);
			$parameters = array(':title' => $title, ':publisher' => $publisher, ':publish_year' => $publish_year, ':description' => $description, ':book_id' => $book_id);
			$query->execute($parameters);
		}

		public function getAmountOfBooks()
		{
			$sql = "SELECT COUNT(id) AS amount_of_books FROM book";
			$query = $this->db->prepare($sql);
			$query->execute();

			return $query->fetch()->amount_of_books;
		}
	}
?>
<?php
	namespace Mini\Controller;

	use Mini\Model\Book;

	class BooksController
	{
		/*
		 * PAGE: index
		 */
		public function index()
		{
			$Book = new Book();
			$books = $Book->getAllBooks();
			$amount_of_books = $Book->getAmountOfBooks();

			require APP.'view/_templates/header.php';
			require APP.'view/books/index.php';
			require APP.'view/_templates/footer.php';
		}

		public function addBook()
		{
			if (isset($_POST['submit_add_book'])) {
				$Book = new Book();
				$Book->addBook($_POST['title'], $_POST['publisher'], $_POST['publish_year'], $_POST['description']);
			}

			header('Location: '.URL.'books/index');
		}

		public function deleteBook($book_id)
		{
			if (isset($book_id)) {
				$Book = new Book();
				$Book->deleteBook($book_id);
			}

			header('Location: '.URL.'books/index');
		}

		public function editBook($book_id)
		{
			if (isset($book_id)) {
				$Book = new Book();
				$book = $Book->getBook($book_id);

				require APP.'view/_templates/header.php';
				require APP.'view/books/edit.php';
				require APP.'view/_templates/footer.php';
			} else {
				header('Location: '.URL.'books/index');
			}
		}

		public function updateBook()
		{
			if (isset($_POST['submit_update_book'])) {
				$Book = new Book();
				$Book->updateBook($_POST['title'], $_POST['publisher'], $_POST['publish_year'], $_POST['description'], $_POST['book_id']);
			}

			header('Location: '.URL.'books/index');
		}
	}
?>
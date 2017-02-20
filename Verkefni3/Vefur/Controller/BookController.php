<?php
	namespace Controller;

	class BookController {
		private $model;

		public function __construct(BookModel $model) {
			$this->model = $model;
		}
	}
?>
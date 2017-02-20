<?php
	namespace Model;

	class BookModel {
		public $text;

		private $books = [];

		public function __construct() {
			$this->text = 'Hello World!';
		}
	}
?>
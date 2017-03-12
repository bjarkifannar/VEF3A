<?php
	class ReadJSON
	{
		private $file = null;

		public function __construct($fileName)
		{
			$this->file = $fileName;
		}

		public function getJSON()
		{
			return json_decode(file_get_contents($this->file), true);
		}
	}
?>
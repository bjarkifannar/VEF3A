<?php
	class WriteJSON
	{
		private $file = null;
		private $data = null;

		public function __construct($file, $data)
		{
			$this->file = $file;
			$this->data = $data;

			$this->prepareData();
			$this->write();
		}

		private function prepareData()
		{
			$tmpData = json_decode(file_get_contents($this->file), TRUE);
			$tmpLen = count($tmpData);

			$tmpData["$tmpLen"] = array("Title" => $this->data[0], "URL" => $this->data[1]);

			$this->data = $tmpData;

			$tmpData = null;
		}

		private function write()
		{
			file_put_contents($this->file, json_encode($this->data, JSON_FORCE_OBJECT));
		}
	}
?>
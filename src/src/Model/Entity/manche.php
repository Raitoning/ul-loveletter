<?php

	namespace entity;

	class Manche {

		private $id;
		private $no;
		private $gagnant;

		public function get_id() { return $this->$id; }
		public function get_no() { return $this->$no; }
		public function get_gagnant() { return $this->$gagnant; }

		public function set_no($value) { $this->$no = $value; }
		public function set_gagnant($value) { $this->$gagnant = $value; }
	}

?>
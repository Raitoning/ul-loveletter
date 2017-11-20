<?php

namespace entity;

class Carte {

	private $id;
	private $url;
	private $effet;

	public function get_id() { return $this->$id; }
	public function get_url() { return $this->$url; }
	public function get_effet() { return $this->$effet; }

}
?>
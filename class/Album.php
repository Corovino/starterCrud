<?php

class Album {
	
private $id, $artist, $name;
	
	public function __construct($id, $artist, $name) {
		
		$this->id = $id;
		$this->artist = $artist;
		$this->name = $name;
	
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getArtist() {
		return $this->artist;
	}
		
}

?>
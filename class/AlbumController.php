<?php

require_once 'Album.php';
require_once 'DBConnection.php';

class AlbumController {

private $node;
private static $instance = null;

private function __construct() {
	$this->node = DBConnection::getInstance();
}

public function addAlbum($album) {
	
	$name = $album->getName();
	$artist = $album->getArtist();
	
	$q = "INSERT INTO album(name, artist) VALUES('$name', '$artist')";
	return $this->node->getLink()->query($q);
	
}

public function editAlbum($name, $artist, $id) {
	
	$q = "UPDATE album SET name = '$name', artist = '$artist' WHERE id = $id";
	return $this->node->getLink()->query($q);
	
}

public function deleteAlbum($id) {
	
	$q = "DELETE FROM album WHERE id = $id";
	return $this->node->getLink()->query($q);
	
}

public function getAlbums() {
	
	$q = "SELECT * FROM album";
	$r = $this->node->getLink()->query($q);
	
	$album = array();
	
	while($data = mysqli_fetch_object($r)) {
		
		$albums = new Album($data->id, $data->artist, $data->name);
		array_push($album, $albums);
		
	}
	
	return $album;
	
}

public static function getInstance() {
	if(self::$instance == null) {
		self::$instance = new AlbumController();
	}
	return self::$instance;
}

}

?>
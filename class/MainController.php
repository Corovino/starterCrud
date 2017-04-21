<?php

require_once 'AlbumController.php';

class MainController {

private $needle;
private static $instance = null;	
	
	private function __construct() {
		$this->needle = AlbumController::getInstance();
	}
	
	public function addAlbum($album) {
		return $this->needle->addAlbum($album);
	}
	
	public function editAlbum($name, $artist, $id) {
		return $this->needle->editAlbum($name, $artist, $id);
	}
	
	public function deleteAlbum($id) {
		return $this->needle->deleteAlbum($id);
	}
	
	public function getAlbums() {
		return $this->needle->getAlbums();
	}

 public static function getInstance() {
 	if(self::$instance == null) {
 		self::$instance = new MainController();
 	}
	return self::$instance;
 }
	
}

?>
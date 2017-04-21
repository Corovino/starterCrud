<?php

require_once '../class/MainController.php';

$main = MainController::getInstance();

$id = $_GET['id'];

$del = $main->deleteAlbum($id);

if($del) {
	echo 'Eliminado !';
}

?>
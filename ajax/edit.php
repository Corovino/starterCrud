<?php

require_once '../class/MainController.php';

$main = MainController::getInstance();

$r = $main->editAlbum($_POST['n'], $_POST['a'], $_POST['i']);

if($r) {
	echo 'Actualizado !';
}

?>
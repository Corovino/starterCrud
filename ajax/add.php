<?php

require_once '../class/MainController.php';

$main = MainController::getInstance();

$album = new Album(null, $_POST['a'], $_POST['n']);

$r = $main->addAlbum($album);

if($r) {
	echo '<button class="btn btn-success" type="submit">Agregado ! Ir  al registro</button>';
}

?>
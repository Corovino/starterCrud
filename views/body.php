	<div class="container">
	
	  <h3>Discos</h3>
	
	  <form class="form-inline" id="form-add">
	  	
	      <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Albun nombre" /></div>
	      <div class="form-group"><input class="form-control" type="text" id="artist" placeholder="Artista nombre" /></div>
	      <button class="btn btn-default" type="submit">Crear</button>
	  	
	  </form>
		
	<hr />
	
		<form id="show">
		 
	    </form>
	
	   <?php
	   
	     require_once 'class/MainController.php';
	   
	     $mainController = MainController::getInstance();
	   
	     $album = $mainController->getAlbums();
	   
	     foreach($album as $albums) { ?>
	     	    
	   <form id="form_<?php echo $albums->getId(); ?>" class="form-inline form-update">
	   	
	   	 <input type="hidden" name="id" value="<?php echo $albums->getId(); ?>" /><br />
	   	 <div class="form-group"><input class="form-control" type="text" name="name" value="<?php echo $albums->getName(); ?>" /></div>  
	   	 <div class="form-group"><input class="form-control" type="text" name="artist" value="<?php echo $albums->getArtist(); ?>" /></div>  
	   	 <button class="btn btn-primary" type="submit">Guardar</button>
	   	 <a class="btn btn-danger btn-delete" id="<?php echo $albums->getId(); ?>"><i class="fa fa-trash-o"></i></a> 
	   	 
	   </form>
		
	<?php } ?>	
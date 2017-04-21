$(document).ready(function() {
	
	$('#form-add').submit(function(event) {
		
		var name = $('#name').val();
		var artist = $('#artist').val();
		
		$.ajax({
			
			type: 'POST',
			url: 'ajax/add.php',
			data: { n:name, a:artist },
			success: function(data) {
				$('#show').html(data);
			}
			
		});
		
		event.preventDefault();
		
	});

    $('.form-update').submit(function(event) {
    	
    	var id = $(this).find('input[name=id]').val();
    	var name = $(this).find('input[name=name]').val();
    	var artist = $(this).find('input[name=artist]').val();
    	
    	$.ajax({
			
			type: 'POST',
			url: 'ajax/edit.php',
			data: { i:id, n:name, a:artist }
			
		});
    
     event.preventDefault();
    	
    });
    
    $('.btn-delete').on('click', function() {
    	
       var select = $(this).attr('id');
       
       var confirmed = confirm('Esta seguro que quiere eliminar el registro ?');	
    	
    	if(confirmed == true) {
    		
    		$.get('ajax/delete.php?id='+select);
    		$('#form_'+select).remove();
    	}
    
    });
    
});

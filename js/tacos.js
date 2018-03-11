(function( $ ) {

	$('body').on('click', '.menu-toggle', function(){
		
		var expanded = $(this).data('expanded'); 
		var menu_id = $(this).data('menu-id');
		var menu = $('#' + menu_id);
		
		if(expanded){
			$(this).data('expanded', false);
			menu.removeClass('expanded');
		} else {
			$(this).data('expanded', true);
			menu.addClass('expanded');
		}
	});

})( jQuery );
<?php

function birch_layered_nav_js(){
?>
<script>
jQuery( document ).ready( function( $ ) {  
	var query_string = $(location).attr('href').split('?')[1];
	if (query_string){
		query_string = query_string.replace(/filter_/g,'attribute_pa_');
			var variable_products = $(' li.product-type-variable a');

		variable_products.each(function(){
			this.href = this.href + '?' + query_string;	
		});
	}//if there is a query string	
} );//document ready
</script>	
<?php  
}//bich_layered_nav_js

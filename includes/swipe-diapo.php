	<script>  
    $(document).ready(function() { if (jQuery.support.touch) {	
	
	    $("#carousel-example-generic").swiperight(function() {
			$("#carousel-example-generic").carousel('prev');
        }); 
		
        $("#carousel-example-generic").swipeleft(function() {
			$("#carousel-example-generic").carousel('next');
        });
	   	
	}
    });  
    </script> 
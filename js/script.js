$(document).ready(function(){


		$('#registration-form').validate({
	    rules: {
			
			login: {
	        
	        required: true
	      },
		  
		 password1: {
	        
	        required: true
	      },
		  
		  password2: {
				required: true,
				
			},
			confirmpass: {
				required: true,
				
			}
		  
	  
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready
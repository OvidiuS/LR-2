$(function() {	
	/**
	 * MOVING PLACEHOLDER FORM FIELDS
	 */	
	
	// Check and mark form fields with content
	// This is used for clever placeholder labels which show even when form is filled
	// The rest of the clever stuff is done using CSS animations
	$("input").filter(function() {
		if(this.value != "") return true; else return false;
	}).addClass("hasContent");
	
	$("input").blur(function() {
		if(this.value) $(this).addClass("hasContent");
		else $(this).removeClass("hasContent");
	});
	
	$("#email").addClass("hasContent");
	
	
	// Prepare for toast messages
	toastr.options = {
		"closeButton": false,
		"debug": false,
		"newestOnTop": false,
		"progressBar": false,
		"positionClass": "toast-top-center",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}	
	
});
$(function() {

	// pop up window
	$('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});

	//equal heights
	$(document).ready(function () {
		$('.pro-img').equalHeight();
	});


	$(".form-call").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "send.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".success").addClass("visible");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
				$(".success").removeClass("visible");
				$.magnificPopup.close()				
			}, 3000);
		});
		return false;
	});



});

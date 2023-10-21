$(document).ready(function() {
	/* var minVal = parseInt($('#slider-min').val()); */
	var maxVal = parseInt($('#slider-max').val());
   
	$('.slider').on('input', function() {
	 /*  minVal = parseInt($('#slider-min').val()); */
	  maxVal = parseInt($('#slider-max').val());
   
	 /*  if (minVal > maxVal) {
		var temp = minVal;
		minVal = maxVal;
		maxVal = temp;
	  } */
	   
	  updateSlider();
	});
   
	function updateSlider() {
	 /*  $('.slider').attr('min', minVal); */
	  $('.slider').attr('max', maxVal);
	}
  });
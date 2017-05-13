$(document).ready(function(){

	$('.product.card').hover(function(){
		$(this).css('border', '1px solid #eeeeee');
	}, function(){
		$(this).css('border', 'none');
	});

	$('.card-image').hover(function(){
		var halfLayerDiv = $('<div class="half-white layer"></div>');
		var spanText = $('<span>' + $(this).data('name') + '</span>');

		$(this).append(halfLayerDiv);
		$(this).append(spanText);
	}, function(){
		$('.card-image div.half-white.layer').remove();
		$('.card-image span').remove();
	});
});

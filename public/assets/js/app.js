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

	$('.index.image.is-square').hover(function(){
		var halfLayerDiv = $('<div class="half-white layer"></div>');
		var spanText = $('<span>' + $(this).data('name') + '</span>');

		$(this).append(halfLayerDiv);
		$(this).append(spanText);
	}, function(){
		$('.index.image.is-square div.half-white.layer').remove();
		$('.index.image.is-square span').remove();
	});

	$('.index.image.is-square').hover(function(){
		$(this).css('opacity', 0.6);
	}, function(){
		$(this).css('opacity', 1);
	});

	$('#submit-ingredient-report').prop('disabled', true);

});

var openIngredientReport = function(relatedId){
	$('#ingredient_' + relatedId).addClass('is-active');
};

var closeIngredientReport = function(relatedId){
	$('#ingredient_' + relatedId).removeClass('is-active');
};

var openFoodReport = function(relatedId){
	$('#food_' + relatedId).addClass('is-active');
};

var closeFoodReport = function(relatedId){
	$('#food_' + relatedId).removeClass('is-active');
};

var checkEmail = function(){
	var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	if(!re.test($('#email').val())){
		$('input[type="email"]:focus').css('border-color', 'red');
		$('#submit-ingredient-report').prop('disabled', true);
	}else{
		$('input[type="email"]:focus').css('border-color', 'blue');
		$('#submit-ingredient-report').prop('disabled', false);
	}
}

var loadFile = function(event){
	var output = document.getElementById('output');
	output.src = URL.createObjectURL(event.target.files[0]);
};
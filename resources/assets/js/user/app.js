$(document).ready(function(){

	$('.sejarah.column').hide();
	$('.rasa.column').hide();
	$('.nutrisi.column').hide();
	$('.resep.column').hide();

	$('.sejarah-content').show();
	$('.rasa-content').hide();
	$('.nutrisi-content').hide()
	$('.resep-content').hide();

	$('.sejarah-li').addClass('is-active');

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

var tab = function(name){
	switch(name){
		case 'sejarah':
			$('.sejarah-li').addClass('is-active');
			$('.rasa-li').removeClass('is-active');
			$('.nutrisi-li').removeClass('is-active');
			$('.resep-li').removeClass('is-active');

			$('.sejarah-content').show();
			$('.rasa-content').hide();
			$('.nutrisi-content').hide();
			$('.resep-content').hide();
			break;
		case 'rasa' :
			$('.sejarah-li').removeClass('is-active');
			$('.rasa-li').addClass('is-active');
			$('.nutrisi-li').removeClass('is-active');
			$('.resep-li').removeClass('is-active');

			$('.sejarah-content').hide();
			$('.rasa-content').show();
			$('.nutrisi-content').hide();
			$('.resep-content').hide();
			break;
		case 'nutrisi' :
			$('.sejarah-li').removeClass('is-active');
			$('.rasa-li').removeClass('is-active');
			$('.nutrisi-li').addClass('is-active');
			$('.resep-li').removeClass('is-active');

			$('.sejarah-content').hide();
			$('.rasa-content').hide();
			$('.nutrisi-content').show();
			$('.resep-content').hide();
			break;
		case 'resep' :
			$('.sejarah-li').removeClass('is-active');
			$('.rasa-li').removeClass('is-active');
			$('.nutrisi-li').removeClass('is-active')
			$('.resep-li').addClass('is-active');

			$('.sejarah-content').hide();
			$('.rasa-content').hide();
			$('.nutrisi-content').hide()
			$('.resep-content').show();
			break;
	}
};

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
var checkEmailForInquiry = function(){
	var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	if(!re.test($('#inquiry_email').val())){
		$('input[type="email"]:focus').css('border-color', 'red');
		$('.inquiry.button.is-primary').prop('disabled', true);
	}else{
		$('input[type="email"]:focus').css('border-color', 'blue');
		$('.inquiry.button.is-primary').prop('disabled', false);
	}
}

var loadFile = function(event){
	var output = document.getElementById('output');
	output.src = URL.createObjectURL(event.target.files[0]);
};
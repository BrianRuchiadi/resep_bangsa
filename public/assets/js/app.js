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
	$('.inquiry.button.is-primary').prop('disabled', true);
	$('#submit-food-voting').prop('disabled', true);
});

var foodSearch = function(){
	var input = "/(" + $('#search-food').val() + ")/g";
	var foodRegex = new RegExp($('#search-food').val(), "i");
	var results = [];

	$('.search.container.is-hidden').removeClass('is-hidden');

	$.getJSON('/assets/json/makanan.json', function(data){
		$.each(data, function(i, makanan) {
		 	var search = foodRegex.test(makanan.name);

		 	if(results.length < 6){
		 		if(search){
		 			results.push(makanan.name);
		 		}
		 	}

		});

		$('.search.container.is-hidden').addClass('is-hidden');

		if(!results.length > 0){ return; }

		$('.search-output').remove();
		$('.search.container.is-hidden').removeClass('is-hidden');

		results.forEach(function(value){
			dashedValue = value.replace(" ", "-");
			fullValue = "local.resepbangsa.com/makanan/detail/" + dashedValue;
			$('#search-result').append('<a href="' + fullValue +  '" class="search-output"><li class="search-output">' + value + '</li></a>');
		});
	});

};

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

var openVotingModal = function(vote){
	var value = 0;
	switch(vote){
		case 'pedas' : value = 1; break;
		case 'manis' : value = 2; break;
		case 'asam' : value = 3; break;
		case 'pahit': value = 4; break;
	}
	$('#voting').addClass('is-active');
	$('#voting_selection h1').html('');
	$('#voting_selection h1').html('Vote Anda Adalah ' + vote);
	$('#vote_select').val(value);
};

var closeVotingModal = function(){
	$('#voting').removeClass('is-active');
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
};
var checkEmailForInquiry = function(){
	var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	if(!re.test($('#inquiry_email').val())){
		$('input[type="email"]:focus').css('border-color', 'red');
		$('.inquiry.button.is-primary').prop('disabled', true);
	}else{
		$('input[type="email"]:focus').css('border-color', 'blue');
		$('.inquiry.button.is-primary').prop('disabled', false);
	}
};

var checkEmailForVoting = function(){
	var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	if(!re.test($('#email').val())){
		$('input[type="email"]:focus').css('border-color', 'red');
		$('#submit-food-voting').prop('disabled', true);
	}else{
		$('input[type="email"]:focus').css('border-color', 'blue');
		$('#submit-food-voting').prop('disabled', false);
	}
};

var loadFile = function(event){
	var output = document.getElementById('output');
	output.src = URL.createObjectURL(event.target.files[0]);
};
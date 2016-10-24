// Our custom js
$(document).ready(function(){

	// DropDown menu
	$(".dropdown-button").dropdown();

	// Date Picker
	$('.datepicker').pickadate({
	   selectMonths: true,
	   selectYears: 16 
	});

	// Init the select box
    $('select').material_select();

	// Cards toggler
	var cardsWarpper = $('.cards-warpper > .row');
	cardsWarpper.delegate('.toggler', 'click', function(event) {
		event.preventDefault();
		var card = $(this).closest('.card');
		card.toggleClass('inActive Active');
		if (card.hasClass('inActive')) {
			card.find('.hide-in-inActive').css({
				height: '0',
				overflow: 'hidden',
				display: 'block'
			});
		}else{
			card.find('.hide-in-inActive').css({
				height: 'auto',
				overflow: 'auto',
				display: 'initial'
			});
		}
		$(this).toggleClass('on off')
	});
	
});

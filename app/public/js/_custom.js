document.addEventListener("DOMContentLoaded", function() {
	// Custom JS
	var accounts = [
		{ value: 'James Charles', data: '3 accounts', src: 'img/_src/710.png' },
		{ value: 'James Michael Stone', data: '3 accounts', src: 'img/_src/711.png' },
		{ value: 'James Macevoy', data: '2 accounts', src: 'img/_src/712.png' }
	];

	$('#autocomplete').autocomplete({
		//lookup: accounts,
                source: function (request, response) {
                    $.ajax({
                        url: "/api/addDocument",
                        dataType: "jsonp",
                        data: {
                            q: request.term
                        },
                        success: function (data) {
                            response(data);
                        }
                    });
                },
		showNoSuggestionNotice: true,
		noSuggestionNotice: '<span>Oops, seems like we don\'t have any results.</span>',
		formatResult: function (suggestion, currentValue) {
			return '<div class="account"><img class="account-img" src="'+ suggestion.src +'"><div class="account-data"><span class="account__name">'+ suggestion.value +'</span><span class="account__count">'+ suggestion.data +'</span></div></div>';
		},
		onSelect: function (suggestion) {
			alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		}
	});

	$('.search-btn').on('click', function(event) {
		event.preventDefault();
		if ($(window).width() > 768) {
			$('.overlay').css('display', 'block');
			$('.search-box').css('width', '100%');
			$('.search-input').css('padding', '0 31px').focus();
			$('.search-btn').fadeOut('fast');
			$('.close-btn').css('display', 'block');
		} else {
			$('.search-overlay').css('display', 'block');
			$('.search-box').css('width', '100%');
			$('.search-input').css('padding', '0 31px').focus();
			$('.search-btn').fadeOut('fast');
			$('.close-btn').css('display', 'block');
		}
	});
	
	$('.close-btn').on('click', function(event) {
		event.preventDefault();
		if ($(window).width() > 768) {
			$('.overlay').css('display', 'none');
			$('.search-box').css('width', '36px');
			$('.search-input').css('padding', '0');
			$('.close-btn').css('display', 'none');
			$('.search-btn').fadeIn('slow');
		} else {
			$('.search-overlay').css('display', 'none');
			$('.search-box').css('width', '36px');
			$('.search-input').css('padding', '0');
			$('.close-btn').css('display', 'none');
			$('.search-btn').fadeIn('slow');
		}
	});

	$('.icon-link.share').on('click', function(event) {
		event.preventDefault();
		if ($(window).width() < 768) {
			$('.share-overlay').css('display', 'block');
			$('.mobile-share').fadeIn('fast');
		}
	});
	$('.share-overlay').on('click', function(event) {
		event.preventDefault();
		if ($(window).width() < 768) {
			$('.mobile-share').fadeOut('fast');
			$('.share-overlay').css('display', 'none');
		}
	});
});
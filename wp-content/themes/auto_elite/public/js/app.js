(function() {
	var showContent = function(event) {
	  document.getElementById('all-content').classList.remove('hidden');
		if ($(window).width() > 960) {
			new WOW().init();
		}

		$(window).resize(function() {
			if ($(window).width() > 960) {
				new WOW().init();
			}
		});
	  new WOW().init();
	};

	if(window.attachEvent) {
	    window.attachEvent('onload', showContent);
	} else {
	    if(window.onload) {
	        var curronload = window.onload;
	        var newonload = function(evt) {
	            curronload(evt);
	            showContent(evt);
	        };
	        window.onload = newonload;
	    } else {
	        window.onload = showContent;
	    }
	}
})();
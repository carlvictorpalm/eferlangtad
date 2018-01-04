
var feed = new Instafeed({
		get: 'user',
		userId: 54180760,
		accessToken: '54180760.1677ed0.94c13d331411445190efb4b0956a8163',
		target: 'instagram',
		resolution: 'thumbnail',
		after: function() {
			var el = document.getElementById('instagram');
			if (el.classList)
				el.classList.add('show');
			else
				el.className += ' ' + 'show';
		}
});

window.onload = function() {
	feed.run();
	
	var _gauges = _gauges || [];
	(function() {
		var t   = document.createElement('script');
		t.type  = 'text/javascript';
		t.async = true;
		t.id    = 'gauges-tracker';
		t.setAttribute('data-site-id', '4d5aa2a95ffe1f587b000001');
		t.src = '//secure.gaug.es/track.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(t, s);
	})();
	
};
// Input text for canvas birthnameText
$(document).ready(function(){
    $("#birthnameText").keyup(function(){
        var currentText = $(this).val();
        $(".birthnameoutput").text(currentText);
    });

    $("#birthlength").keyup(function(){
        var currentText = $(this).val();
        $(".birthlengthoutput").text(currentText);
    });

    $("#birthweight").keyup(function(){
        var currentText = $(this).val();
        $(".birthweightoutput").text(currentText);
    });

    $("#birthday").keyup(function(){
        var currentText = $(this).val();
        $(".birthdayoutput").text(currentText);
    });

    $("#birthtime").keyup(function(){
        var currentText = $(this).val();
        $(".birthtimeoutput").text(currentText);
    });
});


 
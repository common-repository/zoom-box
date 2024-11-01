$( function () {
	function sync_body(fontsize) {
		$('body').css("font-size", fontsize);
		$('#zoom-status').html(fontsize);
	}

	$('body').append('<div id="zoom-box"><div id="zoom-status"></div><div id="zoom-out" class="fix-png"></div><div id="zoom-in" class="fix-png"></div><div><a href="http://thesky.asia/zoom-box/"><div id="zoom-link"></div></a></div></div>');


	var fontsize=12;
	sync_body(fontsize);
	$('#zoom-in').click( function() {
		if( fontsize < 20) fontsize++;
		sync_body(fontsize);
	});
	$('#zoom-out').click( function() {
		if( fontsize > 10) fontsize--;
		sync_body(fontsize);
	});
});

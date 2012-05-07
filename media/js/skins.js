$(document).ready( function () {
	
	$("#bulb").click( function() {
		var obj = $('link[rel=stylesheet][href="media/styles/dark.css"]');
		if( obj.length ) {
			obj.attr({href: "media/styles/light.css"});
			$.cookies.set("style", "light");
		} else {
			$('link[rel=stylesheet][href="media/styles/light.css"]').attr({href: "media/styles/dark.css"});
			$.cookies.set("style", "dark");
		}
	});
	
	if( $.cookies.get("style") == "light" ) {
		$('link[rel=stylesheet][href="media/styles/dark.css"]').attr({href: "media/styles/light.css"});
	}
});

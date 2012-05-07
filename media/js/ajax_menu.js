$(document).ready( function (){ 
	$("#categories li.category").click( function(event){
		if( $(event.target).hasClass('used') || $(event.target).parent().hasClass('article')) 
			return true;
		
		jQuery.getJSON( "index.php?a=category&id="+$(event.target).prop("id"), function(data) {
			if( data['categories'] || data['articles'] ) {
				var tagsToAppend = '<ul>';
				
				if( data['categories'] )
					$.each(data['categories'], function(key, val) {
						tagsToAppend += '<li class="category" id="' + val['id'] + '">' + val['title'] + '</li>';
					});
				
				if( data['articles'] )
					$.each(data['articles'], function(key, val) {
						tagsToAppend += '<li class="article"><a href="index.php?a=article&id=' + val['id'] + '">' + val['title'] + '</a></li>';
					});
				
				tagsToAppend += '</ul>';
				$(event.target).append( tagsToAppend );
				
				$(event.target).addClass('used');
			}

		});
		
		return false;
	});
});

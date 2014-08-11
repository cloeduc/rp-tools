function scrollToElement(element, delay)
{
	delay = (delay != null)? delay : 'slow';
	$('html,body').animate({scrollTop: element.offset().top-80}, delay);
}

$('#searchinpage').submit(function(){
	var scrollSpeed = 2000;
	var blocks = [];
	var currentblock = 0;
	$('.highlight').removeClass('highlight');
    var phrase = $('#searchinpage input[type=text]').val();
	 $("h1, h2, h3, h4, p").each(function(i, v) {
	  //replace any matches
	  var block = $(v);
	  block.html(
	    block.html().replace(
	      new RegExp(phrase, "gi"), 
	      function(match) {
	      	blocks.push(block);
	      	if(block.parent().hasClass('skill-description'))
	      	{
	      		block.parent('.skill-description').show();
	      	}
	        return ["<span class='highlight'>", match, "</span>"].join("");
	      }));
	});
	var findingSentence = blocks.length + " \"" + phrase + " \"";
	findingSentence = (blocks.length > 1 ) ?  findingSentence  + "trouvés" : findingSentence  + "trouvé";
	$('#findingSentence').html(findingSentence);
	if(blocks.length > 0) {
		scrollToElement(blocks[0], scrollSpeed);
	    if(blocks.length > 1) {
	    	$("#navigation-search").show();
		    $('#totalsearch').html(blocks.length);
		    $("#navigation-search span").click(function(){
		    	// First remove search-disable class add enable arrow
		    	$('.search-disabled').removeClass('search-disabled');
		    	// Then move to next or previous block (if it's not a the first or the last block)
		    	if($(this).hasClass("search-left") && currentblock > 0) {
		    		currentblock = currentblock-1;
			    	scrollToElement(blocks[currentblock], scrollSpeed);
		    	} else if($(this).hasClass("search-right") && currentblock < blocks.length -1) {
		    		currentblock = currentblock+1;
		    		scrollToElement(blocks[currentblock], scrollSpeed);
		    	}
		    	// disable arrow if it's the first or the last block 
		    	if(currentblock == 0) {
		    		$('.search-left').addClass('search-disabled');
		    	} else if(currentblock == blocks.length -1) {
		    		$('.search-right').addClass('search-disabled');
		    	}
		    	$('#currentsearch').html(currentblock+1);
		    });
	    }
	}
});
"use strict";

$( document ).ready(function() 
{
	$(".grid").imagesLoaded(function() 
	{
    	$(".grid").masonry(
    	{
      		itemSelector: ".grid-item"
    	});
 	});
});











 
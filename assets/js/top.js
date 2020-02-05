"use strict";

document.addEventListener('DOMContentLoaded', function() 
{
  	window.onscroll = function(ev)
  	 {
    document.getElementById("retour").className = (window.pageYOffset > 100) ? "visible" : "invisible";
  	};
});
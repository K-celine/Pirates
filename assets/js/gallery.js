"use strict";

$( document ).ready(function() 
{
	$(".grid").imagesLoaded(function() 
	{
    	$(".grid").masonry(
    	{
      		itemSelector: ".grid-item1, .grid-item2, .grid-item3"
    	});
 	});
});


/**********************DONNEES**************************/

var pictureSelectedLeft;
var pictureSelectedMiddle;
var pictureSelectedRight;

/**********************FONCTIONS**************************/

function onPhotoClickedLeft()
{
	this.classList.toggle("selected1");
};

function onPhotoClickedMiddle()
{
	this.classList.toggle("selected2");
};

function onPhotoClickedRight()
{
	this.classList.toggle("selected3");
};


/**********************CODE PRINCIPAL**************************/


//Je récupère les éléments :

pictureSelectedLeft = document.getElementsByClassName('grid-item1');
pictureSelectedMiddle = document.getElementsByClassName('grid-item2');
pictureSelectedRight = document.getElementsByClassName('grid-item3');


//J'ajoute l'évenement "click" pour chaque photo selectionnée :

for(var i = 0; i<pictureSelectedLeft.length; i++){
	
	pictureSelectedLeft[i].addEventListener("click", onPhotoClickedLeft);
};

for(var i = 0; i<pictureSelectedMiddle.length; i++){

	pictureSelectedMiddle[i].addEventListener("click", onPhotoClickedMiddle);
};

for(var i = 0; i<pictureSelectedRight.length; i++){

	pictureSelectedRight[i].addEventListener("click", onPhotoClickedRight);

};











 
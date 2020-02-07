"use strict";


/**********************DONNEES**************************/
var requeteAjax;
var reponse;

/**********************FONCTIONS**************************/


function getMessages()
{

	requeteAjax = new XMLHttpRequest();
	requeteAjax.open('GET', 'http://localhost:8888/Pirates/pages/chat');
	requeteAjax.responseType = 'json';
	requeteAjax.send();

	requeteAjax.onload = function()
	{
 		reponse= requeteAjax.response;

 		var html = reponse.reverse().map(function(comment){

  		return `
  				<p><b> ${comment.date_created.substring(11, 16)} ${comment.author}</b></p>
  				<p class="content">${comment.content}</p>`
 
 		}).join('');

 		var messages= document.querySelector('.messages');

		messages.innerHTML = html;
		messages.scrollTop = messages.scrollHeight;
	}
}


function postMessage(event)
{

	event.preventDefault();

	var content = document.querySelector('#content');

	var data = new FormData();
	data.append('content' , content.value);

	requeteAjax = new XMLHttpRequest();
	requeteAjax.open('POST' , 'http://localhost:8888/Pirates/pages/chat?task=write');
	requeteAjax.responseType = 'json';

	
	requeteAjax.onload = function()
	{

			reponse = requeteAjax.response;
			

			if(reponse['status'] == 'error'){
					alert("Veuillez remplir le champ 'contenu'");

			}else{
			
			getMessages();
			content.value='';

		}
	}

	requeteAjax.send(data);
}


/**********************CODE PRINCIPAL**************************/


getMessages();

document.querySelector('#chat_form').addEventListener('submit' , postMessage);















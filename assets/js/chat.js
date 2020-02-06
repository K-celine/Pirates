"use strict";


function getMessages()
{

	var requeteAjax = new XMLHttpRequest();
	requeteAjax.open('GET', 'http://localhost:8888/Pirates/pages/chat');
	requeteAjax.responseType = 'json';
	requeteAjax.send();

	//la réponse : 

	requeteAjax.onload = function()
	{
 		var resultat= requeteAjax.response;

 		var html = resultat.map(function(comment){

  		return `
  				<p><b> ${comment.date_created.substring(11, 16)} ${comment.author}</b></p>
  				<p class="content">${comment.content}</p>`
 
 		}).join('');

 		var messages= document.querySelector('.messages');

		messages.innerHTML = html;
		messages.scrollTop = messages.scrollHeight;
	}
}

getMessages();

/**********************DONNEES**************************/
/**********************FONCTION**************************/



function postMessage(event)
{

	event.preventDefault();

	var author = document.querySelector('#author');
	var content = document.querySelector('#content');

	var data = new FormData();
	data.append('author' , author.value);
	data.append('content' , content.value);

	var requeteAjax = new XMLHttpRequest();
	requeteAjax.open('POST' , 'http://localhost:8888/Pirates/pages/chat?task=write');
	requeteAjax.responseType = 'json';

	
	requeteAjax.onload = function()
	{

			var reponse = requeteAjax.response;
			

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

document.querySelector('#chat_form').addEventListener('submit' , postMessage);















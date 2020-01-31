"use strict";


function getMessages()
{

	const requeteAjax = new XMLHttpRequest();
	requeteAjax.open('GET', 'pages/chat');

	requeteAjax.onload = function()
	{
 		const resultat= JSON.parse(requeteAjax.responseText);
 		const html = resultat.map(function(comment){

  		return `
  			<div class="message">
  				<span class="date">${comment.created_at.substring(11, 16)}</span>
  				<span class="${comment.author}"></span>
  				<span class="${comment.content}"></span>
 			</div>`
 
 		}).join('');

 		console.log(html);

 		const messages= document.querySelector('.messages');

		messages.innerHTML = html;
		messages.scrollTop = messages.scrollHeight;
	}

	requeteAjax.send();
}



function postMessage(event)
{

	event.preventDefault();

	const author = document.querySelector('#author');
	const content = document.querySelector('#content');

	const data = new FormData();
	data.append('author' , author.value);
	data.append('content' , content.value);

	const requeteAjax = new XMLHttpRequest();
	requeteAjax.open('POST' , 'pages/chat');

	requeteAjax.onload = function(){
		getMessages();
	}

	requeteAjax.send(data);

}


document.querySelector('form').addEventListener('submit' , postMessage);















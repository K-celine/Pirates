"use strict";

/**********************DONNEES**************************/

var cookie_crunch = Cookies.get('cookie_crunch');

/**********************FONCTIONS**************************/


function accepterCookie() 
{
      
  document.cookie = "cookie_crunch=ok;expires=Thu, 31 Dec 2020 12:00:00 UTC;path=/";
  
  document.getElementById("cookie-msg").style.display = 'none';
}
    
/**********************CODE PRINCIPAL**************************/
document.write(
	"<div id='cookie-msg' style='display:none;z-index:10;position:fixed; bottom:0; left:0; width: 100%;  text-align: center; padding: 20px 0; margin:0;  background: #231e20;  color: white;  font: 14px arial, sans-serif;'><div style='display:inline-block;width:78%;margin:0; font-family: Arial;'>Le site des Pirates utilise des cookies - pour plus d'informations, <a data-toggle='modal' data-target='#modal_cookie' id='cookie-policy' style='color: #919191;font-weight:bold;cursor:pointer;'>lire notre politique concernant les cookies</a>. <span> En poursuivant votre navigation sur notre site, vous acceptez l'utilisation de cookies.</span> <span id='accepter' style='color:#f1ba4d;text-decoration:underline;cursor:pointer;'><b> ACCEPTER_LES_COOKIES </b></span></div></div>");


document.getElementById("accepter").addEventListener("click", accepterCookie);


if (cookie_crunch == null || cookie_crunch == ""){

       document.getElementById("cookie-msg").style.display = "block";
    };




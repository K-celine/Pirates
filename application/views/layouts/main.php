<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Le site officiel des Pirates, l'équipe de baseball de Béziers"/>
	<title>Les Pirates - Baseball Club Béziers</title>
	<script src="https://kit.fontawesome.com/b913c81d17.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Heebo|Mitr:300,400,500&display=swap" rel="stylesheet"> 
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>
	<header>
		<h1 class="logo" id="top"><a href="<?php echo base_url();?>"><img class="logoPirates" src="<?php echo base_url()?>assets/images/pirates_logo1.jpg" alt="logo_Pirates_baseball"/></a></h1>
		<nav class="menu">
			<ul>
				<li><a href="<?php echo base_url();?>home/index">HOME</a>
					<div class="sous_menu">
						<ul>
							<li><a href="<?php echo base_url();?>/home/#prochains_matchs">PROCHAIN MATCH</a></li>
							<li><a href="<?php echo base_url();?>/home/#actus">ACTU</a></li>
							<li><a href="<?php echo base_url();?>matchs/infos/#booking">RESERVATION</a></li>
							<li><a href="<?php echo base_url();?>matchs/infos/#resultats">RESULTAT</a></li>
							<li><a href="<?php echo base_url();?>matchs/infos/#standing">CLASSEMENT</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo base_url();?>pages/club">CLUB</a>
					<div class="sous_menu">
						<ul>
							<li><a href="<?php echo base_url();?>pages/club/#histoire">HISTOIRE</a></li>
							<li><a href="<?php echo base_url();?>pages/club/#palmares">PALMARES</a></li>
							<li><a href="<?php echo base_url();?>pages/club/#organigramme">ORGANIGRAMME</a></li>
							<li><a href="<?php echo base_url();?>pages/club/#coach">COACHS</a></li>
							<li><a href="<?php echo base_url();?>pages/club/#planning">PLANNING</a></li>
							<li><a href="<?php echo base_url();?>pages/club/#terrain">TERRAIN</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo base_url();?>pages/team">TEAM</a>
					<div class="sous_menu">
						<ul>
							<li><a href="<?php echo base_url();?>pages/team/#team1">BASEBALL</a></li>
							<li><a href="<?php echo base_url();?>pages/team/#team6">SOFTBALL</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo base_url();?>pages/media">MEDIA</a>
					<div class="sous_menu">
						<ul>
							<li><a href="<?php echo base_url();?>pages/media/#presse">PRESSE</a></li>
							<li><a href="<?php echo base_url();?>pages/media/#galerie">GALERIE</a></li>
							<li><a href="<?php echo base_url();?>pages/media/#chat">CHAT</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo base_url();?>pages/contact">CONTACT</a>
					<div class="sous_menu">
						<ul>
							<li><a href="<?php echo base_url();?>pages/contact/#nous_contacter">NOUS CONTACTER</a></li>
							<li><a href="<?php echo base_url();?>pages/contact/#nous_rejoindre">NOUS REJOINDRE</a></li>
							<li><a href="<?php echo base_url();?>pages/contact/#nous_trouver">NOUS TROUVER</a></li>
						</ul>
					</div>
				</li>
				<?php if($this->session->userdata('role') == 1): ?>
					<li><a id="admin" href="<?php echo base_url();?>users/admin">ADMIN</a></li>
					<li><a id="admin_logo" href="<?php echo base_url();?>users/admin"><i class="fas fa-user-shield"></i></a></li>
				<?php endif; ?>
				<?php if($this->session->userdata('logged_in')): ?>
					<li><a id="deco" href="<?php echo base_url();?>users/logout">SE DECONNECTER</a></li>
					<li><a id="deco_logo" href="<?php echo base_url();?>users/logout"><i class="fas fa-user-slash"></i></a></li>
				<?php endif; ?>
				<?php if($this->session->userdata('logged_in')== FALSE): ?>
					<li><a id="compte" data-toggle="modal" data-target="#modal_compte" href="<?php echo base_url();?>users">COMPTE</a></li>
					<li><a id="compte_logo" data-toggle="modal" data-target="#modal_compte" href="<?php echo base_url();?>users"><i class="fas fa-user"></i></a></li>
				<?php endif; ?>
			</ul>
		</nav>
	</header>
	<div class="modal fade" id="modal_compte" tabindex="-1" role="dialog" aria-labelledby="modal_compte_label" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal_compte_label">ESPACE MEMBRE </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url();?>users/login" method="post">
						<div class="form-group">
							<label for="InputEmail1">Adresse Email </label>
							<input type="email" name="email" class="form-control form-control-lg" id="InputEmail1">
						</div>
						<div class="form-group">
							<label for="InputPassword">Mot de passe</label>
							<input type="password" name="password" class="form-control form-control-lg" id="InputPassword">
						</div>
						<button type="submit" class="btn btn-lg btn-secondary">SE CONNECTER</button>
					</form>
				</div>
				<div class="modal-footer">
					<p><small>Pas encore membre ?</small></p>
					<a class="btn btn-lg btn-warning" href="<?php echo base_url();?>users/register">CREER UN COMPTE</a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_cookie" tabindex="-1" role="dialog" aria-labelledby="modal_cookie" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">POLITIQUE DES PIRATES CONCERNANT LES COOKIES</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>La présente politique de cookies est applicable lors de la consultation de l'ensemble du site des Pirates. Cette politique a pour objet de vous permettre de mieux comprendre comment fonctionnent les cookies susceptibles d'être déposés sur votre ordinateur, votre tablette et votre smartphone lors de votre consultation du site.</p><br>
					<h6>QU'EST-CE QU'UN COOKIES?</h6>
					<p>Un cookie, ou témoin de connexion, est un petit fichier texte qui peut être placé sur votre terminal à l'occasion de la consultation d'un site internet ou d'une application et ce, grâce à votre logiciel de navigation. Un fichier cookie permet à son émetteur d'identifier le terminal dans lequel il est enregistré, pendant la durée de validité ou d'enregistrement dudit cookie.</p><br>
					<h6>PAR QUI SONT DÉPOSÉS LES COOKIES ?</h6>
					<p>Les cookies placés sur votre terminal depuis notre site sont déposés par les Pirates, ils sont principalement liés au fonctionnement du site.</p><br>
					<h6>COMMENT ET POURQUOI NOUS UTILISONS DES COOKIES ?</h6>
					<p>Lorsque vous vous connectez à l'une des pages de notre site, nous sommes susceptibles d'être amenés à installer différents cookies dans votre terminal nous permettant de reconnaître le navigateur de votre terminal pendant la durée de validité du cookie concerné.</p>
					<p>Les cookies que nous émettons sont utilisés aux fins décrites ci-dessous.</p><br>
					<h6>LES COOKIES  STRICTEMENT NECESSAIRES AU FONCTIONNEMENT DU SITE DES PIRATES</h6>
					<p>Il s'agit des cookies indispensables à la navigation sur notre site (comme les identifiants de session) qui vous permettent d'utiliser les principales fonctionnalités du site et de sécuriser votre connexion. Ils vous permettent par exemple d'accéder directement à des espaces qui vous sont réservés et personnels, grâce à des identifiants ou des données que vous nous avez éventuellement antérieurement confiés.Ces cookies sont exclusivement déposé par les Pirates.</p><br>
					<h6>LES COOKIES  DE FONCTIONNALITE</h6>
					<p>Le site des Pirates n’utilise pas de cookies de ce type.</p><br>
					<h6>LES COOKIES  ANALYTIQUES</h6>
					<p>Le site des Pirates n’utilise pas de cookies de ce type.</p><br>
					<h6>LES COOKIES DE PARTAGE</h6>
					<p>Le site des Pirates n’utilise pas de cookies de ce type.</p><br>
					<h6>LES DONNEES DE NAVIGATION ET LES COOKIES PUBLICITAIRES</h6>
					<p>Le site des Pirates n’utilise pas de cookies de ce type.</p><br>
					<h6>VOTRE GESTION DES COOKIES</h6>
					<p>Attention, si vous avez refusé la mise en oeuvre des cookies, vous ne pourrez pas bénéficier des fonctionnalités du site.</p>
					<p>Selon le type de cookies que vous souhaitez désactiver, vous pouvez exprimer votre choix grâce au paramétrage de votre navigateur.</p>
					<p>La plupart des navigateurs acceptent les cookies par défaut. Cependant, vous pouvez décider de bloquer ces cookies ou les supprimer.</p>
					<p>Pour changer la gestion des cookies de votre navigateur, vous pouvez modifier les réglages dans l'onglet confidentialité.</p>
					<p>La configuration de chaque navigateur est différente. Elle est décrite dans le menu d'aide de votre navigateur, qui vous permettra de savoir de quelle manière modifier vos souhaits en matière de cookies.</p>
					<p>Pour Chrome : <a href="https://support.google.com/chrome/answer/95647?hl=fr&hlrm=en">https://support.google.com/chrome/answer/95647?hl=fr&hlrm=en</a></p>
					<p>Pour Internet Explorer <a href="https://support.microsoft.com/fr-fr/help/17442/windows-internet-explorer-delete-manage-cookies">https://support.microsoft.com/fr-fr/help/17442/windows-internet-explorer-delete-manage-cookies</a></p>
					<p>Pour Safari : <a href="https://support.apple.com/kb/PH21411?viewlocale=fr_FR&locale=fr_FR">https://support.apple.com/kb/PH21411?viewlocale=fr_FR&locale=fr_FR</a></p>
					<p>Pour FireFox : <a href="http://support.mozilla.org/fr/kb/cookies-informations-sites-enregistrent?redirectlocale=fr&redirectslug=G%C3%A9rer+les+cookies">http://support.mozilla.org/fr/kb/cookies-informations-sites-enregistrent?redirectlocale=fr&redirectslug=G%C3%A9rer+les+cookies</a></p>
					<p>Pour Opéra : <a href="http://help.opera.com/Windows/10.20/fr/cookies.html">http://help.opera.com/Windows/10.20/fr/cookies.html</a></p><br>
					<h6>PLUS D'INFORMATIONS SUR LES COOKIES</h6>
					<p>Pour plus d'informations sur les cookies, vous pouvez vous rendre sur le site de la CNIL, à cette adresse : <a href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser">https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser</a></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_mentions" tabindex="-1" role="dialog" aria-labelledby="modal_mentions" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">MENTIONS LEGALES ET UTILISATION DES DONNEES PERSONNELLES</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h6>Identité</h6>
					<p>Le site des Pirates (ci-après dénommé le « Site ») est édité et exploité par l'association lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ipsa consectetur magni repellat, saepe voluptatibus consequatur voluptates pariatur! Est, molestias, qui est situé rue lorem à Béziers immatriculée au Journal officiel sous le numéro HRB 000000 B.</p>
					<p>Représentants légaux : Lorem ipsum, dolor sit amet, consectetur adipisicing, Doloremque ratione</p><br>
					<h6>Contact</h6>
					<p>Notre association est joignable via notre formulaire de contact ou par téléphone au numéro 00 82 88 00 99 du lundi au samedi de 8h à 18h et le dimanche de 10h à 18h.</p><br>
					<h6>Hébergeur</h6>
					<p>L’Hébergement du Site est assuré par : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores iste minima ipsam eligendi reprehenderit saepe sint hic aspernatur non, quasi, consectetur asperiores eveniet veniam! Quae incidunt dolorem.</p><br>
					<h6>Propriété intellectuelle</h6>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores officia voluptates, delectus omnis quidem cumque, iure laborum accusantium recusandae aut tempora, quod quam aperiam repudiandae in adipisci libero. Labore expedita tempora velit animi eaque laboriosam est in rerum! Ratione aperiam perspiciatis dolore nesciunt aut velit consequatur fuga totam molestias maxime numquam cum nihil obcaecati cumque ducimus reprehenderit delectus molestiae pariatur nemo, vel. Voluptatibus qui labore dignissimos possimus, corporis aperiam, eius culpa iste! Accusamus ut libero quia, molestias laborum voluptate?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores fugiat porro necessitatibus dolorem optio enim ut vel. Officiis dolorum praesentium cupiditate, quae dicta iusto, magnam nulla eius, ullam eligendi consectetur accusamus voluptatum harum? Veniam impedit est, adipisci sequi, laborum rem!</p><br>
					<h5>Traitement des données</h5>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis enim tempora iusto, totam quas, autem accusamus debitis eligendi veritatis, facere, ipsum? Nemo, provident dolores tempora quod incidunt. Quo accusantium fugit voluptatem neque, repellendus tempore est consectetur sit! Quae consequatur, minima! </p><br>
					<h5>Politique de Confidentialité </h5>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis enim tempora iusto, totam quas, autem accusamus debitis eligendi veritatis, facere, ipsum? Nemo, provident dolores tempora quod incidunt. Quo accusantium fugit voluptatem neque, repellendus tempore est consectetur sit! Quae consequatur, minima! </p><br>
					<h6>Quelles données sont traitées ?</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis blanditiis expedita debitis, facere temporibus, adipisci unde tempora similique asperiores quaerat ullam, obcaecati assumenda natus laborum maxime cupiditate commodi ratione!</p><br>
					<h6>À quelles fins mes données sont-elles utilisées ?</h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>Informations relatives aux  réseaux sociaux </h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>Newsletter </h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>À qui mes données sont-elles transmises ? </h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>Quels sont mes droits en matière de protection des données ? </h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>Quand mes données sont-elles supprimées ? 
					</h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>Comment mes données sont-elles protégées ? </h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
					<h6>Modifications de la présente politique de confidentialité </h6>
					<p>Ab nemo consectetur explicabo aut facilis consequatur magnam ipsam voluptate, repellendus, architecto amet nam a! Eveniet vitae recusandae, officiis. Excepturi nostrum nam exercitationem cum laborum magnam quod corporis, aliquam adipisci.</p><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<main>	
		<?php $this->load->view($main_view); ?>
	</main>
	<footer>
		<div id="foot">
			<div>
				<form method="post" action="<?php echo base_url();?>home/subscribe_newsletter">
					<fieldset>
						<legend>S'INSCRIRE A LA NEWSLETTER :</legend>
						<input type="email" name="email_newsletter" placeholder="VOTRE ADRESSE EMAIL" required/>
						<input type="submit" value="JE SOUSCRIS!"/>
					</fieldset>
				</form>
				<a style='cursor:pointer;' class="btn text-light" data-toggle="modal" data-target="#modal_mentions">Mentions Légales relatives à l'utilisation des données personnelles</a>
			</div>
			<div>
				<a href="#"><img class="logoPirates2" src="<?php echo base_url()?>assets/images/pirates_logo2.jpg" alt="logo_Pirates_baseball"/></a>
			</div>
			<div>
				<nav><span id="suivre">SUIVEZ-NOUS SUR : </span>
					<a href="https://fr-fr.facebook.com/bcbpirates"><i class="fab fa-facebook-square"></i></a>
					<a href="https://www.instagram.com/frenchbaseballsoftball/"><i class="fab fa-instagram"></i></a>
					<a href="https://twitter.com/ffbs_baseball"><i class="fab fa-twitter-square"></i></a>
				</nav>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/chat.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/gallery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/cookie.js"></script>
</body>
</html>
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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>
</head>
<body>
	<header>
		<h1 class="logo"><a href="<?php echo base_url();?>"><img class="logoPirates" src="<?php echo base_url()?>assets/images/pirates_logo1.jpg" alt="logo_Pirates_baseball"/></a></h1>
	<nav class="menu">
		<ul>
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
						<li><a href="<?php echo base_url();?>pages/media/#chat">CHAT</a></li>
						<li><a href="<?php echo base_url();?>pages/media/#galerie">GALERIE</a></li>
						<li><a href="<?php echo base_url();?>pages/media/#video">VIDEO</a></li>
						<li><a href="<?php echo base_url();?>pages/media/#presse">PRESSE</a></li>
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
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url();?>users/login" method="post">
									<div class="form-group">
										<label for="InputEmail1">Adresse Email </label>
										<input type="email" name="email" class="form-control form-control-lg" id="InputEmail1" aria-describedby="emailHelp">
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
								<a type="button" class="btn btn-lg btn-warning" href="<?php echo base_url();?>users/register">CREER UN COMPTE</a>
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

									<input type="email"name="email_newsletter" placeholder="VOTRE ADRESSE EMAIL" required/>
									<input type="submit" value="JE SOUSCRIS!"/>

								</fieldset>
							</form>

						</div>

						<div>
							<a href="#">
								<img class="logoPirates2" src="<?php echo base_url()?>assets/images/pirates_logo2.jpg" alt="logo_Pirates_baseball"/>
							</a>

						</div>
						<div>
							<nav>
								<legend >SUIVEZ-NOUS SUR : 



									<a href="https://fr-fr.facebook.com/bcbpirates"><i class="fab fa-facebook-square"></i></a>
									<a href="https://www.instagram.com/frenchbaseballsoftball/"><i class="fab fa-instagram"></i></a>
									<a href="https://twitter.com/ffbs_baseball"><i class="fab fa-twitter-square"></i></a>

								</legend>
							</nav>


						</div>

					</div>
				</footer>
				<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>




			</body>
			</html>
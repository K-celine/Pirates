<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Les Pirates - Baseball Club Béziers</title>
	<script src="https://kit.fontawesome.com/b913c81d17.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	
	<link href="https://fonts.googleapis.com/css?family=Heebo|Mitr:300,400,500&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>
</head>
<body>
	<header>
		<h1 class="logo">
			<a href="<?php echo base_url();?>"><img class="logoPirates" src="<?php echo base_url()?>assets/images/pirates_logo1.jpg" alt="logo_Pirates_baseball"/>
			</a>
		</h1>
		<nav class="menu">
			<a href="<?php echo base_url();?>pages/club">CLUB</a>
			<a href="<?php echo base_url();?>pages/team">TEAM</a>
			<a href="<?php echo base_url();?>pages/media">MEDIA</a>
			<a href="<?php echo base_url();?>pages/contact">CONTACT</a>
			<a href="<?php echo base_url();?>shop/home">SHOP</a>
			<a href="<?php echo base_url();?>users">COMPTE</a>
		</nav>
	</header>

	
		<?php $this->load->view($main_view); ?>
	

	
	

	<footer>
		<div id="foot">
		<div>
			<form action="">
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
			<legend>SUIVEZ-NOUS SUR : 
		


				<a href="#"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter-square"></i></a>

			</lengend>
		</nav>
			

		</div>

</div>
	</footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>-->




</body>
</html>
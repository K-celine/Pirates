<!-- ici Page Contact-->
<div class="container mw-100" id="container_contact">
	<div class="row align-items-center" id="nous_contacter">
		<div class="col-7 p-5">
			<h5><i class="fas fa-envelope"></i> NOUS CONTACTER</h5><br>
			<form method="post" action="<?php echo base_url();?>pages/contact">
				<?php echo validation_errors("<p class='alert alert-danger'>"); ?>
 				<div class="row form-group">
    				<div class="col">
      					<input type="text" class="form-control form-control-lg" name="last_name" placeholder="Nom">
    				</div>
    				<div class="col">
      					<input type="text" class="form-control form-control-lg" name="first_name" placeholder="Prenom">
    				</div>
  				</div>
  				<div class="form-group">
    				<input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
  				</div>
  				<div class="form-group">
    				<input type="text" class="form-control form-control-lg" name="subject_message" placeholder="Objet">
  				</div>
  				<div class="form-group">
    				<textarea class="form-control form-control-lg" name="content_message" placeholder="Votre message..." rows="5"></textarea>
  				</div>
  				 <button type="submit" class="btn btn-warning btn-lg">ENVOYER</button>
			</form>
		</div>	
		<div class="col-5 p-5">
			<h5><i class="fas fa-mobile-alt"></i> AUTRES CONTACTS</h5><br>
			<address>
				<ul>
					<li><strong>6U: </strong>BAZIN Christophe - <a href="tel:+13115552368">06 21 04 55 36</a></li><br>
					<li><strong>9U: </strong>BAZIN Christophe - <a href="tel:+13115552368">06 21 04 55 36</a></li><br>
					<li><strong>12U: </strong>François BONNET: <a href="tel:+13115552368"> 06 74 68 74 19</a></li><br>
					<li><strong>15U: </strong>Brian OBERMAYR: <a href="tel:+13115552368"> 06 69 90 59 32</a></li><br>
					<li><strong>Softball: </strong>Laura BESOMBES: <a href="tel:+13115552368"> 06 24 75 59 64</a></li><br>
					<li><strong>Juniors/Seniors: </strong>Lionel TEIXIDOR: <a href="tel:+13115552368">06 10 94 13 54</a></li>
				</ul>	
			</address>
		</div>
	</div>
	<div class="row align-items-center" id="nous_rejoindre">
		<div class="col-4">
			<i class="far fa-file-pdf"></i>
			<h4>DOSSIER D'INSCRIPTION 2020</h4><br>
			<a type="button" class="btn btn-outline-warning" href="<?php echo base_url()?>assets/images/contact/pirates_form1.pdf" download="FORMULAIRE INSCRIPTION">TELECHARGER</a><br>
			<ul>
				<li><a href="<?php echo base_url()?>assets/images/contact/pirates_form2.pdf" download="AUTORISATION PARENTALE">AUTORISATION PARENTALE</a></li>
				<li><a href="<?php echo base_url()?>assets/images/contact/pirates_form3.pdf" download="QUESTIONNAIRE QS-SPORT">QUESTIONNAIRE "QS-SPORT"</a></li>
			</ul>
		</div>
		<div class="col-8 p-0">
			<img class="img-fluid" src="<?php echo base_url()?>assets/images/contact/pirates_contact_1.jpg" alt="Pirates_baseball_contact">
		</div>
	</div>
	<div class="row align-items-center p-0" id="nous_trouver">	
		<div class="col-sm">
			<h5><i class="fas fa-map-marker-alt"></i>LE TERRAIN</h5>
			<address>
				Plaine de jeux de Montfloures,<br>
				Traverse de Colombiers<br>
				34500 Béziers<br>
			</address>
		</div>
		<div class="col-sm">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1340.2771158194917!2d3.1867807824857706!3d43.33236005224276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa7c59117f6c3485!2sBaseball%20Club%20Biterrois-Pirates!5e0!3m2!1sfr!2sfr!4v1579331404932!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-map-marker-alt"></i>L'ASSOCIATION</h5>
			<address>
				Maison de la vie Associative,<br>
				Rue du Général Margueritte<br>
				34500 Béziers<br>
			</address>
		</div>
	</div>
	











</div>
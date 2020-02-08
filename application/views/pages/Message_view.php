<!-- ici Message_view -->
<div class="container" id="container_message">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row align-items-center mw-100 p-3 m-0" >
		<div class="col-12 p-3">
			<p>NOM : <?php echo $one_message->last_name?></p>
			<p>PRENOM : <?php echo $one_message->first_name;?></p>
			<p>EMAIL : <?php echo $one_message->email;?></p>
			<p>OBJET DU MESSAGE : <?php echo $one_message->subject_message;?></p>
			<p>MESSAGE : <?php echo $one_message->content_message;?></p>
		</div>
		<div class="row align-items-center" >
			<div class="col-12 p-3">
				<a class="btn btn-warning btn-lg" href="mailto:<?php echo $one_message->email;?>?subject=Réponse%20du%20club%20des%20Pirates%20%C3%A0%20votre%20demande.&body=Bonjour%20
				<?php echo $one_message->first_name;?>%20<?php echo $one_message->last_name?>,%0D%0A%0D%0AJe%20fais%20suite%20%C3%A0%20votre%20demande%20concernant%20'%20<?php echo $one_message->subject_message;?>%20'%0D%0A%0D%0ABien%20%C3%A0%20vous,%0D%0A%0D%0A%20LET'S%20GO%20PIRATES%20%21%20">REPONDRE</a>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>
		</div>
	</div>
</div>		
		
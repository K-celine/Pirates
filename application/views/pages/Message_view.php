<!-- ici Message_view -->
<div class="container" id="container_message">
	<div class="row align-items-center" >
		<div class="col-12 p-5">
			<p>NOM : <?php echo $one_message->last_name?></p>
			<p>PRENOM : <?php echo $one_message->first_name;?></p>
			<p>EMAIL : <?php echo $one_message->email;?></p>
			<p>OBJET DU MESSAGE : <?php echo $one_message->subject_message;?></p>
			<p>MESSAGE : <?php echo $one_message->content_message;?></p>
		</div>
		<div class="row align-items-center" >
			<div class="col-12 p-5">
				<a class="btn btn-warning btn-lg" href="mailto:<?php echo $one_message->email;?>">REPONDRE</a>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
		</div>
	</div>
</div>		
		
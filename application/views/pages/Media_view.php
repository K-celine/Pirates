<!-- ici Media View-->
<div class="container" id="container_media">
	<div class="row">
		<div class="col-12 p-5">
			<?php $attributes = array('id' => 'chat_form', 'class' => 'form_horizontal'); ?>

			<?php echo validation_errors("<p class = 'alert alert-danger'/p>"); ?>

			<?php echo form_open('pages/chat?task=write', $attributes); ?>
			<section class="chat">
				<div class="messages">
					<div class="message p-5">
						<span class="date"> <b>10:10</b></span>
						<span class="author"><b> Lior</b></span> :
						<span class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis incidunt eligendi voluptatibus culpa error dolores dicta velit impedit, nobis nulla. </span>
					</div>
				</div>
				<div class="user_inputs">
					<div class="form-group">
 						<?php echo form_label('AUTEUR');
 	
 						$data = array(
  							'class' => 'form-control form-control-lg',
  							'name' => 'author',
  							'id' => 'author',
  							'placeholder' => 'Pseudo');
						
						echo form_input($data); ?>
					</div>
					<div class="form-group">
 						<?php echo form_label('CONTENU');

 						$data = array(
  							'class' => 'form-control form-control-lg',
  							'name' => 'content',
  							'id'=> 'content',
  							'placeholder' =>'Votre texte ici !');

						echo form_textarea($data); ?>
					</div>
					<div class="form-group">
 						<?php 

 						$data = array(
  							'class' => 'btn btn-dark btn-lg',
  							'name' => 'submit', 
  							'value'=> 'ENVOYER');

  						echo form_submit($data); ?>
					</div>
				</div>
			</section>
				<?php echo form_close(); ?>
		</div>
	</div>
</div>














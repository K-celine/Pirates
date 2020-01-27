<!-- ici Admin_view-->
<div id="container_admin">
	<h2>Panneau d'Administration</h2>
	<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
			<h2>CREER ACTU</h2>
		</div>
		<div class="col-9">
			<?php $attributes = array('id' => 'actu_form', 'class' => 'form_horizontal'); ?>

			<!--<?php echo validation_errors("<p class='alert alert-danger'>"); ?>-->

			<?php echo form_open('users/admin' , $attributes);?>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('TITRE');

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'title',
					'value'=>set_value('title')
				);

				echo form_input($data); ?>

			</div>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('CONTENU');

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'content',
					'value'=>set_value('content')
				);

				echo form_textarea($data); ?>

			</div>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('CHARGER IMAGE');

				$data = array(
					'class' => 'form-control form-control-lg',
					'type'=> 'file',
					'name' => 'photo',
					'value'=>set_value('photo')
				);

				echo form_input($data);?>
		

			</div>
			<div class="form-group pr-5">
				
				<?php 
				echo form_label('DATE'); 

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'date',
					'type' => 'date',
					'value'=>set_value('date')
					
				); 

				echo form_input($data); ?>


			</div>
			
			<div class="form-group pr-5">
				
				<?php 

				$data = array(
					'class' => 'btn btn-dark btn-lg',
					'name' => 'submit',
					'value' => 'VALIDER'	
				);

				echo form_submit($data); ?>


			</div>


			<?php echo form_close();?>



		</div>
	</div>
</div>
<div class="row align-items-center p-5" id="admin_newsletter">
		<div class="col-3 pl-5">
			<h2>MODIFIER ACTU</h2>
		</div>
		<div class="col-9">
			<ul class="admin_actu">
				<li>TITRE</li>
				<li>CONTENU</li>
				<li>ACTION</li>
			</ul>
						<?php foreach($actus as $actu): ?>

			<ul class="admin_actu">
				<li><?php echo $actu->title; ?></li>
				<li><?php echo substr($actu->content,0, 20) ?>...</li>
				<li><a href="<?php echo base_url()?>users/admin_actu/<?php echo $actu->id;?>"><i class="fas fa-pen"></i> </a> <i class="fas fa-trash-alt"></i></li>
			</ul>
			<?php endforeach; ?>
			
		</div>
		
	</div>
		</div>
	</div>
</div>
<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
			<h2>CREER ADMIN</h2>
		</div>
		<div class="col-9">
			<?php $attributes = array('id' => 'actu_form', 'class' => 'form_horizontal'); ?>

			<!--<?php echo validation_errors("<p class='alert alert-danger'>"); ?>-->

			<?php echo form_open('users/admin' , $attributes);?>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('TITRE');

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'title',
					'value'=>set_value('title')
				);

				echo form_input($data); ?>

			</div>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('CONTENU');

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'content',
					'value'=>set_value('content')
				);

				echo form_input($data); ?>

			</div>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('CHARGER IMAGE');

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'photo',
					'value'=>set_value('photo')
				);


				echo form_input($data); ?>


			</div>
			<div class="form-group pr-5">
				
				<?php 
				echo form_label('DATE'); 

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'date',
					'value'=>set_value('date')
					
				); 

				echo form_input($data); ?>


			</div>
			
			<div class="form-group pr-5">
				
				<?php 

				$data = array(
					'class' => 'btn btn-dark btn-lg',
					'name' => 'submit',
					'value' => 'VALIDER'	
				);

				echo form_submit($data); ?>


			</div>


			<?php echo form_close();?>



		</div>
	</div>
</div>
		<div class="row align-items-center p-5" id="admin_newsletter">
		<div class="col-3 pl-5">
			<h2>GESTION NEWSLETTER</h2>
		</div>
		<div class="col-9">
			<ul class="admin_sub">
				<li>EMAIL INSCRIT</li>
				<li>IDENTIFIANT INSCRIT</li>
			</ul>
						<?php foreach($sub_newsletter as $subscribers): ?>

			<ul class="admin_sub">
				<li><?php echo $subscribers->email_subscribe; ?></li>
				<li><?php echo $subscribers->id; ?></li>
			</ul>
			<?php endforeach; ?>
			
		</div>
		
	</div>
	<div class="row">
		<div class="col-3 pl-5">
			</div>
		<div class="col-9 mb-5">
<a id="btn_sub_news" href="#">ENVOYER NEWSLETTER</a>
</div>
</div>
		</div>
	</div>
</div>
<div class="row align-items-center p-5" id="admin_newsletter">
		<div class="col-3 pl-5">
			<h2>GESTION DES MESSAGES </h2>
		</div>
		<div class="col-9">
			<ul class="admin_actu">
				<li>PRENOM</li>
				<li>NOM</li>
				<li>EMAIL</li>
				<li>SUJET</li>
				<!--<li>CONTENU</li>-->
				<li>ACTION</li>
			</ul>
						<?php foreach($messages as $message): ?>

			<ul class="admin_actu">
				<li><?php echo $message->first_name; ?></li>
				<li><?php echo $message->last_name; ?></li>
				<li><?php echo $message->email; ?></li>
				<li><?php echo substr($message->subject_message,0, 10); ?>...</li>
				<!--<li><?php echo substr($message->content_message,0, 10) ?>...</li>-->
				<li><i class="fas fa-glasses"></i> <i class="fas fa-reply"></i></li>
			</ul>
			<?php endforeach; ?>
			
		</div>
		
	</div>
		</div>
	</div>
</div>
<div class="row align-items-center p-5" id="admin_booking">
		<div class="col-3 pl-5">
			<h2>GESTION RESERVATION</h2>
		</div>
		<div class="col-9">
			<ul class="admin_book">
				<li>PSEUDO</li>
				<li>EMAIL</li>
				<li>MATCH</li>
				<li>NOMBRE DE PLACE</li>
			</ul>
						<?php foreach($list_book as $book): ?>

			<ul class="admin_book">
				<li><?php echo $book->id; ?></li>
				<li><?php echo $book->id; ?></li>
				<li><?php echo $book->id; ?></li>
				<li><?php echo $book->number_seat; ?></li>
			</ul>
			<?php endforeach; ?>
			
		</div>
		
	</div>
	<div class="row">
		<div class="col-3 pl-5">
			</div>
		<div class="col-9 mb-5">
<a id="btn_book" href="#">ENVOYER PLACE</a>
</div>
</div>
		</div>
	</div>




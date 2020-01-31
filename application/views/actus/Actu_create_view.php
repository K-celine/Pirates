<!-- ici Actu_create_view-->
<div id="container_create_actu">
	<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
			<h3><i class="far fa-plus-square"></i> CREER UNE NOUVELLE ACTU</h3>
		</div>
		<div class="col-9">
			<?php $attributes = array('id' => 'actu_form', 'class' => 'form_horizontal'); ?>

			<?php echo validation_errors("<p class='alert alert-danger'>"); ?>

			<?php echo form_open_multipart('actus/create_actu' , $attributes);?>

			<div class="form-group pr-5">
				<?php echo form_label('TITRE');

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'title',
				'value'=>set_value('title'));

				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('CONTENU');

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'content',
				'value'=>set_value('content'));

				echo form_textarea($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('CHARGER IMAGE');

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'photo');

				echo form_upload($data);?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('DATE'); 

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'date',
				'type' => 'date',
				'value'=>set_value('date')); 

				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php 

				$data = array(
				'class' => 'btn btn-dark btn-lg',
				'name' => 'submit',
				'value' => 'VALIDER');

				echo form_submit($data); ?>
			</div>
				<?php echo form_close();?>
			<div>
				<a class="btn btn-danger" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
		</div>
	</div>
</div>		
<!-- ici Actu_edit_view -->
<div id="container_admin_actu">
	<div class="row row align-items-center p-5">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h5><i class="fas fa-pen"></i> EDITION D'UNE ACTU</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
		<?php $attributes = array('id' => 'edit_actu_form', 'class' => 'form_horizontal'); ?>

		<?php echo validation_errors("<p class='alert alert-danger'>"); ?>

		<?php echo form_open('actus/edit_actu/'.$one_actu->id.'' , $attributes);?>
			<div class="form-group">
	
				<?php echo form_label('TITRE');

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'title',
				'value' => 	$one_actu->title); 

				echo form_input($data); ?>
			</div>
			<div class="form-group">
	
				<?php echo form_label('CONTENU');

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'content',
				'value' => $one_actu->content); 

				echo form_textarea($data); ?>
			</div>
			<div class="form-group">
	
				<?php echo form_label('DATE'); 

				$data = array(
				'class' => 'form-control form-control-lg',
				'name' => 'date',
				'type' => 'date',
				'value' => $one_actu->date); 

				echo form_input($data); ?>
			</div>
			<div class="form-group">
	
				<?php echo form_label('CHARGER IMAGE'); 

	 				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'photo',
					'type' =>'file',
					'value' => $one_actu->photo); 

					echo form_input($data); ?>
			</div>
			<div class="form-group">
	
				<?php $data = array(
					'class' => 'btn btn-warning btn-lg',
					'name' => 'submit',
					'value' => 'EDITER'); 

	 				echo form_submit($data); ?>
			</div>
				<?php echo form_close();?>
			<div>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>
		</div>
	</div>
</div>				


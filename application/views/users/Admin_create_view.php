<!-- ici Admin_create_view_view-->
<div id="container_create_admin">
	<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
			<h2><i class="fas fa-hand-peace"></i>CREATION D'UN ADMIN</h2>
		</div>
		<div class="col-9">
			<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>

			<?php echo validation_errors("<p class='alert alert-danger'>"); ?>

			<?php echo form_open('users/create_admin' , $attributes);?>

			<div class="form-group pr-5">
				
				<?php 

				echo form_label('Email');

				$data = array(
					'class' => 'form-control form-control-lg',
					'name' => 'email',
					'placeholder' => 'INSCRIRE email'
				);

				echo form_input($data); ?>

			</div>
			
			<div class="form-group pr-5">
				
				<?php 

				$data = array(
					'class' => 'btn btn-dark btn-lg',
					'name' => 'submit',
					'value' => 'CREER ADMIN'	
				);

				echo form_submit($data); ?>


			</div>


			<?php echo form_close();?>

<div>
				<a class="btn btn-danger" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	

		</div>
	</div>
</div>





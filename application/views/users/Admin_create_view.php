<!-- ici Admin_create_view-->
<div id="container_create_admin">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row mw-100 align-items-center p-5">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h5><i class="fas fa-user-shield"></i> CREATION D'UN NOUVEL ADMIN</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
			<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');
			echo validation_errors("<p class='alert alert-danger'>");
			echo form_open('users/create_admin' , $attributes);?>
			<div class="form-group pr-5">
				<?php echo form_label('EMAIL');
				$data = array('class' => 'form-control form-control-lg','name' => 'email','placeholder' => 'Inscrire email');
				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php $data = array('class' => 'btn btn-warning btn-lg','name' => 'submit','value' => 'CREER ADMIN'	);
				echo form_submit($data); ?>
			</div>
			<?php echo form_close();?>
			<div>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
		</div>
	</div>
</div>





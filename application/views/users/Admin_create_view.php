<!-- ici Admin_create_view-->
<div id="container_create_admin">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row mw-100 align-items-center mw-100 p-3 m-0">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h5><i class="fas fa-user-shield"></i> CREATION D'UN NOUVEL ADMIN</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
		    <p class="admin-fail">
		        <?php if($this->session->flashdata('admin_created_failed')):?>
		        <?php echo $this->session->flashdata('admin_created_failed');?>
	            <?php endif; ?>
	        </p>
			<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');
			echo validation_errors("<p class='alert alert-danger'>");
			echo form_open('users/create_admin' , $attributes);?>
			<div class="form-group">
				<?php echo form_label('EMAIL');
				$data = array('class' => 'form-control form-control-lg','name' => 'email','placeholder' => 'Inscrire email');
				echo form_input($data); ?>
			</div>
			<div class="form-group">
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





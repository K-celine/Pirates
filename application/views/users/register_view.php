<!-- ici Register_view-->
<div id="container_register">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row mw-100 align-items-center p-5">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h5><i class="fas fa-hand-peace"></i>CREATION D'UN COMPTE</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
			<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');
			echo validation_errors("<p class='alert alert-danger'>");
			echo form_open('users/register' , $attributes);?>
			<div class="form-group pr-5">
				<?php echo form_label('PRENOM');
				$data = array('class' => 'form-control form-control-lg','name' =>'first_name','placeholder'=> 'INSCRIRE PRENOM','value'=>set_value('first_name'));
				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">	
				<?php echo form_label('NOM');
				$data = array('class' => 'form-control form-control-lg','name' => 'last_name','placeholder' => 'INSCRIRE NOM','value'=>set_value('last_name'));
				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('EMAIL');
				$data = array('class' => 'form-control form-control-lg','name' => 'email','placeholder' => 'INSCRIRE EMAIL ','value'=>set_value('email'));
				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('PSEUDO'); 
				$data = array('class' => 'form-control form-control-lg','name' => 'username','placeholder' => 'INSCRIRE PSEUDO','value'=>set_value('username')); 
				echo form_input($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('MOT DE PASSE');
				$data = array('class' => 'form-control form-control-lg','name' => 'password','placeholder' => 'INSCRIRE MOT DE PASSE'); 
				echo form_password($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php echo form_label('CONFIRMER MOT DE PASSE'); 
				$data = array('class'=>'form-control form-control-lg','name'=>'confirm_password','placeholder'=>'INSCRIRE MOT DE PASSE');
				echo form_password($data); ?>
			</div>
			<div class="form-group form-check">
				<?php echo form_label('JE SOUHAITE RECEVOIR LA NEWSLETTER');
				$data = array('class' => 'form-check-input-newsletter','name' => 'news_subscribe','value'=> '1');
				echo form_checkbox($data); ?>
			</div>
			<div class="form-group pr-5">
				<?php $data = array('class' => 'btn btn-warning btn-lg','name' => 'submit','value' => 'DEVENIR MEMBRE'	);
				echo form_submit($data); ?>
			</div>
			<?php echo form_close();?>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>home/index">ANNULER</a>
		</div>
	</div>
</div>





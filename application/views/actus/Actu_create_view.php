<!-- ici Actu_create_view-->
<div id="container_create_actu">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row align-items-center m-0 mw-100 p-3">
		<div class="col-xl-3 col-lg-12">
			<h5><i class="fas fa-plus-circle"></i> CREATION D'UNE NOUVELLE ACTU</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
			<?php $attributes = array('id' => 'actu_form', 'class' => 'form_horizontal');
			echo validation_errors("<p class='alert alert-danger'>");
			echo form_open_multipart('actus/create_actu' , $attributes);?>
			<div class="form-group">
				<?php echo form_label('TITRE');
				$data = array('class' => 'form-control form-control-lg','name' =>'title','value'=>set_value('title'));
				echo form_input($data); ?>
			</div>
			<div class="form-group">
				<?php echo form_label('CONTENU');
				$data = array('class' => 'form-control form-control-lg','name' =>'content','value'=>set_value('content'));
				echo form_textarea($data); ?>
			</div>
			<div class="form-group">
				<?php echo form_label('DATE'); 
				$data = array('class' => 'form-control form-control-lg','name' =>'date','type' =>'date', 'required pattern'=>'[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])', 'placeholder'=>'AAAA-MM-JJ','value'=>set_value('date')); 
				echo form_input($data); ?>
			</div>
			<div class="form-group">
				<?php echo form_label('CHARGER IMAGE');
				$data = array('class' => 'form-control form-control-lg','name' => 'photo','required'=>'required');
				echo form_upload($data);?>
			</div>
			<div class="form-group">
				<?php $data = array('class' => 'btn btn-warning btn-lg','name' => 'submit','value' => 'CREER');
				echo form_submit($data); ?>
			</div>
			<?php echo form_close();?>
			<div>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
		</div>
	</div>
</div>		
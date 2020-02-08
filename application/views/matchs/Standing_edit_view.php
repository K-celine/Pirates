<!-- ici Standing_edit_view -->
<div id="container_edit_stand">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row align-items-center m-0 mw-100 p-3">
		<div class="col-xl-3 col-lg-12">
			<h5><i class="fas fa-pen"></i> EDITION DU CLASSEMENT</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
			<?php $attributes = array('id' => 'edit_actu_form', 'class' => 'form_horizontal');
			echo validation_errors("<p class='alert alert-danger'>");
			echo form_open('matchs/edit_standing/'.$one_stand->id.'' , $attributes);?>
			<div class="form-group">
				<?php echo form_label('EQUIPE'); 
				$data = array('class' => 'form-control form-control-lg','name' => 'team','value' => 	$one_stand->team); 
				echo form_input($data); ?>
			</div>
			<div class="form-group">
				<?php echo form_label('GAGNE');
				$data = array('class' => 'form-control form-control-lg','name' => 'win','value' => $one_stand->win); 
				echo form_input($data); ?>
			</div>
			<div class="form-group">
				<?php echo form_label('PERDU'); 
				$data = array('class' => 'form-control form-control-lg','name' => 'lose','value' => $one_stand->lose); 
				echo form_input($data); ?>
			</div>
			<div class="form-group">
				<?php echo form_label('POINTS'); 
				$data = array('class' => 'form-control form-control-lg','name' => 'points','value' => $one_stand->points); 
				echo form_input($data); ?>
			</div>
			<div class="form-group">
				<?php $data = array('class' => 'btn btn-warning btn-lg','name' => 'submit','value' => 'EDITER'); 
				echo form_submit($data); ?>
			</div>
			<?php echo form_close();?>
			<div>
				<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
		</div>
	</div>
</div>


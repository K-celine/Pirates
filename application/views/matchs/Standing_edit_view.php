<!-- ici Standing_edit_view -->
<div id="container_edit_stand">
	<div class="row row align-items-center p-5">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h5><i class="fas fa-pen"></i> EDITION DU CLASSEMENT</h5>
		</div>
		<div class="col-xl-9 col-lg-12">
<?php $attributes = array('id' => 'edit_actu_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='alert alert-danger'>"); ?>

<?php echo form_open('matchs/edit_standing/'.$one_stand->id.'' , $attributes);?>

<div class="form-group">
	
	<?php echo form_label('EQUIPE'); ?>

	<?php $data = array(
		'class' => 'form-control form-control-lg',
		'name' => 'team',
		'value' => 	$one_stand->team
	); ?>


	<?php echo form_input($data); ?>


</div>

<div class="form-group">
	
	<?php echo form_label('GAGNE'); ?>

	<?php $data = array(
		'class' => 'form-control form-control-lg',
		'name' => 'win',
		'value' => $one_stand->win
	
	); ?>


	<?php echo form_input($data); ?>


</div>
<div class="form-group">
	
	<?php echo form_label('PERDU'); ?>

	<?php $data = array(
		'class' => 'form-control form-control-lg',
		'name' => 'lose',
		'value' => $one_stand->lose
	
	); ?>


	<?php echo form_input($data); ?>


</div>
<div class="form-group">
	
	<?php echo form_label('POINTS'); ?>

	<?php $data = array(
		'class' => 'form-control form-control-lg',
		'name' => 'points',
		'value' => $one_stand->points
	
	); ?>


	<?php echo form_input($data); ?>


</div>

<div class="form-group">
	
	<?php $data = array(
		'class' => 'btn btn-warning btn-lg',
		'name' => 'submit',
		'value' => 'EDITER'	
	); ?>

	<?php echo form_submit($data); ?>


</div>

<?php echo form_close();?>
<div>

		<a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
</div>
</div>
</div>


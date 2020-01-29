<!-- ici Actu_edit_view -->
<div id="container_admin_actu">

<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
<h3><i class="fas fa-pen"></i> MODIFIER UNE ACTU</h3>
</div>
<div class="col-9">
<?php $attributes = array('id' => 'edit_actu_form', 'class' => 'form_horizontal'); ?>

<!--<?php echo validation_errors("<p class='alert alert-danger'>"); ?>-->

<?php echo form_open('actus/edit_actu/'.$one_actu->id.'' , $attributes);?>

<div class="form-group">
	
	<?php echo form_label('TITRE'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'title',
		'value' => 	$one_actu->title
	); ?>


	<?php echo form_input($data); ?>


</div>

<div class="form-group">
	
	<?php echo form_label('CONTENU'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'content',
		'value' => $one_actu->content
	
	); ?>


	<?php echo form_textarea($data); ?>


</div>

<div class="form-group">
	
	<?php echo form_label('DATE'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'date',
		'type' => 'date',
		'value' => $one_actu->date
	
	); ?>


	<?php echo form_input($data); ?>


</div>
<div class="form-group">
	
	<?php echo form_label('CONTENU'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'photo',
		'type' =>'file',
		'value' => $one_actu->photo
	
	); ?>


	<?php echo form_input($data); ?>


</div>

<div class="form-group">
	
	<?php $data = array(
		'class' => 'btn btn-warning',
		'name' => 'submit',
		'value' => 'Edit'	
	); ?>

	<?php echo form_submit($data); ?>


</div>

<?php echo form_close();?>
<div>

		<a class="btn btn-danger" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	
</div>
</div>
</div>


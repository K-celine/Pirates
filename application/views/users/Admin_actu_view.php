<!-- ici Admin_actu_view -->
<div id="container_admin_actu">

<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
<h2>Modifier Actu</h2>
</div>
<div class="col-9">
<?php $attributes = array('id' => 'edit_form', 'class' => 'form_horizontal'); ?>

<!--<?php echo validation_errors("<p class='alert alert-danger'>"); ?>-->

<?php echo form_open('users/admin_actu/'.$one_actu->id.'' , $attributes);?>

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
		'name' => 'content',
		'type' => 'date',
		'value' => $one_actu->date
	
	); ?>


	<?php echo form_input($data); ?>


</div>
<div class="form-group">
	
	<?php echo form_label('CONTENU'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'content',
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

</div>
</div>
</div>


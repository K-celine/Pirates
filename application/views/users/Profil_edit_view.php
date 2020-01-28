<!-- ici Edit-profil_view -->
<div class="container" id="container_edit_admin">
  <div class="row align-items-center" >
    <div class="col-12 p-5">
      <p>NOM : <?php echo $one_admin->last_name?></p>
      <p>PRENOM : <?php echo $one_admin->first_name;?></p>
      <p>EMAIL : <?php echo $one_admin->email;?></p>
      <p>PSEUDO : <?php echo $one_admin->username;?></p>
      <?php $attributes = array('id' => 'edit_profil_form', 'class' => 'form_horizontal'); ?>

      <?php echo validation_errors("<p class='alert alert-danger'>"); ?>

      <?php echo form_open('users/edit_admin' , $attributes);?>
<div class="form-group form-check">
        
        <?php 

        echo form_label('Transformer cet admin en user');

        $data = array(
          'class' => 'form-check-input',
          'name' => 'role',
          'value'=> '0'
        );


        echo form_checkbox($data); ?>
      </div>
      <div class="form-group pr-5">
        
        <?php 

        $data = array(
          'class' => 'btn btn-warning btn-lg',
          'name' => 'submit',
          'value' => 'TRANSFORMER' 
        );

        echo form_submit($data); ?>


      </div>


      <?php echo form_close();?>

    <div class="row align-items-center" >
      <div class="col-12 p-5">
        <a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
      </div>  
    </div>
  </div>
</div>    
  
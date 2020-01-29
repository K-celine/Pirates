<!-- ici Match_edit_view -->
<div id="container_edit_match">
	<div class="row row align-items-center p-5">
		<div class="col-3 pl-5">
			<h3><i class="far fa-plus-square"></i> CREER UN NOUVEAU MATCH</h3>
		</div>
		<div class="col-9">
<form method="post" action="<?php echo base_url();?>matchs/edit_match/<?php echo $one_match->id;?>">
  <div class="form-group">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">DATE ET HEURE </label>
  </div>

<input type="datetime-local" name="match_datetime"
       value="<?php echo $one_match->match_datetime;?>" min="2020-01-01T11:00" max="2021-12-31T14:00">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">TEAM HOME</label>
  </div>
  <select name="name_home" class="custom-select" id="inputGroupSelect01">
    <option value="<?php echo $one_match->name_home;?>"selected><?php echo $one_match->name_home;?></option>
    <option value="Pirates">Pirates</option>
    <option value="Barracudas">Barracudas</option>
    <option value="BlueJays">BlueJays</option>
    <option value="Cards">Cards</option>
    <option value="Renards">Renards</option>
    <option value="Tigers">Tigers</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">TEAM VISITOR</label>
  </div>
  <select  name="name_visitor"class="custom-select" id="inputGroupSelect01">
     <option value="<?php echo $one_match->name_visitor;?>"selected><?php echo $one_match->name_visitor;?></option>
    <option value="Pirates">Pirates</option>
    <option value="Barracudas">Barracudas</option>
    <option value="BlueJays">BlueJays</option>
    <option value="Cards">Cards</option>
    <option value="Renards">Renards</option>
    <option value="Tigers">Tigers</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">LOGO HOME</label>
  </div>
  <select name="image_home" class="custom-select" id="inputGroupSelect01">
    <option value="<?php echo $one_match->image_home;?>"selected><?php echo $one_match->name_home;?></option>
   	<option value="assets/images/home/logos/Pirates.png">Pirates</option>
    <option value="assets/images/home/logos/Barracudas.png">Barracudas</option>
    <option value="assets/images/home/logos/BlueJays.png">BlueJays</option>
    <option value="assets/images/home/logos/Cards.png">Cards</option>
    <option value="assets/images/home/logos/Renards.png">Renards</option>
    <option value="assets/images/home/logos/Tigers.png">Tigers</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">LOGO VISITOR</label>
  </div>
  <select name="image_visitor" class="custom-select" id="inputGroupSelect01">
       <option value="<?php echo $one_match->image_visitor;?>"selected><?php echo $one_match->name_visitor;?></option>
   <option value="assets/images/home/logos/Pirates.png">Pirates</option>
    <option value="assets/images/home/logos/Barracudas.png">Barracudas</option>
    <option value="assets/images/home/logos/BlueJays.png">BlueJays</option>
    <option value="assets/images/home/logos/Cards.png">Cards</option>
    <option value="assets/images/home/logos/Renards.png">Renards</option>
    <option value="assets/images/home/logos/Tigers.png">Tigers</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">SCORE HOME</label>
  </div>
    <input value="<?php echo $one_match->score_home;?>" type="number" id="score_home" name="score_home"
       min="0" max="25">
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">SCORE VISITOR</label>
  </div>
   <input value="<?php echo $one_match->score_visitor;?>" type="number" id="score_visitor" name="score_visitor"
       min="0" max="25">
</div><div class="form-group pr-5">
				<?php 

					$data = array(
						'class' => 'btn btn-dark btn-lg',
						'name' => 'submit',
						'value' => 'VALIDER');

					echo form_submit($data); ?>
			</div>
		</div>
	</form>
<div>
				<a class="btn btn-danger" href="<?php echo base_url()?>users/admin">ANNULER</a>
			</div>	

			</div>
		</div>
	</div>

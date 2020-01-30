<!-- ici Match_view -->
<div class="container mw-100" id="container_match">
	<div class="row">
		<div class="col-12 p-0">
			<img class="img-fluid" src="<?php echo base_url()?>assets/images/match/pirates_match.jpg" alt="Pirates_baseball_seats">
		</div>
	</div>
	<div class="row align-items-center" id="booking">
		<div class="col-3">
			<h5>RESERVATION</h5>
		</div>
		<div class="col-9"id="seat_form">
			<form method="post" action="<?php echo base_url();?>matchs/booking" target=_blank>
				<div class="form-group" >
    				<label for="choice_matchs">MATCHS : </label>
    				<select multiple class="form-control form-control-lg" name="match_id" id="choice_matchs">
    					<?php foreach($matchs as $match): ?>
      					<option value="<?php echo $match->id; ?>">
      						Match du <?php echo date('d/m/Y H:i', strtotime($match->match_datetime)); ?> : 
      						<?php echo $match->name_home; ?> VS <?php echo $match->name_visitor; ?> 
      						</option>
      					<?php endforeach; ?>

    				</select>
    				<label for="seats">NOMBRE DE PLACES : </label>
    				<select name="number_seat" class="form-control form-control-lg" id="seats">
      					<option>1</option>
     					<option>2</option>
      					<option>3</option>
      					<option>4</option>
      					<option>5</option>
      					<option>6</option>
      					<option>7</option>
      					<option>8</option>
      					<option>9</option>
      					<option>10</option>
      				</select>
  				</div>
  				<button type="submit" class="btn" id="btn_booking">RESERVER</button>
			</form>
		</div>
	</div>
	<div class="row align-items-center p-0" id="resultats">	
		<div class="col-12">
			<span> RESULTATS </span>
		</div>
	</div>
	<div class="row">
		<div class="col-12" id="scores" >
			<ul id="score_titre">
				<li>DATE  ET  HEURE</li>
				<li>TEAM 1</li>
				<li>SCORE 1</li>
				<li>TEAM 2</li>
				<li>SCORE 2</li>
			</ul>
			<?php foreach($scores as $score): ?>
			<ul id="score">
				<li><?php echo date('d/m/Y H:i', strtotime($score->match_datetime)); ?></li>
				<li><?php echo $score->name_home ?><img id="logo" src="<?php echo base_url()?><?php echo $score->image_home; ?>" alt="" style="width:7rem"/></li>
				<li><?php echo $score->score_home ?></li>
				<li><?php echo $score->name_visitor ?><img id="logo" src="<?php echo base_url()?><?php echo $score->image_visitor; ?>" alt="" style="width:7rem"/></li>
				<li><?php echo $score->score_visitor ?></li>
			</ul>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="row align-items-center" id="standing">
		<div class="col-3">
			<h5>CLASSEMENT</h5>
		</div>
		<div class="col-9" >
			<ul id="standing_titre">
				<li>TEAM</li>
				<li>WIN</li>
				<li>LOSE</li>
				<li>POINTS</li>
			</ul>
			<?php foreach($standing as $top): ?>
			<ul id="stand">
				<li><?php echo $top->team ?></li>
				<li><?php echo $top->win ?></li>
				<li><?php echo $top->lose ?></li>
				<li><?php echo $top->points ?></li>
			</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>	
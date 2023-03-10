<!-- ici Match_view -->
<div class="container mw-100" id="container_match">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row">
		<div class="col-12 p-0">
			<img class="img-fluid" src="<?php echo base_url()?>assets/images/match/pirates_match.jpg" alt="Pirates_baseball_seats">
		</div>
	</div>
	<div class="row align-items-center" id="booking">
		<div class="col-xl-3 col-lg-12">
			<h5>RESERVATION</h5>
		</div>
		<div class="col-xl-9 col-lg-12" id="seat_form">
			<form method="post" action="<?php echo base_url();?>matchs/booking" target=_blank>
				<div class="form-group" >
					<label for="choice_matchs">MATCHS : </label>
					<select multiple class="form-control form-control-lg" name="match_id" id="choice_matchs" required>
						<?php foreach($matchs as $match): ?>
							<option value="<?php echo $match->id; ?>">
								Match du <?php echo date('d/m/Y H:i', strtotime($match->match_datetime)); ?> : 
								<?php echo $match->name_home; ?> VS <?php echo $match->name_visitor; ?> 
							</option>
						<?php endforeach; ?>
					</select>
					<label for="seats">NOMBRE DE PLACES : </label>
					<select name="number_seat" class="form-control form-control-lg" id="seats" required>
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
		<div class=" col-12 table-responsive" id="scores">
			<table class="table table-hover table-dark">
				<thead>
					<tr id="titre_score">
						<th scope="col">DATE </th>
						<th scope="col">TEAM</th>
						<th class="smart_score" scope="col">LOGO</th>
						<th scope="col">SCORE</th>
						<th scope="col">TEAM</th>
						<th class="smart_score" scope="col">LOGO</th>
						<th scope="col">SCORE</th>
					</tr>
				</thead>
				<tbody id="content_score">
					<?php foreach($scores as $score): ?>
						<tr>
							<td><?php echo date('d/m/Y H:i', strtotime($score->match_datetime));?></td>
							<td><?php echo $score->name_home;?></td>
							<td class="smart_score"><img class="logo_result" src="<?php echo base_url()?><?php echo $score->image_home; ?>" alt="image_home" style="width:5rem"/></td>
							<td><?php echo  $score->score_home;?></td>
							<td><?php echo $score->name_visitor;?></td>
							<td class="smart_score"><img class="logo_result" src="<?php echo base_url()?><?php echo $score->image_visitor; ?>" alt="image_visitor" style="width:5rem"/></td>
							<td><?php echo $score->score_visitor;?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row align-items-center" id="standing">
		<div class="col-xl-3 col-lg-12">
			<h5>CLASSEMENT</h5>
		</div>
		<div class="col-xl-9 col-lg-12 table-responsive" >
			<table class="table table-hover">
				<thead>
					<tr id="titre_standing">
						<th scope="col">TEAM</th>
						<th scope="col">WIN</th>
						<th scope="col">LOSE</th>
						<th scope="col">POINTS</th>
					</tr>
				</thead>
				<tbody id="content_standing">
					<?php foreach($standing as $top): ?>
						<tr>
							<td><?php echo $top->team ?></td>
							<td><?php echo $top->win ?></td>
							<td><?php echo $top->lose ?></td>
							<td><?php echo $top->points ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>	
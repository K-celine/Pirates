<!-- ici Home_view--> 
<div id="carousel_home" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active" id="carousel_item_1">
			<img src="<?php echo base_url()?>assets/images/home/pirates_home_slide1.jpg" class="d-block w-100" alt="pirates_home_slide1">
			<div class="carousel-caption d-none d-md-block">
<p class="success">
	<?php if($this->session->flashdata('newsletter_subscribed')):?>
		<?php echo 	$this->session->flashdata('newsletter_subscribed');?>
	<?php endif; ?>
</p>
				<h4>BIENVENUE CHEZ LES PIRATES</h4>
				<p><img src="<?php echo base_url()?>assets/images/home/pirates_home_logo1.png" alt="pirates_home_logo1" style="width:30rem"></p>

			</div>
		</div>
		<div class="carousel-item" id="carousel_item_2">
			<img src="<?php echo base_url()?>assets/images/home/pirates_home_slide2.jpg" class="d-block w-100" alt="pirates_home_slide2">
			<div class="carousel-caption d-none d-md-block">
				<p><a type="button" class="btn" href="<?php echo base_url();?>#prochains_matchs"><strong>VOIR LES PROCHAINS MATCHS</strong></a></p><br>
				<p> <img src="<?php echo base_url()?>assets/images/home/pirates_home_logo2.png" alt="pirates_home_logo2" style="width:45rem"></p>
			</div>
		</div>
		<div class="carousel-item" id="carousel_item_3">
			<img src="<?php echo base_url()?>assets/images/home/pirates_home_slide3.jpg" class="d-block w-100" alt="pirates_home_slide3">
			<div class="carousel-caption d-none d-md-block">
				<h4>12U : CHAMPION D'OCCITANIE 2019</h4>
				<h4>SOFTBALL FEMININ : CHAMPIONNE D'OCCITANIE 2019</h4>
				<p><img src="<?php echo base_url()?>assets/images/home/pirates_home_logo1.png" alt="pirates_home_logo1" style="width:30rem"></p>
				<p><a type="button" class="btn" href="<?php echo base_url();?>pages/club/#palmares"><strong>VOIR LE PALMARES</strong></a></p>
			</div>
		</div> 
	</div>
</div>
<div class="row align-items-center">
	<div class="col-12" id="buttons_home">
		<a href="<?php echo base_url();?>">RESERVER UNE PLACE</a>
		<a href="<?php echo base_url();?>">VOIR LES RESULTATS</a>
		<a href="<?php echo base_url();?>">VOIR LE CLASSEMENT</a>
	</div>
</div>
<div class="container mw-100" id="container_home">
	<div class="row">
		<div class="col-4" id="prochains_matchs">
			<div class="mx-auto">
				<h2>PROCHAINS MATCHS</h2><br>
				<span>HOME</span>
				<span>VISITOR</span><br>
				<div id="mat">
				<div id="home">
				<?php foreach($matchs_home as $match_home): ?>
				<img id="logo_home" src="<?php echo base_url()?><?php echo $match_home->image_logo; ?>" alt="" style="width:15rem"/>
				<strong>VS</strong>
				<?php endforeach; ?>
</div>
<div id="visitor">
				<?php foreach($matchs_visitor as $match_visitor): ?>
				<img id="logo_home" src="<?php echo base_url()?><?php echo $match_visitor->image_logo; ?>" alt="" style="width:15rem"/>
				<p><?php echo $match_visitor->match_datetime; ?>
				<br>
				<?php endforeach; ?></div>
			</div>
			</div>	
		</div>
		<div class="col-8 p-5" id="actus">
			<h2 class="pb-3">ACTUS</h2>
			<?php foreach($actus as $actu): ?>
			<div class="row mb-5">
				<div class="col-4" id="img_actu">
					<img class="img_actu" src="<?php echo base_url()?><?php echo $actu->photo; ?>" alt="<?php echo $actu->photo;?>" style="width:30rem"/>
				</div>
				<div class="col-8" id="content_actu">
					<h4 class="pl-3"><i class="far fa-newspaper"></i> <?php echo $actu->title; ?></h4>
					<p class="p-3"> <?php echo $actu->content; ?></p>
					<p class="pl-3"><small><?php echo $actu->date; ?></small></p>	
				</div>
			</div>					
			<?php endforeach; ?>
		</div>
	</div>
</div>

<!--<?php if(isset($projects)):?>
	
	<h1>Projects</h1>

	<table class="table table-hover table-bordered">
		<thead class=''>
			<tr>
				<th>
					Project Name
				</th>
				<th>
					Project Description
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($projects as $project): ?>
				<tr>
					<td> <?php echo $project->project_name; ?> </td>
					<td> <?php echo $project->project_body; ?> </td>
					<td><a href=" <?php echo base_url(); ?>projects/display/<?php echo $project->id;?>">View</a></td>
				</tr>				
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
<?php if(isset($tasks)):?>

	<h1>Tasks</h1>
	<table class="table table-hover table-bordered">
		<thead class=''>
			<tr>
				<th>
					Task Name
				</th>
				<th>
					Task Description
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($tasks as $task): ?>
				<tr>
					<td> <?php echo $task->task_name; ?> </td>
					<td> <?php echo $task->task_body; ?> </td>
					<td><a href=" <?php echo base_url(); ?>tasks/display/<?php echo $task->id;?>">View</a></td>
				</tr>				
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
<p class="alert-success">
	<?php if($this->session->flashdata('login_success')):?>
		<?php echo 	$this->session->flashdata('login_success');?>
	<?php endif; ?>
	<?php if($this->session->flashdata('user_registered')):?>
		<?php echo 	$this->session->flashdata('user_registered');?>
	<?php endif; ?>
</p>
<p class="alert-danger">
	<?php if($this->session->flashdata('login_failed')):?>
		<?php echo 	$this->session->flashdata('login_failed');?>
	<?php endif;?>
	<?php if($this->session->flashdata('no_access')):?>
		<?php echo 	$this->session->flashdata('no_access');?>
	<?php endif; ?>
</p>-->

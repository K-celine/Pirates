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
	<?php if($this->session->flashdata('message_sent')):?>
		<?php echo 	$this->session->flashdata('message_sent');?>
	<?php endif; ?>
	<?php if($this->session->flashdata('user_registered')):?>
		<?php echo 	$this->session->flashdata('user_registered');?>
	<?php endif; ?>
	<?php if($this->session->flashdata('login_success')):?>
		<?php echo 	$this->session->flashdata('login_success');?>
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
		<a href="<?php echo base_url();?>match/infos/#booking">RESERVER UNE PLACE</a>
		<a href="<?php echo base_url();?>match/infos/#resultats">VOIR LES RESULTATS</a>
		<a href="<?php echo base_url();?>match/infos/#standing">VOIR LE CLASSEMENT</a>
	</div>
</div>
<div class="container mw-100" id="container_home">
	<div class="row">
		<div class="col-4" id="prochains_matchs">
			<div class="mx-auto">
				<h2>PROCHAINS MATCHS</h2><br>
				<span>HOME</span>
				<span>VISITOR</span><br>
				<?php foreach($matchs as $match): ?>
				<p><?php echo date('d/m/Y H:i', strtotime($match->match_datetime)); ?></p>	
				<img id="logo" src="<?php echo base_url()?><?php echo $match->image_home; ?>" alt="" style="width:15rem"/>
				<strong>VS</strong>
				<img id="logo" src="<?php echo base_url()?><?php echo $match->image_visitor; ?>" alt="" style="width:15rem"/>
				
				<?php endforeach; ?>
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
					<p class="p-3"> <?php echo substr($actu->content,0, 100) ?>...</p>
					<p class="pl-3"><a id="savoir_plus" href="<?php echo base_url()?>home/actu/<?php echo $actu->id; ?> "><small><em>en savoir <i class="fas fa-plus"></i></em> </small></a></p>
					<p class="pl-3"><small><?php echo date('d/m/Y', strtotime($actu->date)) ; ?></small></p>	
				</div>
			</div>					
			<?php endforeach; ?>
		</div>
	</div>
</div>


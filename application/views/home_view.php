<!-- ici Home_view--> 
<div id="container_home_view" class="container mw-100 p-0">
	<div class="row">
		<div class="col">
			<div id="carousel_home" class="carousel slide " data-ride="carousel">
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
								<?php if($this->session->flashdata('loggin_ok')): ?>
									<?php echo $this->session->flashdata('loggin_ok');?> 
								<?php endif; ?>
							</p>
							<p class="fail">
								<?php if($this->session->flashdata('newsletter_failed')):?>
									<?php echo 	$this->session->flashdata('newsletter_failed');?>
								<?php endif; ?>
								<?php if($this->session->flashdata('loggin_failed')):?>
									<?php echo 	$this->session->flashdata('loggin_failed');?>
								<?php endif; ?>
								<?php if($this->session->flashdata('registration_failed')):?>
									<?php echo 	$this->session->flashdata('registration_failed');?>
								<?php endif; ?>
								<?php if($this->session->flashdata('booking_failed')):?>
									<?php echo 	$this->session->flashdata('booking_failed');?>
								<?php endif; ?>
								<?php if($this->session->flashdata('booking_failed2')):?>
									<?php echo 	$this->session->flashdata('booking_failed2');?>
								<?php endif; ?>
							</p>
							<h5>BIENVENUE CHEZ LES PIRATES</h5>
							<p><img src="<?php echo base_url()?>assets/images/home/pirates_home_logo1.png" alt="pirates_home_logo1" style="width:30rem"></p>
						</div>
					</div>
					<div class="carousel-item" id="carousel_item_2">
						<img src="<?php echo base_url()?>assets/images/home/pirates_home_slide2.jpg" class="d-block w-100" alt="pirates_home_slide2">
						<div class="carousel-caption d-none d-md-block">
							<p><a type="button" class="btn" href="<?php echo base_url();?>#prochains_matchs"><strong>VOIR LES PROCHAINS MATCHS</strong></a></p><br>
							<p><img src="<?php echo base_url()?>assets/images/home/pirates_home_logo2.png" alt="pirates_home_logo2" style="width:45rem"></p>
						</div>
					</div>
					<div class="carousel-item" id="carousel_item_3">
						<img src="<?php echo base_url()?>assets/images/home/pirates_home_slide3.jpg" class="d-block w-100" alt="pirates_home_slide3">
						<div class="carousel-caption d-none d-md-block">
							<h5>12U : CHAMPION D'OCCITANIE 2019</h5>
							<h5>SOFTBALL FEMININ : CHAMPIONNE D'OCCITANIE 2019</h5>
							<p><img src="<?php echo base_url()?>assets/images/home/pirates_home_logo1.png" alt="pirates_home_logo1" style="width:30rem"></p>
							<p><a type="button" class="btn" href="<?php echo base_url();?>pages/club/#palmares"><strong>VOIR LE PALMARES</strong></a></p>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>	
	<div class="row align-items-center">
		<div class="col-xl-12" id="buttons_home">
			<a class="btn_home" href="<?php echo base_url();?>matchs/infos/#booking">RESERVER UNE PLACE</a>
			<a class="btn_home_tab" href="<?php echo base_url();?>matchs/infos/#booking"><i class="fas fa-ticket-alt"></i><small>RESERVATION</small></a>
			<a class="btn_home_smart" href="<?php echo base_url();?>matchs/infos/#booking"><abbr title="Reserver une place"><i class="fas fa-ticket-alt"></i></abbr></a>
			<a class="btn_home" href="<?php echo base_url();?>matchs/infos/#resultats">VOIR LES RESULTATS</a>
			<a class="btn_home_tab" href="<?php echo base_url();?>matchs/infos/#resultats"><i class="fas fa-medal"></i><small>RESULTATS</small></a>
			<a class="btn_home_smart" href="<?php echo base_url();?>matchs/infos/#resultats"><abbr title="Voir les résultats"><i class="fas fa-medal"></i></abbr></a>
			<a class="btn_home" href="<?php echo base_url();?>matchs/infos/#standing">VOIR LE CLASSEMENT</a>
			<a class="btn_home_tab" href="<?php echo base_url();?>matchs/infos/#standing"><i class="fas fa-trophy"></i><small>CLASSEMENT</small></a>
			<a class="btn_home_smart" href="<?php echo base_url();?>matchs/infos/#standing"><abbr title="Voir le classement"><i class="fas fa-trophy"></i></abbr></a>
		</div>
	</div>
	<div class="row align-items-center home_img_tablette">
		<div class="col-xl-12">
			<img class="img-fluid mw-100" src="<?php echo base_url()?>assets/images/home/pirates_home_slide1.jpg" alt="Pirates_baseball_home">
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
				<?php if($this->session->flashdata('loggin_ok')): ?>
					<?php echo $this->session->flashdata('loggin_ok');?> 
				<?php endif; ?>
			</p>
			<p class="fail">
				<?php if($this->session->flashdata('newsletter_failed')):?>
					<?php echo 	$this->session->flashdata('newsletter_failed');?>
				<?php endif; ?>
				<?php if($this->session->flashdata('loggin_failed')):?>
					<?php echo 	$this->session->flashdata('loggin_failed');?>
				<?php endif; ?>
				<?php if($this->session->flashdata('registration_failed')):?>
					<?php echo 	$this->session->flashdata('registration_failed');?>
				<?php endif; ?>
				<?php if($this->session->flashdata('booking_failed')):?>
					<?php echo 	$this->session->flashdata('booking_failed');?>
				<?php endif; ?>
				<?php if($this->session->flashdata('booking_failed2')):?>
					<?php echo 	$this->session->flashdata('booking_failed2');?>
				<?php endif; ?>
			</p>	
		</div>
	</div>
	<div class="row" id="container_home">
		<div class="col-xl-4 col-lg-12" id="prochains_matchs">
			<div class="mx-auto">
				<h6>PROCHAINS MATCHS</h6><br>
				<div class="row p-5">
					<div class="col">
						<span>HOME</span>
					</div>
					<div class="col">
						<span>VISITOR</span>
					</div>
				</div>
				<?php foreach($matchs as $match): ?>
					<p><?php echo date('d/m/Y H:i', strtotime($match->match_datetime)); ?></p>	
					<img id="logo" src="<?php echo base_url()?><?php echo $match->image_home; ?>" alt="" style="width:30%"/>
					<strong>VS</strong>
					<img id="logo" src="<?php echo base_url()?><?php echo $match->image_visitor; ?>" alt="" style="width:30%"/>
				<?php endforeach; ?>
			</div>	
		</div>
		<div class="col-xl-8 col-lg-12 p-5 mw-100" id="actus">
			<h2 class="pb-3">ACTUS</h2>
			<?php foreach($actus as $actu): ?>
				<div class="row mb-5">
					<div class="col-4" id="img_actu">
						<img class="img_actu" src="<?php echo base_url()?>assets/images/actu/<?php echo $actu->photo; ?>" alt="<?php echo $actu->photo;?>" style="width:100%"/>
					</div>
					<div class="col-8" id="content_actu">
						<h5 class="pl-3"><i class="far fa-newspaper"></i> <?php echo $actu->title; ?></h5>
						<p class="p-3"> <?php echo substr($actu->content,0, 100) ?>...</p>
						<p class="pl-3"><a id="savoir_plus" href="<?php echo base_url()?>home/actu/<?php echo $actu->id; ?> "><small><em>en savoir plus...</em> </small></a></p>
						<p class="pl-3"><small><?php echo date('d/m/Y', strtotime($actu->date)) ; ?></small></p>	
					</div>
				</div>					
			<?php endforeach; ?>
		</div>
	</div>
</div>


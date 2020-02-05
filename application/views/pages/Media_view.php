<!-- ici Media View-->

<div class="container mw-100" id="container_media">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<h4 id="galerie">GALERIE</h4>
	<div class="row align-items-center">
		<div class="col-12 p-5">
			<div class="grid">
				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/pirates_logo1.jpg" />
				</div>
				<div class="grid-item">
					<img class="mw-100" src="<?php echo base_url()?>assets/images/media/gallery/1.jpg" />
				</div>
				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/media/gallery/2.jpg" />

				</div>
				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/media/gallery/3.jpg" />
				</div>
				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/pirates_logo1.jpg" />
				</div>
				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/media/gallery/2.jpg" />
				</div>
				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/media/gallery/1.jpg" />
				</div>

				<div class="grid-item">
					<img src="<?php echo base_url()?>assets/images/media/gallery/3.jpg" />
				</div>
			</div>
		</div>
	</div>
	<div class="row align-items-center">
		<div class="col-xl-3 col-lg-12 p-5">
			<h4 id="chat">CHAT</h4>
			<?php if($this->session->userdata('logged_in') == FALSE): ?>
				<p class="fail"><small><em>Pour participer, vous devez être connecté</em></small></p>
			<?php endif; ?>
		</div>
		<div class="col-xl-9 col-lg-12 p-5">
			<?php $attributes = array('id' => 'chat_form', 'class' => 'form_horizontal');
			echo validation_errors("<p class = 'alert alert-danger'/p>"); 
			echo form_open('pages/chat?task=write', $attributes); ?>
			<section class="chat">
				<div class="messages">	
					<!-- ici chat (dynamique) -->
				</div>

				<?php if($this->session->userdata('logged_in')): ?>
					<div class="user_inputs">
						<div class="form-group">
							<?php echo form_label('AUTEUR');
							$data = array('class' => 'form-control form-control-lg','name' => 'author','id' => 'author', 'value' => $this->session->userdata('username'));
							echo form_input($data); ?>
						</div>
						<div class="form-group">
							<?php echo form_label('CONTENU');
							$data = array('class' => 'form-control form-control-lg','name' => 'content','id'=> 'content','placeholder' =>'Votre texte ici !');
							echo form_textarea($data); ?>
						</div>
						<div class="form-group">
							<?php $data = array('class' => 'btn btn-secondary btn-lg','name' => 'submit', 'value'=> 'ENVOYER');
							echo form_submit($data); ?>
						</div>
					</div>

				</section>
				<?php echo form_close(); ?>
			<?php endif; ?>
		</div>

	</div>
	<div class="row align-items-center">
		<div class="col-xl-3 col-lg-12 p-5">
			<h4 id="presse">PRESSE</h4>
		</div>
		<div class="col-xl-9 col-lg-12 p-5">
			<div class="fotorama" data-clicktransition="crossfade"  data-width="100%"
			data-allowfullscreen="true" data-nav="thumbs">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190920.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190910.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190801.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190628.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190624.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190613.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190608.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190607.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190527.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190522.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190327.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20190222.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180928.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180503.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180530.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180412.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180405.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180328.jpg" alt="a">
			<img src="<?php echo base_url()?>assets/images/media/presse/20180208.jpg" alt="a">
		</div>
	</div>
</div>
</div>














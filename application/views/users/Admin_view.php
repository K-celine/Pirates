<!-- ici Admin_view-->
<div id="container_admin">
	<h2>PANNEAU D'ADMINISTRATION</h2>
	<a href="#admin_actu">ACTU</a>
	<a href="#admin_profil">PROFIL</a>
	<a href="#admin_newsletter">NEWSLETTER</a>
	<a href="#admin_match">MATCH</a>
	<a href="#admin_standing">CLASSEMENT</a>
	<a href="#admin_message">MESSAGE</a>
	<a href="#admin_booking">RESERVATION</a>
	<?php if($this->session->flashdata('actu_created')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('actu_created');?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('actu_edited')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('actu_edited');?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('actu_deleted')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('actu_deleted');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('admin_created')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('admin_created');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('admin_edited')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('admin_edited');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('match_created')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('match_created');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('match_edited')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('match_edited');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('match_deleted')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('match_deleted');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('message_deleted')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('message_deleted');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('standing_edited')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="admin-success"><?php echo $this->session->flashdata('standing_edited');?></p>
			</div>
		</div>	
	<?php endif; ?>
		<div class="row align-items-center p-5" id="admin_actu">
			<div class="col-3 pl-5">
				<h3>GESTION DES ACTUS</h3>
			</div>
			<div class="col-9">
				<ul class="admin_actu">
					<li>LISTE DES ACTUS : </li>	
				</ul>
				<ul class="admin_actu">
					<li>TITRE</li>
					<li>CONTENU</li>
					<li>ACTION</li>
				</ul>
				<?php foreach($actus as $actu): ?>
				<ul class="admin_actu">
					<li><?php echo $actu->title; ?></li>
					<li><?php echo substr($actu->content,0, 20) ?>...</li>
					<li><a href="<?php echo base_url()?>actus/edit_actu/<?php echo $actu->id;?>"><i class="fas fa-pen"></i></a> <a href="<?php echo base_url()?>actus/delete_actu/<?php echo $actu->id;?>"><i class="fas fa-trash-alt"></i></a></li>
				</ul>
				<?php endforeach; ?>
				<br><a id="btn_create_actu" href="<?php echo base_url()?>actus/create_actu">CREER UNE NOUVELLE ACTU</a>
			</div>
		</div>
		<div class="row align-items-center p-5" id="admin_profil">
			<div class="col-3 pl-5">
				<h3>GESTION DES PROFILS</h3>
			</div>
			<div class="col-9">
				<ul class="admin_actu">
					<li>LISTE DES ADMINS : </li>	
				</ul>
				<ul class="admin_actu">
					<li>USERNAME</li>
					<li>EMAIL</li>
					<li>SUPPRIMER ADMIN</li>
				</ul>
				<?php foreach($list_admin as $admin): ?>
				<ul class="admin_actu">
					<li><?php echo $admin->username; ?></li>
					<li><?php echo $admin->email; ?></li>
					<li><a href="<?php echo base_url()?>users/edit_admin/<?php echo $admin->id;?>"><i class="fas fa-user-times"></i></i></a></li>
				</ul>
				<?php endforeach; ?>
				<br><a id="btn_create_actu" href="<?php echo base_url()?>users/form_create_admin">CREER UN NOUVEL ADMIN</a>
			</div>
		</div>
		<div class="row align-items-center p-5" id="admin_newsletter">
			<div class="col-3 pl-5">
				<h3>GESTION DE LA NEWSLETTER</h3>
			</div>
			<div class="col-9">
				<ul class="admin_actu">
					<li>LISTE DES INSCRITS : </li>	
				</ul>
				<ul class="admin_sub">
					<li>EMAIL</li>
					<li>IDENTIFIANT</li>
				</ul>
				<?php foreach($sub_newsletter as $subscribers): ?>
				<ul class="admin_sub">
					<li><?php echo $subscribers->email_subscribe; ?></li>
					<li><?php echo $subscribers->id; ?></li>
				</ul>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-3 pl-5">
			</div>
			<div class="col-9 mb-5">
				<a id="btn_sub_news" href="mailto:<?php foreach($sub_newsletter as $subscribers): ?><?php echo $subscribers->email_subscribe.', ' ?><?php endforeach; ?>?subject=La%20nouvelle%20Newsletter%20des%20Pirates%20est%20arrivée%20%21%20&body=Chers Supporters,%0D%0A%0D%0AVous trouverez%20ci-joint%20la%20nouvelle%20Newsletter%20des%20Pirates%20en%20attendant%20le%20prochain match.%0D%0A%0D%0ABien%20%C3%A0%20vous,%0D%0A%0D%0ALET'S%20GO%20PIRATES%20%21%20">ENVOYER NEWSLETTER</a>
			</div>
		</div>
		<div class="row align-items-center p-5" id="admin_match">	
		<div class="col-3 pl-5">
			<h3>GESTION DES MATCHS</h3>
		</div>
		<div class="col-9">
				<ul class="admin_actu">
					<li>LISTE DES MATCHS: </li>	
				</ul>
			<ul class="admin_actu">
				<li>DATE  ET  HEURE</li>
				<li>TEAM 1</li>
				<li>SCORE 1</li>
				<li>TEAM 2</li>
				<li>SCORE 2</li>
				<li>ACTION</li>
			</ul>
			<?php foreach($list_match as $match): ?>
			<ul class="admin_actu">
				<li><?php echo date('d/m/Y H:i', strtotime($match->match_datetime)); ?></li>
				<li><?php echo $match->name_home ?><img id="logo" src="<?php echo base_url()?><?php echo $match->image_home; ?>" alt="" style="width:7rem"/></li>
				<li><?php echo $match->score_home ?></li>
				<li><?php echo $match->name_visitor ?><img id="logo" src="<?php echo base_url()?><?php echo $match->image_visitor; ?>" alt="" style="width:7rem"/></li>
				<li><?php echo $match->score_visitor ?></li>
				<li><a href="<?php echo base_url()?>matchs/edit_match/<?php echo $match->id;?>"><i class="fas fa-pen"></i></a> <a href="<?php echo base_url()?>matchs/delete_match/<?php echo $match->id;?>"><i class="fas fa-trash-alt"></i></a></li>
			</ul>
			<?php endforeach; ?>
			<br><a id="btn_create_actu" href="<?php echo base_url()?>matchs/create_match">CREER NOUVEAU MATCH</a>
		</div>
	</div>
	<div class="row align-items-center p-5" id="admin_standing">
			<div class="col-3 pl-5">
				<h3>GESTION DU CLASSEMENT</h3>
			</div>
			<div class="col-9">
			<ul class="admin_actu">
				<li>TEAM</li>
				<li>WIN</li>
				<li>LOSE</li>
				<li>POINTS</li>
				<li>EDITER</li>
			</ul>
			<?php foreach($standing as $top): ?>
			<ul class="admin_actu">
				<li><?php echo $top->team ?></li>
				<li><?php echo $top->win ?></li>
				<li><?php echo $top->lose ?></li>
				<li><?php echo $top->points ?></li>
				<li><a href="<?php echo base_url()?>matchs/edit_standing/<?php echo $top->id;?>"><i class="fas fa-pen"></i></a></li>
			</ul>
			
			<?php endforeach; ?>
		</div>
	</div>
		<div class="row align-items-center p-5" id="admin_message">
			<div class="col-3 pl-5">
				<h3>GESTION DES MESSAGES </h3>
			</div>
			<div class="col-9">
				<ul class="admin_actu">
					<li>PRENOM</li>
					<li>NOM</li>
					<li>EMAIL</li>
					<li>SUJET</li>
					<!--<li>CONTENU</li>-->
					<li>ACTION</li>
				</ul>
				<?php foreach($messages as $message): ?>
				<ul class="admin_actu">
					<li><?php echo $message->first_name; ?></li>
					<li><?php echo $message->last_name; ?></li>
					<li><?php echo $message->email; ?></li>
					<li><?php echo substr($message->subject_message,0, 10); ?>...</li>
					<!--<li><?php echo substr($message->content_message,0, 10) ?>...</li>-->
					<li><a href="<?php echo base_url()?>pages/message/<?php echo $message->id;?>"><i class="fas fa-glasses"></i></a> <a href="<?php echo base_url()?>pages/delete_message/<?php echo $message->id;?>"><i class="fas fa-trash-alt"></i></a></li>
				</ul>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row align-items-center p-5" id="admin_booking">
			<div class="col-3 pl-5">
				<h3>APERCU DES RESERVATIONS</h3>
			</div>
			<div class="col-9">
				<ul class="admin_book">
					<li>PSEUDO</li>
					<li>EMAIL</li>
					<li>MATCH</li>
					<li>NOMBRE DE PLACE</li>
				</ul>
				<?php foreach($list_book as $book): ?>
				<ul class="admin_book">
					<li><?php echo $book->username; ?></li>
					<li><?php echo $book->email; ?></li>
					<li><?php echo $book->name_home; ?> VS <?php echo $book->name_visitor; ?></li>
					<li><?php echo $book->number_seat; ?></li>
				</ul>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	





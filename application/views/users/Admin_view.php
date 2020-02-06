<!-- ici Admin_view-->
<div id="container_admin">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<h5>PANNEAU D'ADMINISTRATION</h5>
	<nav class="menu_admin">
		<a href="#admin_actu">ACTU</a>
		<a href="#admin_profil">PROFIL</a>
		<a href="#admin_newsletter">NEWSLETTER</a>
		<a href="#admin_match">MATCH</a>
		<a href="#admin_standing">CLASSEMENT</a>
		<a href="#admin_message">MESSAGE</a>
		<a href="#admin_booking">RESERVATION</a>
	</nav>
	<p class="admin-success">
		<?php if($this->session->flashdata('actu_created')):?>
			<?php echo $this->session->flashdata('actu_created');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('actu_edited')):?>
			<?php echo $this->session->flashdata('actu_edited');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('actu_deleted')):?>
			<?php echo $this->session->flashdata('actu_deleted');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('admin_created')):?>
			<?php echo $this->session->flashdata('admin_created');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('admin_edited')):?>
			<?php echo $this->session->flashdata('admin_edited');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('match_created')):?>
			<?php echo $this->session->flashdata('match_created');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('match_edited')):?>
			<?php echo $this->session->flashdata('match_edited');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('match_deleted')):?>
			<?php echo $this->session->flashdata('match_deleted');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('message_deleted')):?>
			<?php echo $this->session->flashdata('message_deleted');?>
		<?php endif; ?>
		<?php if($this->session->flashdata('standing_edited')):?>
			<?php echo $this->session->flashdata('standing_edited');?>	
		<?php endif; ?>
	</p>
	<div class="row align-items-center p-5 mw-100">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_actu">GESTION DES ACTUS</h6>
		</div>
		<div class="col-xl-9 col-lg-12">
			<ul class="admin_actu">
				<li>LISTE DES ACTUS : </li>	
			</ul>
			<ul class="admin_actu">
				<li>TITRE</li>
				<li class="actu_smart">CONTENU</li>
				<li>ACTION</li>
			</ul>
			<?php foreach($actus as $actu): ?>
			<ul class="admin_actu">
				<li><?php echo $actu->title; ?></li>
				<li class="actu_smart"><?php echo substr($actu->content,0, 20) ?>...</li>
				<li><a href="<?php echo base_url()?>actus/edit_actu/<?php echo $actu->id;?>"><i class="fas fa-pen"></i></a> <a href="<?php echo base_url()?>actus/delete_actu/<?php echo $actu->id;?>"><i class="fas fa-trash-alt"></i></a></li>
			</ul>
			<?php endforeach; ?>
			<br><a id="btn_create_actu" href="<?php echo base_url()?>actus/create_actu">CREER UNE NOUVELLE ACTU</a>
		</div>
	</div>
	<div class="row align-items-center p-5 mw-100">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_profil">GESTION DES PROFILS</h6>
		</div>
		<div class="col-xl-9 col-lg-12">
			<ul class="admin_profil">
				<li>LISTE DES ADMINS : </li>	
			</ul>
			<ul class="admin_profil">
				<li class="profil_smart">USERNAME</li>
				<li>EMAIL</li>
				<li>SUPPRIMER ADMIN</li>
			</ul>
			<?php foreach($list_admin as $admin): ?>
			<ul class="admin_profil">
				<li class="profil_smart"><?php echo $admin->username; ?></li>
				<li><?php echo $admin->email; ?></li>
				<li><a href="<?php echo base_url()?>users/edit_admin/<?php echo $admin->id;?>"><i class="fas fa-user-times"></i></a></li>
			</ul>
			<?php endforeach; ?>
			<br><a id="btn_create_admin" href="<?php echo base_url()?>users/form_create_admin">CREER UN NOUVEL ADMIN</a>
		</div>
	</div>
	<div class="row align-items-center p-5 mw-100">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_newsletter">GESTION DE LA NEWSLETTER</h6>
		</div>
		<div class="col-xl-9 col-lg-12">
			<ul class="admin_newsletter">
				<li>LISTE DES INSCRITS : </li>	
			</ul>
			<ul class="admin_newsletter">
				<li>EMAIL</li>
				<li>IDENTIFIANT</li>
			</ul>
			<?php foreach($sub_newsletter as $subscribers): ?>
			<ul class="admin_newsletter">
				<li><?php echo $subscribers->email_subscribe; ?></li>
				<li><?php echo $subscribers->id; ?></li>
			</ul>
			<?php endforeach; ?>
			<br><a id="btn_sub_newsletter" href="mailto:<?php foreach($sub_newsletter as $subscribers):?>
			<?php echo $subscribers->email_subscribe.', ' ?><?php endforeach; ?>?subject=La%20nouvelle%20Newsletter%20des%20Pirates%20est%20arrivée%20%21%20&body=Chers%20Supporters,%0D%0A%0D%0AVous trouverez%20ci-joint%20la%20nouvelle%20Newsletter%20des%20Pirates%20en%20attendant%20le%20prochain%20match.%0D%0A%0D%0ABien%20%C3%A0%20vous,%0D%0A%0D%0ALET'S%20GO%20PIRATES%20%21%20">ENVOYER NEWSLETTER</a>
		</div>
	</div>
	<div class="row align-items-center p-5 mw-100">	
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_match">GESTION DES MATCHS</h6>
		</div>
		<div class="col-xl-9 col-lg-12">
			<ul class="admin_match">
				<li>LISTE DES MATCHS: </li>	
			</ul>
			<ul class="admin_match">
				<li>DATE  ET  HEURE</li>
				<li>TEAM 1</li>
				<li>SCORE 1</li>
				<li>TEAM 2</li>
				<li>SCORE 2</li>
				<li>ACTION</li>
			</ul>
			<?php foreach($list_match as $match): ?>
			<ul class="admin_match">
				<li><?php echo date('d/m/Y H:i', strtotime($match->match_datetime)); ?></li>
				<li><?php echo $match->name_home ?><img id="logo" src="<?php echo base_url()?><?php echo $match->image_home; ?>" alt="" style="width:5rem"/></li>
				<li><?php echo $match->score_home ?></li>
				<li><?php echo $match->name_visitor ?><img id="logo" src="<?php echo base_url()?><?php echo $match->image_visitor; ?>" alt="" style="width:5rem"/></li>
				<li><?php echo $match->score_visitor ?></li>
				<li><a href="<?php echo base_url()?>matchs/edit_match/<?php echo $match->id;?>"><i class="fas fa-pen"></i></a> <a href="<?php echo base_url()?>matchs/delete_match/<?php echo $match->id;?>"><i class="fas fa-trash-alt"></i></a></li>
			</ul>
			<?php endforeach; ?>
			<br><a id="btn_create_match" href="<?php echo base_url()?>matchs/create_match">CREER NOUVEAU MATCH</a>
		</div>
	</div>
	<div class="row align-items-center p-5 mw-100">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_standing">GESTION DU CLASSEMENT</h6>
		</div>
		<div class="col-xl-9 col-lg-12">
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
	<div class="row align-items-center p-5 mw-100">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_message">GESTION DES MESSAGES </h6>
		</div>
		<div class="col-xl-9 col-lg-12">
			<ul class="admin_actu">
				<li class="message_smart">PRENOM</li>
				<li class="message_smart">NOM</li>
				<li>EMAIL</li>
				<li class="message_smart">SUJET</li>
				<li>ACTION</li>
			</ul>
			<?php foreach($messages as $message): ?>
			<ul class="admin_actu">
				<li class="message_smart"><?php echo $message->first_name; ?></li>
				<li class="message_smart"><?php echo $message->last_name; ?></li>
				<li><?php echo $message->email; ?></li>
				<li class="message_smart"><?php echo substr($message->subject_message,0, 10); ?>...</li>
				<li><a href="<?php echo base_url()?>pages/message/<?php echo $message->id;?>"><i class="fas fa-glasses"></i></a> <a href="<?php echo base_url()?>pages/delete_message/<?php echo $message->id;?>"><i class="fas fa-trash-alt"></i></a></li>
			</ul>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="row align-items-center p-5 mw-100">
		<div class="col-xl-3 col-lg-12 pl-5">
			<h6 id="admin_booking">APERCU DES RESERVATIONS</h6>
		</div>
		<div class="col-xl-9 col-lg-12">
			<ul class="admin_book">
				<li class="booking_smart">PSEUDO</li>
				<li class="booking_smart">EMAIL</li>
				<li>MATCH</li>
				<li>NOMBRE DE PLACE</li>
			</ul>
			<?php foreach($list_book as $book): ?>
			<ul class="admin_book">
				<li class="booking_smart"><?php echo $book->username; ?></li>
				<li class="booking_smart"><?php echo $book->email; ?></li>
				<li><?php echo $book->name_home; ?> VS <?php echo $book->name_visitor; ?></li>
				<li><?php echo $book->number_seat; ?></li>
			</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>






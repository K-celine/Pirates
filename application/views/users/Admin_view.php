<!-- ici Admin_view-->
<div id="container_admin">
	<h2>PANNEAU D'ADMINISTRATION</h2>
	<?php if($this->session->flashdata('actu_sent')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="success"><?php echo $this->session->flashdata('actu_sent');?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('actu_modif')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="success"><?php echo $this->session->flashdata('actu_modif');?></p>
			</div>
		</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('actu_delete')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="success"><?php echo $this->session->flashdata('actu_delete');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('admin_delete')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="success"><?php echo $this->session->flashdata('admin_delete');?></p>
			</div>
		</div>	
	<?php endif; ?>
	<?php if($this->session->flashdata('profil_edited')):?>
		<div class="row row align-items-center p-5">
			<div class="col-12 pl-5">
				<p class="success"><?php echo $this->session->flashdata('profil_edited');?></p>
			</div>
		</div>	
	<?php endif; ?>
		<div class="row align-items-center p-5" id="admin_newsletter">
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
		<div class="row align-items-center p-5" id="admin_newsletter">
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
					<li>role</li>
					<li>ACTION</li>
				</ul>
				<?php foreach($list_admin as $admin): ?>
				<ul class="admin_actu">
					<li><?php echo $admin->username; ?></li>
					<li><?php echo $admin->email; ?></li>
					<li><?php echo $admin->role; ?></li>
					<li><li><a href="<?php echo base_url()?>users/detail_profil/<?php echo $admin->id;?>"><i class="fas fa-pen"></i></a> <a href="<?php echo base_url()?>users/delete_admin/<?php echo $admin->id;?>"><i class="fas fa-trash-alt"></i></a></li>
				</ul>
				<?php endforeach; ?>
				<!--<br><a id="btn_create_actu" href="<?php echo base_url()?>users/edit_profil">CHANGER UN PROFIL</a>-->
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
				<a id="btn_sub_news" href="mailto:<?php foreach($sub_newsletter as $subscribers): ?><?php echo $subscribers->email_subscribe; ?>"<?php endforeach; ?>>ENVOYER NEWSLETTER</a>
			</div>
		</div>
		<div class="row align-items-center p-5" id="admin_newsletter">
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
					<li><a href="<?php echo base_url()?>pages/message/<?php echo $message->id;?>"><i class="fas fa-glasses"></i></a>
				</ul>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row align-items-center p-5" id="admin_booking">
			<div class="col-3 pl-5">
				<h3>GESTION DES RESERVATIONS</h3>
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
					<li><?php echo $book->id; ?></li>
					<li><?php echo $book->id; ?></li>
					<li><?php echo $book->id; ?></li>
					<li><?php echo $book->number_seat; ?></li>
				</ul>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-3 pl-5">
			</div>
			<div class="col-9 mb-5">
				<a id="btn_book" href="#">ENVOYER PLACE</a>
			</div>
		</div>
	</div>





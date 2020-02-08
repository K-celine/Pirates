<!-- ici Actu_view -->
<div class="container" id="container_actu">
	<div>
		<a id="retour" class="invisible" href="#top"></a>
	</div>
	<div class="row align-items-center m-0 mw-100 p-3" >
		<div class="col-12">
			<img class="img_actu" src="<?php echo base_url()?>assets/images/actu/<?php echo $one_actu->photo;?>" alt="<?php echo $one_actu->photo;?> " style="width:100%"/>
		</div>
		<div class="col-12" id="one_actu">
			<h4><i class="fas fa-newspaper"></i> <?php echo $one_actu->title;?></h4>
			<p><small><?php echo date('d/m/Y', strtotime($one_actu->date)) ; ?></small></p>	
			<p><?php echo str_replace("\n", "<br>", $one_actu->content);?></p>
		</div>
	</div>
</div>
	

<!-- ici Actu_view -->
<div class="container" id="container_actu">
	<div class="row align-items-center" >
		<div class="col-12 p-5">
			<div class="row mb-5">
				<div class="col-8">
					<img class="img_actu" src="<?php echo base_url()?><?php echo $one_actu->photo;?>" alt="<?php echo $one_actu->photo;?> " style="width:70rem"/>
				</div>
				<div class="col-4" id="one_actu">
					<h2><i class="fas fa-newspaper"></i> <?php echo $one_actu->title;?></h2>
					<p><small><?php echo date('d/m/Y', strtotime($one_actu->date)) ; ?></small></p>	
					<p><?php echo $one_actu->content;?></p>
				</div>
			</div>
		</div>
	</div>
</div>		
		
		
		
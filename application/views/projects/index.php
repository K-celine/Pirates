<h1>Projects </h1>

<p class="alert-success">

	<?php if($this->session->flashdata('project_created')): ?>

		<?php echo $this->session->flashdata('project_created'); ?>

	<?php endif; ?>
</p>
<p class="alert-success">

	<?php if($this->session->flashdata('project_updated')): ?>

		<?php echo $this->session->flashdata('project_updated'); ?>

	<?php endif; ?>
</p>
<p class="alert-success">

	<?php if($this->session->flashdata('project_deleted')): ?>

		<?php echo $this->session->flashdata('project_deleted'); ?>

	<?php endif; ?>
</p>
<p class="alert-success">

	<?php if($this->session->flashdata('task_created' , "Your task has been created")): ?>
		
		<?php echo $this->session->flashdata('task_created' , "Your task has been created"); ?>

	<?php endif; ?>
</p>
<p class="alert-success">

	<?php if($this->session->flashdata('task_updated' , "Your task has been updated")): ?>

		<?php echo $this->session->flashdata('task_updated' , "Your task has been updated"); ?>

	<?php endif; ?>
</p>
<p class="alert-success">

	<?php if($this->session->flashdata('task_deleted' , "Your task has been deleted")): ?>

		<?php echo $this->session->flashdata('task_deleted' , "Your task has been deleted"); ?>

	<?php endif; ?>
</p>


<a class="btn btn-primary float-right" href="<?php echo base_url();?>projects/create">Create Project</a>

<table class="table table-hover">
	<thead class='thead-dark'>
		<tr>
			<th>
				Project Name
			</th>
			<th>
				Project Body
			</th>
			<th>
				Actions
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php foreach($projects as $project): ?>
			<tr>
				<?php echo "<td><a href='".base_url()."projects/display/".$project->id."'>" . $project->project_name . "</a></td>" ; ?>
				<?php echo "<td>" . $project->project_body . "</td>" ; ?>
				<td> <a class="btn btn-danger"href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id; ?>"><span>X</span> </a></td>
			</tr>				
		<?php endforeach; ?>

	</tbody>



</table>
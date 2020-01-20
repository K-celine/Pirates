<div class="col-m-3 float-right ">
	<ul class="list-group">
		<h4>Project Actions</h4>
		<li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id;?>">Create Task</a></li>
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id;?>">Edit Project</a></li>
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id;?>">Delete Project</a></li>
	</ul>
</div>
<p class="alert-success">

	<?php if($this->session->flashdata('task_complete')): ?>
		<?php echo $this->session->flashdata('task_complete'); ?>
	<?php endif; ?>
</p>
<p class="alert-warning">
	<?php if($this->session->flashdata('task_incomplete')): ?>
		<?php echo $this->session->flashdata('task_incomplete'); ?>
	<?php endif; ?>
</p>
<div class="row">
	<div class="col">
		<h1> Project Name : <?php echo $project_data->project_name; ?></h1>
		<p>Date Created : <?php echo $project_data->date_created; ?></p>
		<h3>Description : </h3>
		<p><?php echo $project_data->project_body; ?></p>
	</div>

</div>
<div>
	<h3>Active Tasks</h3>
	<ul>
		<?php if($not_completed_tasks): ?>
			<?php foreach($not_completed_tasks as $task): ?>
				<li>
					<a href=" <?php echo base_url();?>tasks/display/<?php echo $task->task_id;?> ">
						<?php echo $task->task_name; ?>
					</a>
				</li>
			<?php endforeach; ?>

			<?php else: ?>
				<p>You have no task </p>
			<?php endif; ?>
		</ul>
		<h3>Completed Tasks</h3>
		<ul>
			<?php if($completed_tasks): ?>
				<?php foreach($completed_tasks as $task): ?>
					<li>
						<a href=" <?php echo base_url();?>tasks/display/<?php echo $task->task_id;?> ">
							<?php echo $task->task_name; ?>
						</a>
					</li>
				<?php endforeach; ?>
				<?php else: ?>
					<p>You have no task </p>
				<?php endif; ?>
			</ul>
		</div>


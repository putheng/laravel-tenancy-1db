<template>
<div class="task-header">
	<h3 class="task-title mr-auto">Backlogs <span class="badge text-muted">(3)</span></h3>
	<button class="btn btn-light btn-icon text-muted" data-toggle="modal" data-target="#modalNewTask" title="Add task">
		<i class="fa fa-plus-circle"></i>
	</button>
	<div class="dropdown">
		<button class="btn btn-light btn-icon text-muted" data-toggle="dropdown">
		<i class="fa fa-ellipsis-v"></i>
		</button>
		<div class="dropdown-arrow"></div>
		<div class="dropdown-menu dropdown-menu-right">
			<a href="#" class="dropdown-item">Edit</a>
			<a href="#" class="dropdown-item">Move</a>
			<a href="#" class="dropdown-item">Duplicate</a>
			<a href="#" class="dropdown-item">Subcribe</a>
			<a href="#" class="dropdown-item">Trash</a>
		</div>
	</div>
</div>
</template>

<script>
	export default {

	}
</script>
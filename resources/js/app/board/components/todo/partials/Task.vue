<template>
<div class="tasks">
	
	<task-menu></task-menu>
	
	<div class="task-body"
		data-toggle="sortable"
		data-group="tasks"
		data-delay="50"
		data-force-fallback="true">
		<slot/>
	</div>
</div>
</template>

<script>
	import TaskMenu from './TaskMenu'

	export default {
		components: {
			TaskMenu
		}
	}
</script>
<template>
	<div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
		<template v-for="i, x in 15">
			<div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
				<a href="#" class="stretched-link"></a>
				<div class="list-group-item-figure">
					<div class="tile tile-circle bg-purple">N</div>
				</div>
				<div class="list-group-item-body">
					<h4 class="list-group-item-title">Noted title</h4>
					<p class="list-group-item-text">last modify 9, July 2019</p>
				</div>
			</div>
		</template>

		<div class="list-group-item">
			<div class="list-group-item-body text-center py-4">
				<div class="spinner-border text-primary" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {

	}
</script>
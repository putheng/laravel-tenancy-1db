<template>
<div class="list-group list-group-reflow list-group-flush list-group-divider">
	<div class="list-group-header">Today</div>

	<div class="list-group-item align-items-start" v-for="f, i in 30" :key="i">
		<div class="list-group-item-figure">
			<a href="#" class="tile tile-circle bg-teal"><span class="fa fa-file-pdf"></span></a>
		</div>
		<div class="list-group-item-body">
			<h4 class="list-group-item-title text-truncate"><a href="#">double-broccoli-quinoa.pdf</a></h4>
			<p class="list-group-item-text"> 1.07 MB by Emma Griffin </p>
			<p class="list-group-item-text small"> 12:20pm </p>
		</div>
		<div class="list-group-item-figure">
			<div class="dropdown">
				<button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown">
				<i class="fa fa-fw fa-ellipsis-v"></i>
				</button>
				<div class="dropdown-arrow"></div>
				<div class="dropdown-menu dropdown-menu-right">
					<button type="button" class="dropdown-item">Download</button>
					<button type="button" class="dropdown-item">View details</button>
					<button type="button" class="dropdown-item">Share file</button>
					<button type="button" class="dropdown-item">Copy link file</button>
					<div class="dropdown-divider"></div>
					<button type="button" class="dropdown-item">Remove</button>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
	export default {

	}
</script>
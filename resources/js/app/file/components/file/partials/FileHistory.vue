<template>
<ul class="timeline timeline-dashed-line">
	<li class="timeline-item" v-for="i in 5">
		<div class="timeline-figure">
			<span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
		</div>
		<div class="timeline-body">
			<h6 class="timeline-heading">Invoice created</h6>
			<span class="timeline-date">08/18/2018 – 12:42 PM</span>
		</div>
	</li>
	<li class="timeline-item">
		<div class="timeline-figure">
			<span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
		</div>
		<div class="timeline-body">
			<h6 class="timeline-heading">Invoice viewed</h6>
		</div>
	</li>
	<li class="timeline-item">
		<div class="timeline-figure">
			<span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
		</div>
		<div class="timeline-body">
			<h6 class="timeline-heading">Invoice fully paid</h6>
		</div>
	</li>
</ul>
</template>

<script>
	export default {

	}
</script>
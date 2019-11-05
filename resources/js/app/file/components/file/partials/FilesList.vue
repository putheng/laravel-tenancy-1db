<template>
<div class="list-group list-group-flush list-group-divider">
	<div class="list-group-item" v-for="x, i in 10">
		<div class="list-group-item-figure">
    		<a href="#" class="tile tile-circle bg-success">
    			<span class="fa fa-file-pdf"></span>
    		</a>
    	</div>
		<div class="list-group-item-body">
			<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
				<div class="team">
					<h4 class="list-group-item-title">
						<a href="#">Creative Division</a>
					</h4>
					<p class="list-group-item-text">Updated 9,July 2019 10:21PM</p>
				</div>
			</div>
		</div>
		<div class="list-group-item-figure">
			<button data-toggle="tooltip" class="btn btn-sm btn-icon btn-light" title="Delete">
				<i class="oi oi-trash"></i>
			</button>
			<button data-toggle="tooltip" class="btn btn-sm btn-icon btn-light" title="Share">
				<i class="oi oi-share"></i>
			</button>
			<button data-toggle="tooltip" class="btn btn-sm btn-icon btn-light" title="Download">
				<i class="oi oi-data-transfer-download"></i>
			</button>
		</div>
	</div>
</div>
</template>

<script>
	export default {

	}
</script>
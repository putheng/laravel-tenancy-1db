<template>
<div class="dropdown-menu dropdown-menu-md stop-propagation" id="dntmLabels" aria-labelledby="dropdownTaskLabels1">
	<h6 id="dropdownTaskLabels1" class="dropdown-header">Select labels</h6>
	<div class="dropdown-divider"></div>
	<div class="form-group px-3 py-2 mb-0">
		<input type="text" class="form-control" data-filter="#dntmLabels .filterable" placeholder="Search" data-autofocus="true">
	</div>
	<label class="custom-control custom-checkbox filterable">
	<input type="checkbox" class="custom-control-input task-nolabel" name="taskLabels[]" value="0" data-label="No Label" checked>
	<span class="custom-control-label">No Label</span>
	</label>
	<div class="dropdown-divider"></div>
	<div class="dropdown-scroll">
		<template v-for="u,i in 10">
			<label class="custom-control custom-checkbox filterable">
			<input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" :value="i" data-label="Text">
			<span class="custom-control-label"><i class="fa fa-square fa-lg text-green mr-1"></i> Text</span>
			</label>
		</template>
	</div>
	<div class="dropdown-divider"></div>
	<a href="#" class="dropdown-item">Create new label</a>
	<a href="#" class="dropdown-item">Manage labels</a>
</div>
</template>

<script>
	export default {

	}
</script>
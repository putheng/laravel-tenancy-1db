<template>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-rich stop-propagation">
	<div class="dropdown-header">Add members</div>
	<div class="form-group px-3 py-2 m-0">
		<input type="text" class="form-control" placeholder="e.g. @bent10"
			data-toggle="tribute"
			data-remote="assets/data/tribute.json"
			data-menu-container="#people-list"
			data-item-template="true" data-autofocus="true">
		<small class="form-text text-muted">Search people by username or email address to invite them.</small>
	</div>
	<div id="people-list" class="tribute-inline stop-propagation"></div>
	<a href="#" class="dropdown-footer">Invite member by link <i class="far fa-clone"></i></a>
</div>
</template>

<script>
	
</script>
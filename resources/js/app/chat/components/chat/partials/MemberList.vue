<template>
<div class="list-group list-group-reflow list-group-flush list-group-divider">
	<div class="list-group-header">8 Members</div>

	<div class="list-group-item" v-for="u, i in 10">
		<div class="list-group-item-figure align-items-start">
			<a href="#" class="user-avatar">
			<img src="/images/profile.jpg" alt="Ryan Jimenez">
			<span class="avatar-badge online" title="online""></span>
			</a>
		</div>
		<div class="list-group-item-body">
			<h4 class="list-group-item-title"><a href="#">Ryan Jimenez</a></h4>
			<p class="list-group-item-text"> Photographer</p>
		</div>
		<div class="list-group-item-figure align-items-start">
			<div class="dropdown">
				<button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown">
				<i class="fa fa-fw fa-ellipsis-v"></i>
				</button>
				<div class="dropdown-arrow"></div>
				<div class="dropdown-menu dropdown-menu-right">
					<button type="button" class="dropdown-item">Message</button>
					<button type="button" class="dropdown-item">Invite to a team</button>
					<button type="button" class="dropdown-item">Copy member ID</button>
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
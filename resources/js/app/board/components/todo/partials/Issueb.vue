<template>
<div class="task-issue">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title mb-1">
				<a href="#">Task name</a>
			</h3>
			<ul class="list-inline text-muted">
				<template v-if="true">
					<li class="list-inline-item">
						<i class="far fa-fw fa-clock"></i> In 3 days
					</li>
				</template>

				<template v-else>
					<li class="list-inline-item">
						<i class="fa fa-fw fa-tasks"></i>
						50:02/48:00
					</li>
				</template>
			</ul>
			<div class="d-flex">
				<div class="avatar-group ml-auto">
					<a href="#" class="user-avatar user-avatar-sm" data-toggle="tooltip" title="user name">
					<img src="/images/profile.jpg" alt="user name">
					</a>
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
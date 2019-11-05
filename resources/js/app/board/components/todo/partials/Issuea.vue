<template>
<div class="task-issue">
	<div class="card">
		<div class="card-header">
			<div class="task-label-group">
				<span class="task-label bg-teal"></span>
				<span class="task-label bg-green"></span>
			</div>
			<h4 class="card-title">
				<a href="#" data-toggle="modal" data-target="#modalViewTask">Task name</a>
			</h4>
			<h6 class="card-subtitle text-muted">
				<template v-if="true" >
					<span class="text-red">50:02</span> / <span class="text-muted">48:00</span>
				</template>
				<template v-else>
					<span class="text-muted">48:00</span> / <span class="text-muted">48:00</span>
				</template>
				<span class="mx-1">&middot;</span>
				<span class="due-date"><i class="far fa-fw fa-clock"></i> In 3 days</span>
			</h6>
		</div>
		<div class="card-body pt-0">
			<div class="list-group">
				<div class="list-group-item" data-toggle="modal" data-target="#modalViewTask">
					<a href="#" class="stretched-link"></a>
					<div class="list-group-item-body">
						<figure v-for="u, i in 2" :key="i" class="user-avatar user-avatar-sm" data-toggle="tooltip" title="user name">
							<img src="/images/profile.jpg" alt="User">
						</figure>
					</div>
				</div>
				<div class="list-group-item pt-0" data-toggle="modal" data-target="#modalViewTask">
					<a href="#" class="stretched-link"></a>
					<div class="list-group-item-body">
						<div class="progress progress-xs">
							<div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="list-group-item-figure">
						<span class="todos">0/5</span>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<template v-if="true">
				<a href="#" class="card-footer-item card-footer-item-bordered text-muted" 
					data-toggle="modal" data-target="#modalViewTask">
				<i class="oi oi-comment-square mr-1"></i> 8
				</a>
			</template>
			<a href="#" class="card-footer-item card-footer-item-bordered text-muted">
				<template v-if="true">
					<i class="fa fa-pause"></i>
				</template>
				<template v-else>
					<i class="fa fa-play text-teal"></i>
				</template>
			</a>
		</div>
	</div>
</div>
</template>

<script>
	export default {

	}
</script>
<template>
<div class="task-issue">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"><a href="#">Task name</a></h4>
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
		<div class="card-body">
			<div class="list-group">
				<div class="list-group-item">
					<div class="list-group-item-body py-1 text-truncate">
						<a href="#" class="tile tile-sm bg-success text-white" data-toggle="tooltip" title="Project">A</a>
						<span class="text-muted mx-2">
							<i class="fas fa-long-arrow-alt-right"></i>
						</span>
						<template v-for="u, i in 3">
							<div class="avatar-group">
								<a href="#" class="user-avatar user-avatar-sm" data-toggle="tooltip" title="people name">
									<img src="/images/profile.jpg" alt="people name">
								</a>
							</div>
						</template>
					</div>
				</div>
				<div class="list-group-item pt-0">
					<a href="#" class="stretched-link"></a>
					<div class="list-group-item-body">
						<div class="progress progress-xs">
							<div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="list-group-item-figure">
						<span class="todos">7/10</span>
					</div>
				</div>
				
			</div>
		</div>
		<div class="card-footer">
			<a href="#" class="card-footer-item card-footer-item-bordered text-muted">
				<i class="oi oi-comment-square mr-1"></i> 9
			</a>
			<a href="#" class="card-footer-item card-footer-item-bordered text-muted">
				<i class="fa fa-pause"></i>
			</a>
		</div>
	</div>
</div>
</template>

<script>
	export default {

	}
</script>
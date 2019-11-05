<template>
	<default-layout>
		<div class="page has-sidebar has-sidebar-expand-xl">
			<div class="page-inner">
				<header class="page-title-bar">
					<div class="d-md-flex">
						<h1 class="page-title">Files shared with you</h1>
					</div>
				</header>
				<div class="page-section">
					<div class="card card-fluid">
						<div class="card-header nav-scroller">
							<ul class="nav nav-tabs card-header-tabs">
								<li class="nav-item">
									<a class="nav-link active show" data-toggle="tab" href="#project-myteams">My files</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#project-explore-teams">Shared with me</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="input-group has-clearable">
										<button type="button" class="close" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
										</button>
										<div class="input-group-prepend">
											<span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
										</div>
										<input type="text" class="form-control" placeholder="Search">
									</div>
								</div>
								<div class="col-auto d-none d-sm-flex">
									<div class="dropdown">
										<button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Last updated <span class="fa fa-caret-down"></span>
										</button>
										<div class="dropdown-arrow"></div>
										<div class="dropdown-menu dropdown-menu-right stop-propagation">
											<h6 class="dropdown-header">Sort By</h6>
											<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="sortTeamsBy" value="0">
											<span class="custom-control-label">Name</span>
											</label>
											<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="sortTeamsBy" value="1">
											<span class="custom-control-label">Name <span class="text-muted">(Decs)</span></span>
											</label>
											<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="sortTeamsBy" value="2" checked>
											<span class="custom-control-label">Last updated</span>
											</label>
											<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="sortTeamsBy" value="3">
											<span class="custom-control-label">Oldest updated</span>
											</label>
											<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="sortTeamsBy" value="4">
											<span class="custom-control-label">Last created</span>
											</label>
											<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="sortTeamsBy" value="5">
											<span class="custom-control-label">Oldest created</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-muted px-3 mb-2">Showing 10 to 18 of 18 entries</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="project-myteams" role="tabpanel">
								<files-list></files-list>


								<ul class="pagination justify-content-center mt-4">
									<li class="page-item">
										<a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-double-left"></i></a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item disabled">
										<a class="page-link" href="#">Next</a>
									</li>
									<li class="page-item disabled">
										<a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="project-explore-teams" role="tabpanel">
								<files-list></files-list>


								<ul class="pagination justify-content-center mt-4">
									<li class="page-item">
										<a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-double-left"></i></a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item disabled">
										<a class="page-link" href="#">Next</a>
									</li>
									<li class="page-item disabled">
										<a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page-sidebar page-sidebar-fixed">
				<div class="card card-reflow">
					<div class="card-body">
						<h4 class="card-title">Storage</h4>
						<div class="progress progress-sm rounded-0 mb-1">
							<div class="progress-bar bg-success w-75" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<p class="text-muted text-weight-bolder small">
							8.6GB of 10GB used
						</p>
						<p><a href="#">UPGRADE STORAGE</a></p>
					</div>
					<div class="card-body border-top">
						<h4 class="card-title">Recent activity</h4>
						<file-history/>
					</div>
				</div>
			</div>
		</div>
	</default-layout>
</template>

<script>
	import FilesList from './partials/FilesList'
	import FileHistory from './partials/FileHistory'
	
	import { mapGetters, mapActions } from 'vuex'

	export default {
		metaInfo: {
			title: 'Files'
		},

		components:{
			FilesList,
			FileHistory
		},

		methods: {
			//
		},

		computed: {
			//
		},

		mounted(){
			//
		}
	}
</script>
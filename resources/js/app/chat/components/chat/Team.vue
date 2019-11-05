<template>
	<default-layout>
		<div class="page has-sidebar has-sidebar-expand-xl">
			<div class="page-inner page-inner-fill">
				<div class="message">
					<div class="message-header">
						<div class="d-flex">
							<a class="btn btn-light btn-icon" href="page-messages.html">
							<i class="fa fa-flip-horizontal fa-share"></i>
							</a>
						</div>
						<h4 class="message-title">Invitation: Joe's Dinner @ Fri Aug 22</h4>
						<div class="message-header-actions">
							<div class="dropdown d-inline-block">
								<button type="button" class="btn btn-light btn-icon" title="Invite members" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user-plus"></i>
								</button>
								<div class="dropdown-arrow"></div>
								<dropdown-invite-member></dropdown-invite-member>
							</div>
							<button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar">
							<i class="fa fa-angle-double-left"></i>
							</button>
						</div>
					</div>
					<div class="message-body">
						<div class="card card-fluid mb-0">
							<conversations></conversations>
						</div>
					</div>
					<div class="message-publisher">
						<publisher-message></publisher-message>
					</div>
				</div>
			</div>
			<div class="page-sidebar">
				<header class="sidebar-header d-sm-none">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item">
							<a class="prevent-default" href="#" onclick="Looper.toggleSidebar()">
							<i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back
							</a>
						</li>
					</ol>
				</header>
				<ul class="nav nav-tabs nav-fill" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#team-profile" role="tab" aria-controls="team-profile" aria-selected="true">Team Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#message-files" role="tab" aria-controls="message-files" aria-selected="false">Files</a>
					</li>
				</ul>
				<div class="sidebar-section-fill">
					<div class="tab-content">
						<div id="team-profile" class="tab-pane fade show active" role="tabpanel" aria-labelledby="team-profile">
							<team-profile></team-profile>
							<member-list></member-list>
						</div>
						<div id="message-files" class="tab-pane fade" role="tabpanel" aria-labelledby="message-files">
							<SidebarFiles></SidebarFiles>
						</div>
					</div>
				</div>
			</div>
		</div>
	</default-layout>
</template>

<script>
	import SidebarFiles from './partials/SidebarFiles'
	import DropdownInviteMember from './partials/DropdownInviteMember'
	import Conversations from './partials/Conversations'
	import PhotoElement from './partials/PhotoElement'
	import PublisherMessage from './partials/PublisherMessage'
	import TeamProfile from './partials/TeamProfile'
	import MemberList from './partials/MemberList'

	export default {
		metaInfo: {
			title: 'Team'
		},
		computed: {
			//
		},
		mounted(){
			//
		},
		components:{
			MemberList,
			TeamProfile,
			SidebarFiles,
			PhotoElement,
			Conversations,
			PublisherMessage,
			DropdownInviteMember
		}
	}
</script>
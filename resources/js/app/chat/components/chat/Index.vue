<template>
	<default-layout>
		<div class="page has-sidebar has-sidebar-expand-xl">
			<div class="page-inner page-inner-fill">
				<div class="message">
					<div class="message-header">
						<h4 class="message-title">Joe's Dinner</h4>
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
				<div class="sidebar-section-fill">
					<user-profile></user-profile>
					<sidebar-files></sidebar-files>
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
	import UserProfile from './partials/UserProfile'
	import MemberList from './partials/MemberList'

	import { mapGetters, mapActions } from 'vuex'

	export default {
		metaInfo:{
			title: 'Chat'
		},

		methods: {
			//
		},

		computed: {
			//
		},

		mounted(){
			//
		},

		components:{
			MemberList,
			UserProfile,
			SidebarFiles,
			PhotoElement,
			Conversations,
			PublisherMessage,
			DropdownInviteMember
		}
	}
</script>

<template>
	<default-layout>
		<div>
			<div class="page">
				<div class="page-inner page-inner-fill">
					<header class="page-navs shadow-sm pr-3">
						<a href="page-project.html" class="btn-account">
							<div class="has-badge">
								<span class="tile bg-pink text-white">SP</span>
								<span class="user-avatar user-avatar-xs">
								<img src="/images/profile.jpg" alt="">
								</span>
							</div>
							<div class="account-summary">
								<h1 class="card-title">Syrena Project</h1>
								<h6 class="card-subtitle text-muted">4 deadline &middot; 2 overdue</h6>
							</div>
						</a>
						<div class="ml-auto">
							<div class="dropdown d-inline-block">
								<button type="button" class="btn btn-light btn-icon" title="Invite members" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user-plus"></i>
								</button>
								<div class="dropdown-arrow"></div>
								<dropdown-invite-members></dropdown-invite-members>
							</div>
							<button type="button" class="btn btn-light btn-icon" data-toggle="page-expander" title="Expand board">
							<i class="oi oi-fullscreen-enter fa-rotate-90 fa-fw"></i>
							</button>
							<button type="button" class="btn btn-light btn-icon" data-toggle="modal" data-target="#modalBoardConfig" title="Show menu">
							<i class="fa fa-cog fa-fw"></i>
							</button>
						</div>
					</header>
					<div id="board" class="board"
						data-toggle="sortable"
						data-draggable=".tasks"
						data-handle=".task-header"
						data-delay="100"
						data-force-fallback="true">
						<task>
							<issuea></issuea>
						</task>
						<task>
							<issueb></issueb>
							<issuea></issuea>
						</task>
						<task>
							<issuec></issuec>
						</task>
						<div class="tasks-action">
							<publisher></publisher>
						</div>
					</div>
				</div>
			</div>
			<board-configs></board-configs>
			<new-task></new-task>
			<view-task></view-task>
		</div>
	</default-layout>
</template>

<script>
	import { mapGetters, mapActions } from 'vuex'
	import Task from './partials/Task'
	import Issuea from './partials/Issuea'
	import Issueb from './partials/Issueb'
	import Issuec from './partials/Issuec'
	import NewTask from './partials/NewTask'
	import ViewTask from './partials/ViewTask'
	import Publisher from './partials/Publisher'
	import BoardConfigs from './partials/BoardConfigs'
	import DropdownInviteMembers from './partials/DropdownInviteMembers'

	export default {
		metaInfo: {
			title: 'Boards'
		},

		computed: {
			//
		},

		mounted(){
			//
		},

		components: {
			Task,
			Issuea,
			Issueb,
			Issuec,
			NewTask,
			ViewTask,
			Publisher,
			BoardConfigs,
			DropdownInviteMembers
		},
	}
</script>
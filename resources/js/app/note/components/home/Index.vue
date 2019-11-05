<template>
	<default-layout>
		<div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">
			<div class="page-inner page-inner-fill position-relative">
				<header class="page-navs bg-light shadow-sm pdt10">
					<div class="input-group has-clearable">
						<button type="button" class="close" aria-label="Close">
						<span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
						</button>
						<label class="input-group-prepend" for="searchClients">
						<span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
						</label>
						<input type="text" class="form-control" id="searchClients" data-filter=".board .list-group-item" placeholder="Find clients">
					</div>
				</header>
				<button type="button" class="btn btn-primary btn-floated position-absolute" data-toggle="modal" data-target="#clientNewModal" title="Add new note">
				<i class="fa fa-plus"></i>
				</button>
				<vue-perfect-scrollbar>
					<div class="p-0 aside-menu overflow-hidden">
						<note-lists></note-lists>
					</div>
				</vue-perfect-scrollbar>
			</div>
			<div class="page-sidebar bg-light">
				<header class="sidebar-header d-xl-none">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">
								<a href="#">
									<i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back
								</a>
							</li>
						</ol>
					</nav>
				</header>
				<div class="sidebar-section sidebar-section-fill">
					<note-detail></note-detail>
				</div>
			</div>

			<new-note-modal></new-note-modal>
		</div>
	</default-layout>
</template>

<script>
	import NoteLists from './partials/NoteLists'
	import NoteDetail from './partials/NoteDetail'
	import NewNoteModal from './partials/NewNoteModal'
	import { mapGetters, mapActions } from 'vuex'

	export default {
		components: {
			NoteLists,
			NoteDetail,
			NewNoteModal
		},

		metaInfo: {
			title: 'Notes'
		},

		mounted(){
			//
		}
	}
</script>
<template>
	<default-layout>
		<div class="page has-sidebar has-sidebar-expand-xl">
			<div class="page-inner">
				<header class="page-title-bar">
					<div class="d-flex justify-content-between align-items-center">
						<button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
					</div>
					<div class="row text-center text-sm-left">
						<div class="col-sm-auto col-12 mb-2">
							<div class="has-badge has-badge-bottom">
								<a href="#" class="user-avatar user-avatar-xl">
								<img src="/images/profile.jpg" alt="">
								</a>
								<span class="tile tile-circle tile-xs" data-toggle="tooltip" title="Public">
									<i class="fas fa-globe"></i>
								</span>
							</div>
						</div>
						<div class="col">
							<h1 class="page-title">Creative Division</h1>
							<p class="text-muted">We make stunning and cool responsive web and app design which suitable for any project purpose for your business.</p>
						</div>
					</div>
				</header>
				<div class="page-section">
					<div class="section-block">
						<div class="feed-publisher rounded">
							<publisher />
						</div>
						<feed />

						<feed-attachment />

						<feed-link />
						
						<photo-swipe />
					</div>
				</div>
			</div>
			<div class="page-sidebar page-sidebar-fixed">
				<header class="sidebar-header d-sm-none">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">
								<a href="#" onclick="">
								<i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back
								</a>
							</li>
						</ol>
					</nav>
				</header>
				<div class="sidebar-section-fill ">
					<div class="card card-reflow">
						<div class="card-body border-top">
							<div class="d-flex justify-content-between my-3">
								<h4 class="card-title">Recent activity</h4>
								<a href="#">View all</a>
							</div>
							<timeline />
						</div>
					</div>
				</div>
			</div>
		</div>
	</default-layout>
</template>

<script>
	import { mapGetters, mapActions } from 'vuex'
	import Timeline from './partials/Timeline'
	import Publisher from './partials/Publisher'
	import Feed from './partials/Feed'
	import FeedAttachment from './partials/FeedAttachment'
	import FeedLink from './partials/FeedLink'
	import PhotoSwipe from './partials/PhotoSwipe'

	export default {
		middleware: [
	    	//
	    ],
	    
		components:{
			Feed,
			FeedLink,
			Timeline,
			Publisher,
			PhotoSwipe,
			FeedAttachment
		},

		methods: {
			//
		},

		metaInfo: {
			title: 'Feeds'
		},

		mounted(){
			//
		}
	}
</script>

<template>
<div class="feed">
	<div class="feed-post card">
		<div class="card-header card-header-fluid">
			<a href="#" class="btn-account" role="button">
				<div class="user-avatar user-avatar-lg">
					<img src="/images/profile.jpg" alt="">
				</div>
				<div class="account-summary">
					<p class="account-name">Christina Gray</p>
					<p class="account-description">New member &middot; Yesterday at 5:48 PM</p>
				</div>
			</a>
			<dropdown />
		</div>
		<div class="card-body">
			<p class="mb-2">Hey there! this is a post with Attachments, <a href="#" class="mention">@stilearning</a> ratione doloremque eos <a href="#" class="hashtag">#looper</a> aliquid ipsam, molestias cumque asperiores mollitia nam corrupti dolore recusandae nihil?</p>
			<div class="pswp-gallery">
				<div class="feed-attachments">
					<div class="attachment-item">
						<attachment />
					</div>
					<div class="attachment-item">
						<attachment />
					</div>
				</div>
			</div>
			<div class="feed-summary">
				<a href="#" class="feed-summary-item mr-auto">6.3K likes</a>
				<a href="#" class="feed-summary-item">826 comments</a>
				<a href="#" class="feed-summary-item">&middot;</a>
				<a href="#" class="feed-summary-item">2.9K shares</a>
			</div>
		</div>
		<div class="card-footer">
			<div class="card-footer-item">
				<button type="button" class="btn btn-reset text-nowrap text-muted"><i class="fa fa-fw fa-heart"></i> Like</button>
			</div>
			<div class="card-footer-item">
				<button type="button" class="btn btn-reset text-nowrap text-muted"><i class="fa fa-fw fa-comment"></i> Comment</button>
			</div>
			<div class="card-footer-item">
				<button type="button" class="btn btn-reset text-nowrap text-muted"><i class="fa fa-fw fa-share"></i> Share</button>
			</div>
		</div>
	</div>
</div>
</template>

<script>
	import Dropdown from './Dropdown'
	import Attachment from './Attachment'

	export default {
		components:{
			Dropdown,
			Attachment
		}
	}
</script>
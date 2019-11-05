<template>
<div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
	<h6 class="dropdown-header stop-propagation">
		<span>Messages</span>
		<a href="#">Mark all as read</a>
	</h6>
	<div class="dropdown-scroll perfect-scrollbar">
		<vue-perfect-scrollbar class="scroll-area" v-once :settings="settings" @ps-scroll-y="scrollHandle">
			<a href="#" class="dropdown-item unread" v-for="i, index in 10" :key="index">
				<div class="user-avatar">
					<img src="/images/profile.jpg" alt="">
				</div>
				<div class="dropdown-item-body">
					<p class="subject"> Gold Dex </p>
					<p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p>
					<span class="date">1 day ago</span>
				</div>
			</a>
		</vue-perfect-scrollbar>
	</div>
	<a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
</div>
</template>

<script>
	export default {
		data() {
			return {
				settings: {
					// maxScrollbarLength: 60
				}
			}
		},
		methods: {
			scrollHandle(evt) {

			}
		}
	}
</script>

<style lang="scss" scoped>
	.scroll-area {
		position: relative;
		margin: auto;
		height: 262px;
	}
</style>
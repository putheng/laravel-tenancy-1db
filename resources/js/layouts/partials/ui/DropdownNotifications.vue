<template>
<div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
	<h6 class="dropdown-header stop-propagation">
		<span>Activities <span class="badge">(2)</span></span>
	</h6>
	<!-- .dropdown-scroll -->
	<div class="dropdown-scroll perfect-scrollbar">
		<!-- .dropdown-item -->
		<vue-perfect-scrollbar class="scroll-area" v-once :settings="settings" @ps-scroll-y="scrollHandle">
			<a href="#" class="dropdown-item unread" v-for="i, index in 10" :key="index">
				<div class="user-avatar">
					<img src="/images/profile.jpg" alt="">
				</div>
				<div class="dropdown-item-body">
					<p class="text">Jeffrey Wells created a schedule</p>
					<span class="date">Just now</span>
				</div>
			</a>
			<!-- /.dropdown-item -->
		</vue-perfect-scrollbar>
		<!-- /.dropdown-item -->
	</div>
	<!-- /.dropdown-scroll -->
	<a href="user-activities.html" class="dropdown-footer">All activities <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
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
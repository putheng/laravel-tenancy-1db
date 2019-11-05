<template>
<aside class="app-aside app-aside-expand-md app-aside-light">
	<div class="aside-content">
		<header class="aside-header d-block d-md-none">
			<button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
				<span class="user-avatar user-avatar-lg">
					<img src="/images/profile.jpg" alt="">
				</span>
				<span class="account-icon">
					<span class="fa fa-caret-down fa-lg"></span>
				</span>
				<span class="account-summary">
					<span class="account-name">Username</span>
					<span class="account-description">Marketing Manager</span>
				</span>
			</button>
			<div id="dropdown-aside" class="dropdown-aside collapse">
				<div class="pb-3">
					<router-link class="dropdown-item" to="#">
						<span class="dropdown-icon oi oi-person"></span>
						Profile
					</router-link>
					<router-link class="dropdown-item" to="#">
						<span class="dropdown-icon oi oi-pulse"></span>
						Activities
					</router-link>

					<app-logout/>
					<template>
						<div class="dropdown-divider"></div>
						<router-link class="dropdown-item corrent-workspace" to="#">
							Workspace
						</router-link>
						<template v-for="i,x in 5">
							<a href="#" class="dropdown-item">
								Worspace name
							</a>
						</template>
					</template>
					<div class="dropdown-divider"></div>
					<router-link class="dropdown-item" to="#">
						Create workspace
					</router-link>
				</div>
			</div>
		</header>
			<vue-perfect-scrollbar>
				<div class="aside-menu overflow-hidden">
					<nav id="stacked-menu" class="stacked-menu">
						<ul class="menu">
							<li class="menu-item">
								<router-link :to="{name:'note-home'}" class="menu-link">
									<span class="menu-icon fas fa-book"></span>
									<span class="menu-text">Notes</span>
								</router-link>
							</li>

							<li class="menu-item">
								<router-link :to="{name:'feed-home'}" class="menu-link">
									<span class="menu-icon fas fa-address-card"></span>
									<span class="menu-text">Feeds</span>
								</router-link>
							</li>
							
							<li class="menu-item">
								<router-link :to="{name:'board-index'}" class="menu-link">
									<span class="menu-icon fas fa-tasks"></span>
									<span class="menu-text">Boards</span>
								</router-link>
							</li>

							<li class="menu-header d-flex justify-content-between cursor-pointer">
								<span  class="cursor-pointer">
									Teams
								</span>
								<span class="menu-icon fas fa-plus-circle"></span>
							</li>

								<li class="menu-item" v-for="i, x in 10">
									<router-link :to="{name:'chat-team'}" class="menu-link">
										<span class="menu-icon fas fa-at c-icon"></span>
										<span class="menu-text">Team</span>
									</router-link>
								</li>

							<li 
								class="menu-header d-flex justify-content-between cursor-pointer"
								data-toggle="modal" data-target="#NewChatModal"
							>
								<span>
									Conversations
								</span>
								<span class="menu-icon fas fa-plus-circle"></span>
							</li>
								<li class="menu-item" v-for="i, x in 10">
									<router-link :to="{name:'chat-chat'}" class="menu-link">
										<span class="menu-icon fas fa-circle c-icon"></span>
										<span class="menu-text">Conversations</span>
									</router-link>
								</li>
						</ul>
					</nav>
				</div>
			</vue-perfect-scrollbar>
		<footer class="aside-footer border-top p-3 text-center">
			<input type="text" class="form-control form-control-sm" placeholder="Seach ...">
		</footer>
	</div>
</aside>
</template>

<script>
	import { mapGetters }  from 'vuex'

	export default {
		data(){
			return {
				//
			}
		},
		computed: {
			//
		},
		methods: {
			openModel(){
				//
			}
		}
	}
</script>
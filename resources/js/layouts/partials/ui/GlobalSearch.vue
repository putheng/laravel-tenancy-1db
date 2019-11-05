<template>
<div class="top-bar-item top-bar-item-full">
<form class="top-bar-search">
   <div class="input-group input-group-search dropdown" id="globalSearch">
      <div class="input-group-prepend">
         <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
      </div>
      <input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search">
      <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 top10">
         <div class="dropdown-arrowb ml-3"></div>
	         <div class="dropdown-scroll perfect-scrollbar">
	         	<vue-perfect-scrollbar class="scroll-area" v-once :settings="settings" @ps-scroll-y="scrollHandle">
		            <div class="list-group list-group-flush list-group-reflow mb-2">
		               <h6 class="list-group-header d-flex justify-content-between">
		                  <span>Shortcut</span>
		               </h6>
		               <div class="list-group-item py-2">
		                  <a href="#" class="stretched-link"></a>
		                  <div class="tile tile-sm bg-muted">
		                     <i class="fas fa-user-plus"></i>
		                  </div>
		                  <div class="ml-2"> Create user </div>
		               </div>
		               <div class="list-group-item py-2">
		                  <a href="#" class="stretched-link"></a>
		                  <div class="tile tile-sm bg-muted">
		                     <i class="fas fa-dollar-sign"></i>
		                  </div>
		                  <div class="ml-2"> Create invoice </div>
		               </div>
		               <h6 class="list-group-header d-flex justify-content-between mt-2">
		                  <span>In projects</span> <a href="#" class="font-weight-normal">Show more</a>
		               </h6>
		               <div class="list-group-item py-2">
		                  <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
		                  <div class="user-avatar user-avatar-sm bg-muted">
		                     <img src="/images/bootstrap.svg" alt="">
		                  </div>
		                  <div class="ml-2">
		                     <div class="mb-n1"> Bootstrap </div>
		                     <small class="text-muted">Just now</small>
		                  </div>
		               </div>
		               <div class="list-group-item py-2">
		                  <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
		                  <div class="user-avatar user-avatar-sm bg-muted">
		                     <img src="/images/slack.svg" alt="">
		                  </div>
		                  <div class="ml-2">
		                     <div class="mb-n1"> Slack </div>
		                     <small class="text-muted">Updated 25 minutes ago</small>
		                  </div>
		               </div>
		               <h6 class="list-group-header d-flex justify-content-between mt-2">
		                  <span>Another section</span> <a href="#" class="font-weight-normal">Show more</a>
		               </h6>
		               <div class="list-group-item py-2">
		                  <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
		                  <div class="tile tile-sm bg-muted"> P </div>
		                  <div class="ml-2">
		                     <div class="mb-n1"> Product name </div>
		                  </div>
		               </div>
		            </div>
	        	</vue-perfect-scrollbar>
	        	
	         </div>
         <a href="#" class="dropdown-footer">Show all results</a>
      </div>
   </div>
</form>
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

<style lang="scss">
	.scroll-area {
		position: relative;
		margin: auto;
		height: 262px;
	}
</style>
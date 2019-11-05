<template>
	<router-view />
</template>

<script>
	import { mapActions }  from 'vuex'

	export default {
		methods: {
			//
		},

		mounted(){
			Popper.Defaults.modifiers.computeStyle.gpuAcceleration = false
		},
		
		metaInfo: {
			titleTemplate: '%s | Finflux'
		}
	}
</script>
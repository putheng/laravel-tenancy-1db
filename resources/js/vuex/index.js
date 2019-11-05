import Vue from 'vue'
import Vuex from 'vuex'

import state from './state'
import * as actions from './actions'
import * as mutations from './mutations'
import * as getters from './getters'

/*import*/
import file from '../app/file/vuex'
import board from '../app/board/vuex'
import home from '../app/home/vuex'
import calendar from '../app/calendar/vuex'
import note from '../app/note/vuex'
import feed from '../app/feed/vuex'
import chat from '../app/chat/vuex'
import auth from '../app/auth/vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state,
	actions,
	mutations,
	getters,
    modules: {
		auth:auth,
		chat:chat,
		feed:feed,
		note:note,
		calendar:calendar,
		home:home,
		board:board,
		file:file,
		/*export*/
    }
})

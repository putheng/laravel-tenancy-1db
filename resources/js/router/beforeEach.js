import store from '../vuex'
import middlewarePipeline from './kernel/middlewarePipeline.js'

const beforeEach = ((to, from, next) => {
    store.dispatch('clearValidationErrors')
    store.commit('clearMessage')
    
    let middleware = to.matched.map((matched) => {
    	return matched.components.default.options.middleware
    })
    .filter((middleware) => {
    	return middleware != undefined
    })
    .flat()

    if(!middleware.length){
    	return next()
    }

    const context = {
    	to,
    	from,
    	next,
    	store
    }

    return middleware[0]({ ...context, next: middlewarePipeline(context, middleware, 1) })

    next()
})

export default beforeEach
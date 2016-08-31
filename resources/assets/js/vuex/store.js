import Vue from 'vue'
import Vuex from 'vuex'
import menu from '../config/menu'


Vue.use(Vuex)
Vue.config.debug = true

const debug = process.env.NODE_ENV !== 'production'

// export default new Vuex.Store({
//   modules: {
//     cart,
//     products
//   },
//   strict: debug,
//   plugins: debug ? [createLogger()] : []
// })


export default new Vuex.Store({

  state: {
    menu
  },

  mutations: {

  }
})
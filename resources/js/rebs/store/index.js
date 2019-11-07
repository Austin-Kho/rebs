// store/index.js

import Config from "../Config"
import CONST from "../CONST"

import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex);

const store = new Veux.Store({
   state: {
      token: null
   },
   getters: {

   },
   mutations: {
      [CONST.LOGIN]: (state, {token}) => {
         state.token = token
      },
      [CONST.LOGOUT]: (state) => {
         state.token = null
      }
   },
   actions: {
      [CONST.LOGIN]: (store, {email, password}) => {
         axios.post(Config.LOGIN_API, {email, password})
            .then(({data}) => store.commit(CONST.LOGIN, data))
      },
      [CONST.LOGOUT]: (store) => {

         store.commit(CONST.LOGOUT)
      },
   }
});

export default store;
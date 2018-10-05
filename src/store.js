import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Vuex);
Vue.use(VueAxios, axios)
let axiosDefaults = require('axios/lib/defaults');
axiosDefaults.baseURL = 'https://api.github.com';

export default new Vuex.Store({
  
  state: {
    accessToken: null,
    profiles: [],
    repositories: [],
    loggingIn: false,
    loginError: null

  },
  mutations: {
    //updating access token
    
    updateAccessToken: (state, accessToken) => {
      state.accessToken = accessToken
    },

    SET_PROFILES (state, profiles) {
      state.profiles = profiles
    },
    SET_REPOSITORIES (state, repositories) {
      state.repositories = repositories
    }
  },
  actions: { 
//fetching data 
    loadProfiles ({ commit }) {
      axios
        .get('http://localhost:3000/profiles')
        .then(r => r.data)
        .then(profiles => {
        commit('SET_PROFILES', profiles)
        })
    },
    loadRepositories ({ commit }) {
      axios
        .get('http://localhost:3000/profiles')
        .then(r => r.data)
        .then(repositories => {
        commit('SET_REPOSITORIES', repositories)
        })
    }
    
  },
});

import { createStore } from 'vuex';

const store = createStore({
  state: {
    isAuthenticated: false,
    user: null
  },
  mutations: {
    setAuthentication(state, status) {
      state.isAuthenticated = status;
    },
    setUser(state, user) {
      state.user = user;
    }
  },
  actions: {
    login({ commit }, user) {
      // Aquí puedes hacer una llamada a la API para autenticar al usuario
      // y luego guardar el estado de autenticación y los datos del usuario
      commit('setAuthentication', true);
      commit('setUser', user);
    },
    logout({ commit }) {
      commit('setAuthentication', false);
      commit('setUser', null);
    }
  },
  getters: {
    isAuthenticated: state => state.isAuthenticated,
    user: state => state.user
  }
});

export default store;
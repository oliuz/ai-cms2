import Vue from 'vue'
import SuiVue from 'semantic-ui-vue';
import PassportClient from './components/passport/Clients.vue'
import AuhorizeClient from './components/passport/AuthorizedClients.vue'
import PAT from './components/passport/PersonalAccessTokens.vue'
import MangaList from './components/manga/manga-list.vue'
import Loading from './components/dimmer-loading.vue'
import Login from './pages/Login.vue'

Vue.use(SuiVue)
Vue.component('manga-list', MangaList)
Vue.component('loading', Loading)
Vue.component('passport-clients', PassportClient)
Vue.component('passport-authorized-clients', AuhorizeClient)
Vue.component('passport-personal-access-tokens', PAT)
Vue.component('login-btn', Login)

const bus = new Vue()

Vue.prototype.$bus = bus

const app = new Vue({ // eslint-disable-line no-new
    el: '#app',
})
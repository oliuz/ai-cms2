import Vue from 'vue'
import axios from 'axios'
import SuiVue from 'semantic-ui-vue';
import PassportClient from './components/passport/Clients.vue'
import AuhorizeClient from './components/passport/AuthorizedClients.vue'
import PAT from './components/passport/PersonalAccessTokens.vue'
import MangaList from './components/manga/manga-list.vue'
import ChapterList from './components/chapter/chapter-list.vue'
import Loading from './components/dimmer-loading.vue'
import Login from './pages/Login.vue'

let setup = () => {
    let token = document.head.querySelector('meta[name="csrf-token"]');

    if ('accessToken' in window.localStorage) {
        let accessToken = window.localStorage['accessToken']

        axios.defaults.headers.common['Authorization'] = 'Bearer ' + accessToken
    }

    if (token) {
        axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
    }

    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
}

Vue.use(SuiVue)
Vue.component('manga-list', MangaList)
Vue.component('chapter-list', ChapterList)
Vue.component('loading', Loading)
Vue.component('passport-clients', PassportClient)
Vue.component('passport-authorized-clients', AuhorizeClient)
Vue.component('passport-personal-access-tokens', PAT)
Vue.component('login-btn', Login)

const bus = new Vue()

Vue.prototype.$bus = bus

const app = new Vue({ // eslint-disable-line no-new
    el: '#app',
    created() {
        setup()
    }
})
import Vue from 'vue'
import SuiVue from 'semantic-ui-vue';
import MangaList from './components/manga/manga-list.vue'
import Loading from './components/dimmer-loading.vue'

Vue.use(SuiVue)
Vue.component('manga-list', MangaList)
Vue.component('loading', Loading)

const bus = new Vue()

Vue.prototype.$bus = bus

const app = new Vue({ // eslint-disable-line no-new
    el: '#app',
})
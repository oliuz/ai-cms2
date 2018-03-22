import Vue from 'vue'

const bus = new Vue()

Vue.prototype.$bus = bus

const app = new Vue({ // eslint-disable-line no-new
    el: '#app',
})

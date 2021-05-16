require('../bootstrap')
const Vue = require('Vue')
const router = require('./router.ts')
const store = require('./store/index.ts')
const MkApp = require('./components/MkApp.vue').default
const MkSider = require('./components/MKSider.vue').default
const ElementPlus = require('element-plus')
require('element-plus/lib/theme-chalk/index.css')


const app = Vue.createApp(MkApp)
app.use(router.default)
app.use(store.default)
app.use(ElementPlus)
app.component(MkSider.name, MkSider)
app.mount('#app')
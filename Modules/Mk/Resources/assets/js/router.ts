import {createRouter, createWebHashHistory} from "vue-router";

const routes = [
   { path: '/structure', component: require('./components/MkStructure').default, name: 'structure' },
   { path: '/logic', component: require('./components/MkLogic').default, name: 'logic' },
]

const router = createRouter({
   history: createWebHashHistory('/'),
   routes,
});

export default router

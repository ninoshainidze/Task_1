import Vue from 'vue';
import router from 'vue-router';

Vue.use(router)

const VueRouter = new router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [    
    ],
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 };
    }
})

export default VueRouter
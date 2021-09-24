import Vue from 'vue';
import router from 'vue-router';
// import HomePage from './view/UserPages/HomePage';
// import ProjectPage from './view/UserPages/ProjectPage';
// import AboutUsPage from './view/UserPages/AboutUsPage';
// import ContactPage from './view/UserPages/ContactPage';
// import ServicePage from './view/UserPages/ServicePage';
// import PriceReturn from './view/UserPages/PriceReturn';
// import GeorgiaHistory from './view/UserPages/GeorgiaHistory';
// import Blog from './view/UserPages/Blog';
// import BlogContent from './components/Blog/BlogContent';
// import Projects from './components/ProjectPage/Projects';

Vue.use(router)

const VueRouter = new router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        // { path:'/',  component: HomePage },
        // { path:'/project',  component: ProjectPage },
        // { path:'/about',  component: AboutUsPage },
        // { path:'/contact',  component: ContactPage },     
        // { path:'/service',  component: ServicePage },     
        // { path:'/priceReturn',  component: PriceReturn },     
        // { path:'/georgiahistory',  component: GeorgiaHistory },     
        // { path:'/blog',  component: Blog },     
        // { path:'/blogcontent', name:"blogcontent", component: BlogContent },     
        // { path:'/projectsDetail',  component: Projects },     
    ],
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 };
    }
})

export default VueRouter
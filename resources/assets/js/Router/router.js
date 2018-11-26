import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

/** Import routes */
import Login from "../components/Login/Login";
import SignUp from "../components/Login/SignUp";
import Forum from "../components/Forum/Forum.vue";

var local = "/Forum-App/public/";

const routes = [
    {
        path: "/login",
        component: Login,
        name: "login"
    },
    {
        path: "/signup",
        component: SignUp,
        name: "signup"
    },
    {
        path: "/forum",
        component: Forum,
        name: "forum"
    }
];

const router = new VueRouter({
    routes, // short for `routes: routes`
    // hashbang: false,
    mode: "history"
});

export default router;

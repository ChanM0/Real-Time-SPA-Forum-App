import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

/** Import routes */
import Login from "../components/Login/Login";

var local = "/Forum-App/public/";

const routes = [
    {
        path: "/login",
        component: Login
    }
];

const router = new VueRouter({
    routes, // short for `routes: routes`
    // hashbang: false,
    mode: "history"
});

export default router;

import Vue from "vue";
import Router from "vue-router";

import ListPizzasComponent from "./views/pizzas/List.vue";

Vue.use(Router);

const routes = [
    { path: "/pizzas", component: ListPizzasComponent, name: "pizzas-list" },
    { path: "*", redirect: "/pizzas" }
];

export default new Router({
    routes,
    mode: "hash"
});

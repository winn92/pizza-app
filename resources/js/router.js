import Vue from "vue";
import Router from "vue-router";

import ListPizzasComponent from "./views/pizzas/List.vue";
import ListToppingsComponent from "./views/toppings/List.vue";
import FormToppingsComponent from "./views/toppings/Form.vue";

Vue.use(Router);

const routes = [
    { path: "/pizzas", component: ListPizzasComponent, name: "pizzas-list" },
    { path: "/toppings", component: ListToppingsComponent, name: "toppings-list" },
    { path: "/toppings/create", component: FormToppingsComponent, name: "toppings-create" },
    { path: "*", redirect: "/pizzas" }
];

export default new Router({
    routes,
    mode: "hash"
});

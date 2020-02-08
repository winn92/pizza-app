require("./bootstrap");

import Vue from "vue";

import router from "./router";

require("./plugins");

Vue.component(
    "app-component",
    require("./AppComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router
});

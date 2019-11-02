import Vue from "vue";
import vuetify from "./plugins/vuetify";

const app = new Vue({
    vuetify,
    el: "#app",
    delimiters: ["[{", "}]"],
    data: {
        categories: [],
        products: [],
        selected_category: null,
        selected_products: []
    },
    mounted() {
        this.on_create();
    },
    methods: {
        on_create() {
            this.categories = window.cats;
            this.products = window.products;
        }
    }
});
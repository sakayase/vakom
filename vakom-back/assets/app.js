import Vue from 'vue'
// import { component } from 'vue/types/umd'
import Conseil from "./components/Conseil"

// new Vue({
//     component: {Conseil},
//     template: "<Conseil />"
// }).$mount("#Conseil");
new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
})
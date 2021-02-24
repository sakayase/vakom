import Vue from 'vue'
import DemoComponent from "./components/test";
import Conseil from "./components/Conseil";

// new Vue({
//     component: {Conseil},
//     template: "<Conseil />"
// }).$mount("#Conseil");
new Vue({
    components: { Conseil },
    template: "<Conseil />"
}).$mount("#app ");
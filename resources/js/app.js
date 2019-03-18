require('./bootstrap');
window.Vue = require('vue');



Vue.component('example-component', require('./components/HeaderComponent.vue').default);


const app = new Vue({
    el: '#app',
    mounted: function () {
        Metro.init();
    }
});

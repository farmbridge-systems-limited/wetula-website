require('./bootstrap');
window.Vue = require('vue');
window.VueGoogleMaps = require('vue2-google-maps');
window.Vuelidate = require('vuelidate');


Vue.use(Vuelidate);
Vue.use(VueGoogleMaps, {
    key: 'AIzaSyAyEBbnGhCIgALnVG82bVwQPCQmHl3KXzQ',
    libraries: 'places'
});

Vue.component('map-component', require('./components/MapComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('customer-segment-nav-component', require('./components/CustomerSegmentNavComponent.vue').default);
Vue.component('term-of-service-nav', require('./components/TermOfServiceNav.vue').default);
Vue.component('privacy-policy-nav', require('./components/PrivacyPolicyNav.vue').default);


const app = new Vue({
    el: '#app',
    mounted: function () {
        Metro.init();
    }
});

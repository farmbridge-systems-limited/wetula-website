<template>
    <div>
        <section class="">
            <div class="w-100 row" id="gmap-container" style="height: 360px">

            </div>
            <div class="bg-green drop-shadow fg-white p-4 w-25 ml-20 mb-20" id="location-details"
                 style="margin-top: -280px">
                <h5>Our Location Details</h5>
                <p><span class="mif-location-city"></span> FarmBridge Limited <br>
                    <span class="mif-location"></span>Room 26, Bishop Arthur Center <br>
                    <span class="mif-map"></span> St. Cyprians Anglican Cathedral, Maxwell Road, Fante - New Town <br>
                    <span class="mif-my-location"></span>Kumasi - Ghana, West Africa
                </p>
            </div>
        </section>
    </div>
</template>

<script>

    var vuelidateMixin = window.Vuelidate.validationMixin;
    const {
        required,
        minLength,
        maxLength,
        between,
        email,
        numeric
    } = require('vuelidate/lib/validators');
    export default {
        name: "MapComponent",
        components: {},
        mixins: [
            vuelidateMixin
        ],
        data() {
            return {
                submitted: false,
                showLoadingIndicator: false,
                name: '',
                email: '',
                subject: '',
                message: ''
            };
        },
        validations: {
            name: {
                required,
                minLength: minLength(4)
            },
            email: {
                required,
                email
            },
            subject: {
                minLength: minLength(4)
            },
            message: {
                required,
                minLength: minLength(4)
            }
        },
        mounted() {
            let self = this;
            $(document).ready(function () {
                self.initGoogleMaps();
            });

        },
        methods: {
            submitMessage: function () {
                const self = this;
                this.showLoadingIndicator = true;

                this.$v.$touch();
                if (this.$v.$invalid) {
                    scrollBy(0, -800);
                    Metro.toast.create('Some fields are not valid yet. Please enter the correct values', null, null, "alert");
                    this.showLoadingIndicator = false;
                } else {
                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('email', this.email);
                    formData.append('subject', this.subject);
                    formData.append('additional_message', this.message);

                    axios.default.post('contact', formData)
                        .then(function (response) {
                            if (response.data.success) {
                                self.submitted = true;
                                scrollBy(0, -800);
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                            self.submitted = false;
                            Metro.toast.create('An error occured while submitting the message', null, null, "alert");
                        })
                        .finally(function () {
                            self.showLoadingIndicator = false;
                        })
                }
            },
            createGoogleMaps: function () {
                return new Promise((resolve, reject) => {
                    let gmap = document.createElement('script');
                    gmap.src = ``;
                    gmap.type = 'text/javascript';
                    gmap.onload = resolve;
                    gmap.onerror = reject;
                    document.body.appendChild(gmap);
                })
            },
            toggleBounce: function () {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            },
            initGoogleMaps: function () {
                let url = {lat: 6.6920225, lng: -1.6129136};
                // We would set up our options object beforehand or grab it from Redux in my case
                this.vueGMap = new google.maps.Map(document.getElementById('gmap-container'), {
                    center: url,
                    zoom: 16
                });

                var image = '../../images/bed_facility.jpg';
                var marker = new google.maps.Marker({
                    position: url,
                    map: this.vueGMap,
                    animation: google.maps.Animation.DROP,
                    title: 'FarmBridge Limited',
                    // icon: image
                });

                marker.addListener('click', this.toggleBounce);


            }
        }
    }
</script>

<style scoped>

</style>

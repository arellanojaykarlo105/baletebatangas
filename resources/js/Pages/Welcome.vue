<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import PrimaryButton from "../Components/PrimaryButton.vue";
import NavBar from "../Components/NavBar.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <NavBar/>
    
    <div>
        <section>
            <div class="border-transparent rounded-md shadow-lg focus:box-content h-40 w-auto p-4 border-4 bg-green-300">
                <div >
                    <div>
                        <div>
                            <div>
                                <h2 class="text-white font-sans text-7xl font-semibold text-center">
                                    MUNICIPALITY OF BALETE BATANGAS
                                </h2>
                            </div>
                            <div>
                                <h4 class="text-black text-xl font-sans text-center">
                                    You're welcome to our MUNICIPALITY
                                </h4>
                            </div>
                            <div>
                                <div
                                    class="wow fadeInRight"
                                    data-wow-delay="0.1s"
                                >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div
                                class="wow fadeInUp"
                                data-wow-duration="2s"
                                data-wow-delay="0.2s"
                            >
                                <img
                                    src="Picture/municipal.jpg"
                                    class="img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-900 bg-ttuPattern bg-cover py-20 sm:py-32" >
                        <div>  
                            <h2
                                class="text-neutral-900 text-center text-6xl font-semibold font-sans"
                            >
                                Welcome to Balete, Batangas
                            </h2>
                        </div>
                        <div><img class="h-80 w-80 animate-jump-in animate-ease-in animate-delay-300" src="../../images/mayor.png" alt="">
                            <h4
                                class="mt-20 text-white text-center font-semibold font-sans text-2xl"
                            >
                                The Municipality of Balete in Batangas is a warm
                                hug to those who long to veer away from the
                                troubles of the city. Bike in and around the
                                place and feel the gentle hills beneath, observe
                                a little bit more and take-in the slow, relaxing
                                cadence of suburban life. Find yourself in a
                                handful of recreational resorts and be
                                overwhelmed not only by the amenities but also
                                by its serene backdrop--- Lake Taal. Witness the
                                crimson sun set as it hides itself behind the
                                famous Taal Volcano, munch on a healthy serving
                                of Sumang Dapa paired with a steaming cup of
                                Barako, and you'd have one of the most
                                comforting afternoons of your life.
                            </h4>
                        </div>
        </section>

        <footer
            style="
                background-image:-moz-linear-gradient(#000000,#097950,#00d4ff); 
                color: ;
            "
        >
            <div class="shadow-XL container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>FROM OUR BELOVED</h5>
                                <p style="color: #0a0a0a">
                                    Mayor Wilson Maralit
                                </p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Information</h5>
                                <ul>
                                    <li>
                                        <a style="color: #0a0a0a" href="#"
                                            >Home</a
                                        >
                                    </li>
                                    <li>
                                        <a style="color: #0a0a0a" href="#"
                                            >Location</a
                                        >
                                    </li>
                                    <li>
                                        <a style="color: #0a0a0a" href="#"
                                            >Barangays</a
                                        >
                                    </li>
                                    <li>
                                        <a style="color: #0a0a0a" href="#"
                                            >Mayor</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>VISIT US</h5>
                                <p>At our municipal hall</p>
                                <ul>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i
                                                class="fa fa-calendar-o fa-stack-1x fa-inverse"
                                            ></i>
                                        </span>
                                        Monday - Saturday, 8am to 10pm
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i
                                                class="fa fa-phone fa-stack-1x fa-inverse"
                                            ></i>
                                        </span>
                                        (043) 740 9638
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i
                                                class="fa fa-envelope-o fa-stack-1x fa-inverse"
                                            ></i>
                                        </span>
                                        xinfo@baletebatangas.gov.ph
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Our location</h5>
                                <p>Poblacion, Balete, Batangas</p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Follow us</h5>
                                <ul class="company-social">
                                    <li class="social-facebook">
                                        <a
                                            href="https://www.facebook.com/559896924173732?ref=embed_page"
                                            ><i class="fa fa-facebook"></i
                                        ></a>
                                    </li>
                                    <li class="social-twitter">
                                        <a href="#"
                                            ><i class="fa fa-twitter"></i
                                        ></a>
                                    </li>
                                    <li class="social-google">
                                        <a
                                            href="https://www.baletebatangas.gov.ph/"
                                            ><i class="fa fa-google"></i
                                        ></a>
                                    </li>
                                    <li class="social-vimeo">
                                        <a href="#"
                                            ><i class="fa fa-vimeo-square"></i
                                        ></a>
                                    </li>
                                    <li class="social-dribble">
                                        <a href="#"
                                            ><i class="fa fa-dribbble"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Core JavaScript Files -->
    <!-- <script src="js/wow.min.js"></script>
<script src="js/stellar.js"></script>
<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script> -->
</template>

<style>
/* Custom styles not handled by Tailwind */
.bg-skin {
    background: #0062cc;
}

.nav > li > a:hover,
.nav > li > a:focus {
    text-decoration: none;
    background-color: #251f1f00;
}

.btn-skin {
    background-color: #0062cc;
    border-color: #0062cc;
}

.box h4 {
    font-size: 24px;
    color: rgb(255, 255, 255);
}

.service-desc h5 {
    margin-bottom: 10px;
    color: white;
}

.fa-stethoscope:before {
    color: white;
}

.fa-h-square:before {
    color: white;
}

.fa-wheelchair:before {
    color: white;
}

.fa-filter:before {
    color: white;
}

.fa-plus-square:before {
    color: white;
}

.fa-user-md:before {
    color: white;
    background: #00ffff2b;
}

.fa-check:before {
    background: #084dbe;
}

.fa-list-alt:before {
    background: #005cd0;
}

.fa-hospital-o:before {
    background: #0eacf0de;
}

.fa-heartbeat:before {
    color: white;
}

footer .widget h5 {
    font-size: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: rgb(0, 0, 0);
}

.intro-content {
    /*background: url(../img/dummy/bg1.jpg) no-repeat top center;*/
    background: white;
    padding: 200px 0 60px;
}
</style>

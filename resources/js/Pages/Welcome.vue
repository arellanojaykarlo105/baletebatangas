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
    <NavBar :canLogin="canLogin" />
    <div class=" w-98.85vw h-30px p-5">
        <div class="navbar-header page-scroll">
            <a class="navbar-brand js-scroll-trigger" href="index.php" style="
                    margin-top: 0px;
                    font-family: 'IBM Plex Sans', sans-serif;
                ">
                <h5 class="text-white font-medium">MUNICIPALITY OF BALETE</h5>
            </a>
        </div>
        <div class="">
            <ul class="nav navbar-nav">
                <li class="active" style="
                        margin-right: 40px;
                        font-family: 'IBM Plex Sans', sans-serif;
                    "></li>
                <div style="margin-top: 10px" class="">
                    <button style="
                            background: linear-gradient
                        " type="button" class="rounded-md bg-white font-semibold btn">
                        Login to your Barangay
                    </button>
                </div>
            </ul>
        </div>
    </div>
    <div class=""
        style="background: linear-gradient(96.2deg, rgb(255, 230, 112) 10.4%, rgb(255, 100, 100) 43.8%, rgb(0, 93, 219) 105.8%);width: 98.85vw;height: 70px;padding-top: 10px;">
        <div class="navbar-header page-scroll">
            <a class="navbar-brand js-scroll-trigger" href="index.php"
                style="margin-top: 0px;font-family: 'IBM Plex Sans', sans-serif;">
                <h5 style="color: white;">LOREN</h5>
            </a>
        </div>
    </div>

    <div id="wrapper">
        <section id="intro" class="intro" style="font-family: 'IBM Plex Sans', sans-serif">
            <div class="intro-content" style="padding-top: 75px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                <h2 style="
                                        font-size: 80px;
                                        font-family: 'IBM Plex Sans', sans-serif;
                                        color: rgb(255, 255, 255);
                                    ">
                                    MUNICIPALITY OF BALETE BATANGAS
                                </h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                <h4 class="text-white text-sm font-sans">
                                    You're welcome to our MUNICIPALITY
                                </h4>
                            </div>
                            <div class="well well-trans" style="background: #ffffff00; color: white">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                        <a href="Barangay 1/about.php" class="btn btn-skin btn-lg" style="
                                                background: white;
                                                color: #006ccf;
                                            ">Learn more
                                            <i class="fa fa-angle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <img src="Picture/municipal.jpg" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div class="bg-[url('resources\images\indang1.jpg')] bg-opacity-50">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <img :src="'resources\images\mayor.png'" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h2 class="text-neutral-900 text-center text-6xl font-semibold font-sans">
                                Welcome to Balete, Batangas
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="  font-medium h-light" style="
                                    text-align: justify;
                                    font-size: 25px;
                                    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                    color: #030303;
                                ">
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
                        <div class="well well-trans" style="background: #ffffff00; color: white">
                            <div class="wow fadeInRight" data-wow-delay="0.1s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer style="
                background: linear-gradient(
                    96.2deg,
                    rgb(0, 2, 1) 10.4%,
                    rgb(10, 241, 99) 43.8%,
                    rgb(246, 246, 246) 105.8%
                );
                color: #e4d6d6;
            ">
            <div class=" shadow-XL container">
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
                                        <a style="color: #0a0a0a" href="#">Home</a>
                                    </li>
                                    <li>
                                        <a style="color: #0a0a0a" href="#">Location</a>
                                    </li>
                                    <li>
                                        <a style="color: #0a0a0a" href="#">Barangays</a>
                                    </li>
                                    <li>
                                        <a style="color: #0a0a0a" href="#">Mayor</a>
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
                                            <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                        </span>
                                        Monday - Saturday, 8am to 10pm
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                        </span>
                                        (043) 740 9638
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
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
                                        <a href="https://www.facebook.com/559896924173732?ref=embed_page"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-google">
                                        <a href="https://www.baletebatangas.gov.ph/"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li class="social-vimeo">
                                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li class="social-dribble">
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
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

.nav>li>a:hover,
.nav>li>a:focus {
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
    background: linear-gradient(96.2deg,
            rgb(0, 16, 8) 10.4%,
            rgb(5, 206, 35) 43.8%,
            rgb(143, 164, 150) 105.8%);
    padding: 200px 0 60px;
}
</style>

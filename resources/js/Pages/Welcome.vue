<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import PrimaryButton from "../Components/PrimaryButton.vue";
import Footer from '@/Components/Footer.vue'
import NavBar from "@/Components/NavBar.vue";

const bgImage = ref('https://ghogli.com.ph/wp-content/uploads/2023/04/ezgif.com-gif-maker-17.webp')

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
    <NavBar />
    <div class="bg-gray-100 py-20">
        <div class="grid grid-cols-2 mx-20 border shadow-lvl-2 bg-white">
            <div class="text-right px-4 py-6">
                <h1 class="text-8xl font-bold uppercase">Municipality of Balete Batangas</h1>
                <p class="text-2xl">Your are welcome to our Municipality</p>
            </div>
            <img :src="bgImage" alt="">
        </div>
        <div class="grid grid-cols-2 mx-20 border shadow-lvl-2 mt-10 bg-white">
            <div class="text-right px-40">
                <img class="m-auto w-full aspect-square  animate-jump-in animate-ease-in animate-delay-300"
                    src="../../images/mayor.png" alt="" />
            </div>
            <div class="text-left px-4 py-2">

                <h2 class="text-neutral-900 text-left text-6xl font-semibold font-sans">
                    Welcome to Balete, Batangas
                </h2>
                <h4 class="mt-20 text-gray-800 text-center font-semibold font-sans text-2xl">
                    The Municipality of Balete in Batangas is a warm hug to
                    those who long to veer away from the troubles of the city.
                    Bike in and around the place and feel the gentle hills
                    beneath, observe a little bit more and take-in the slow,
                    relaxing cadence of suburban life. Find yourself in a
                    handful of recreational resorts and be overwhelmed not only
                    by the amenities but also by its serene backdrop--- Lake
                    Taal. Witness the crimson sun set as it hides itself behind
                    the famous Taal Volcano, munch on a healthy serving of
                    Sumang Dapa paired with a steaming cup of Barako, and you'd
                    have one of the most comforting afternoons of your life.
                </h4>
            </div>
        </div>
    </div>
    <Footer />
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
    background: white;
    padding: 200px 0 60px;
}
</style>

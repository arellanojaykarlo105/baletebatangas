<script setup>
import { Head, Link } from '@inertiajs/vue3';

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
    <Head title="Welcome" />
    <h1 class="text-4xl font-bold ml-8 mt-10">Barangay</h1>
    <div class="bg-green-600 rounded-lg p-5 m-5 text-white">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur fugiat delectus tempora recusandae esse quae nihil, fuga ea rerum laborum quo illo totam minus dolorem obcaecati adipisci quis aliquid tenetur veniam. Magni explicabo reprehenderit eveniet quo amet, accusamus veniam dicta fugiat culpa placeat voluptates ipsum quae commodi officiis tenetur, deleniti vel iure! Molestias adipisci doloribus quaerat repellendus suscipit, maxime repudiandae dolores sint in asperiores quas nihil aliquam vero veritatis? Molestiae eius impedit architecto esse totam a amet velit accusantium autem saepe nobis ipsum, commodi hic optio harum dignissimos adipisci ratione, quaerat quod dolores rerum maiores voluptas sunt. Expedita, exercitationem nam.</p>
    </div>cccccc
    <div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore iusto est officia a veniam fuga perspiciatis aliquid! Quo, quis ipsa.</p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
    </div>
</template>

<style>

</style>

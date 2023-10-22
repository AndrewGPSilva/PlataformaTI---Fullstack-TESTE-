<template>
    <div class="flex">
        <div class="w-1/5">
            <Navbar />
        </div>
        <section class="bg-black text-white flex justify-center items-center p-5 w-4/5">
            <div class="w-full text-center">
                <h1><a href="https://www.youtube.com/channel/UC7L-jcONEz0AG56nfSQiXvA" target="_blank"><i class="pi pi-youtube text-red-700"></i></a></h1>
                <a href="/aulasvue">
                    <h1 class="flex justify-center items-center">VUE JS</h1>
                </a>
                <div class="flex flex-col">
                    <a href="https://www.youtube.com/watch?v=3gpJ-te_HHg" target="_blank">
                        <h2 class=" text-blue-500 mb-2">{{ aula.titulo }}</h2>
                    </a>
                    <iframe :src="aula.link" frameborder="0" allowfullscreen></iframe>
                    <p class="mt-6 text-orange-500">{{ aula.descricao }}</p>
                </div>
            </div>
        </section>
    </div>
</template>


<script>
import Navbar from '../Navbar.vue';

export default {
    name: "AulaVue",
    props: {
        aula: {
            type: Array
        }
    },
    components: {
        Navbar
    }
}
</script>

<style scoped>

iframe {
    width: 100%;
    height: 500px;
    border-radius: 10px;
}

</style>

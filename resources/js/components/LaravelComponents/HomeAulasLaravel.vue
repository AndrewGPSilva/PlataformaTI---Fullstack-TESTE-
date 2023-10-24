<template>
    <section class="flex w-auto">
        <header class="w-1/5">
            <Navbar />
        </header>
        <main class="bg-black text-white flex flex-col justify-center items-center p-5 w-4/5">
            <h1 class="text-orange-500 text-2xl">Aulas de Laravel Disponíveis:</h1>
            <div v-for="(aula, i) in aulas" :key="i" class="flex p-3 w-4/5">
                <div class="flex items-center">
                    <img :src="aula.imagem" alt="Thumbnail do vídeo" class="h-3/4 mr-5">
                    <div class="flex flex-col">
                        <a :href="'/aulaslaravel/' + aula.id" class="text-blue-500">{{ aula.titulo }}</a>
                        <p>{{ aula.descricao }}</p>
                        <Line />
                    </div>
                </div>
            </div>
        </main >
    </section>
</template>

<script>
import Navbar from '../../components/Navbar.vue';
import Line from '../Line.vue';

export default {
    name: "HomeAulasLaravel",
    components: { Navbar, Line },
    props: {
        'aulas': {
            type: Object
        }
    }
}
</script>

<style scoped>
img {
    width: 250px;
}
</style>

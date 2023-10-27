<template>
    <section class="flex">
        <header class="w-1/5">
            <Navbar />
        </header>
        <div class="flex flex-col w-4/5">
            <main class="bg-black text-white flex flex-col justify-center items-center h-4/4 p-4 pt-11">
                <h1 class="text-orange-500 text-2xl">Aulas de Vue Js Disponíveis:</h1>
                <div v-for="(aula, i) in aulas" :key="i" class="flex p-3 w-4/5">
                    <div class="flex items-center">
                        <img :src="aula.imagem" alt="Thumbnail do vídeo" class="h-3/4 mr-5">
                        <div class="flex flex-col">
                            <a :href="'/aulasvue/' + aula.id" class="text-blue-500">{{ aula.titulo }}</a>
                            <p>{{ limitarDescricao(aula.descricao, 100) }}</p>
                            <div class="flex justify-end">
                                <button @click="excluirAula(aula.id)" class="w-1/5 bg-red-700 font-bold rounded-lg">Excluir Aula</button>
                            </div>
                            <Line />
                        </div>
                    </div>
                </div>
            </main>
            <Rodape class="h-1/4" />
        </div>
    </section>
</template>

<script>
import Navbar from '../../components/Navbar.vue';
import Line from '../Line.vue';
import Rodape from '../Rodape.vue';

export default {
    name: "HomeAulasVue",
    components: { Navbar, Line, Rodape },
    props: {
        'aulas': {
            type: Object
        }
    },
    methods: {
        excluirAula(id) {
            if (confirm("Tem certeza de que deseja excluir esta aula?")) {
                axios.post(`/aulasvue/${id}`, { _method: 'DELETE' })
                    .then(response => {
                        console.log(response.data.message);
                        this.aulas = this.aulas.filter(aula => aula.id !== id);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        },
        limitarDescricao(descricao, limite) {
            if (descricao.length > limite) {
                return descricao.substring(0, limite) + "...";
            } else {
                return descricao;
            }

        }
    }
}
</script>

<style scoped>
img {
    width: 250px;
}
</style>

<template>
    <div class="flex-col m-5 p-3">
        <div class="flex font-light px-3 py-4 text-5xl justify-center">
            <h1>I terreni agricoli: </h1>
        </div>
        <div class="grid grid-cols-1 gap-5 mt-10 bg-white w-full">
            <div v-for="land in lands" :key="land.id" class="rounded-md p-6  hover:bg-green-100 cursor-pointer border border-black shadow-2xl" @click="GoToDetail(land)">
            <div class="flex flex-col space-y-3">
                <div class="flex items-center justify-between w-full">
                    <p class="text-3xl text-gray-800">Comune di appartenenza: <br> {{land.Comune}}</p>
                    <p v-if="land.Disponibilità" class="bg-green-500 text-white px-3 py-4 rounded">disponibile da subito! </p>
                </div>
                <hr>
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex-col text-xl">
                        <p>dimensione: <span class="font-medium text-lg">{{land.Dimensione}} </span> ettari </p>
                        <p> Tipo Offerta:<span class="font-medium text-lg"> {{land.Offerta}}</span></p>
                        <p> Canone offerta: <span class="font-medium"> {{land.Canone}} </span></p>
                        <p> Foglio catastale: <span class="font-medium text-lg">{{ land.FoglioCatastale }} </span> </p>
                        <p> Mappa catastale:<span class="font-medium text-lg"> {{ land.MappaleCatastale }} </span></p>
                    </div>
                    <div>
                        <img class="float-right" :src="land.Immagine" alt="img" width="200" height="200">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
       return{
           lands:[],
           max:10
       } 
    },
    async mounted(){
        let response = await axios.get('http://localhost:8000/api/lands');
        this.lands = response.data;
    },
    methods:{
        GoToDetail(land){
            this.$router.push('/detail/'+ land.id)
        }
    }
}
</script>
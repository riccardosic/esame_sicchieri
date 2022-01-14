<template>
  <div class="flex flex-col flex-grow space-y-8 shadow-2xl rounded-md p-12 justify-between border border-black m-5">
      <div class="flex flex-col space-y-3 ">
          <div class="flex items-center justify-between w-full ">
            <p class="text-3xl text-gray-800">Situato a: {{ land.Comune }}</p>
            <p v-if="land.Disponibilità" class="bg-green-500 text-white px-3 py-4 rounded">disponibile da subito! </p>
          </div>
          <hr>
        <div class="grid grid-cols-2 gap-5">
          <div class="flex-col items-center text-xl">
            <p> <span class="font-medium">dimensioni: </span>{{ land.Dimensione }} ettari</p>
            <p> <span class="font-medium">Foglio catastale: </span>{{ land.FoglioCatastale }} </p>
            <p> <span class="font-medium">Mappa catastale: </span>{{ land.MappaleCatastale }} </p>
            <p> <span class="font-medium">Parcella catastale: </span>{{ land.ParcellaCatastale }} </p>
            <p> <span class="font-medium">Tipologia di terreno: </span>{{ land.Tipologia }} </p>
            <p> <span class="font-medium">Tipologia di irrigazione: </span>{{ land.Irrigazione }} </p>
            <p> <span class="font-medium">Tipologia di offerta: </span>{{ land.Offerta }} </p>
            <p> <span class="font-medium">Canone di offerta: </span>{{ land.Canone }} </p>
          </div>
          <div class="flex justify-end">
              <img :src="land.Immagine" alt="img" class="h-56 w-56">
          </div>
        </div>
    </div>
        <hr>
        <div class="flex justify-end space-x-3">
            <button class="px-5 py-2 rounded text-yellow-800 hover:bg-yellow-800 hover:text-white border-2 border-yellow-800 transition duration-300" @click="edit()">
                Modifica
            </button>
            <button class="px-5 py-2 rounded text-red-600 hover:bg-red-600 hover:text-white border-2 border-red-600 transition duration-300" @click="discard()">
                Elimina
            </button>
        </div>
  </div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
       return{
           land:{}
       } 
    },
    async mounted(){
        let id = this.$route.params.id;
        let response = await axios.get('http://localhost:8000/api/lands/' + id);
        this.land = response.data;
    },
    methods:{
      edit(){
          this.$router.push('/edit/' + this.land.id)
      },
      async discard(){
          await axios.delete('http://localhost:8000/api/lands/' + this.land.id)
          this.$router.push('/home')
      }
    }
}
</script>
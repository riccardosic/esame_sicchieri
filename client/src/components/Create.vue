<template>
  <div
    class="
      flex flex-col flex-grow
      space-y-8
      bg-white
      rounded-md
      p-12
      justify-between
      items-center
    "
  >
    <div class="w-1/2 h-full space-y-4 font-light ">
      <div class="flex flex-col space-y-2">
        <div class="flex justify-between">
          <label for="title" class="font-medium">Comune: </label>
          <p class="font-light text-red-600" v-if="invalidForm && !land.Comune"> **Compila questo campo**</p>
        </div>
        <input
          type="text"
          class="w-full border-2 rounded-md px-2 py-2 outline-none"
          v-model="land.Comune"
        />
      </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="title" class="font-medium">Url immagine: </label>
            <p class="font-light text-red-600" v-if="invalidForm && !land.Immagine"> **Compila questo campo**</p>
            </div>
            <input
            type="text"
            class="w-full border-2 rounded-md px-2 py-2 outline-none"
            v-model="land.Immagine"
            />
        </div>

      <div class="flex flex-col space-y-2">
        <div class="flex justify-between">
          <label  class="font-medium">Dimensioni: </label>
          <p class="text-red-600" v-if="invalidForm && !land.Dimensione">**Compila questo campo**</p>
        </div>
        <div class="flex items-center">
          <input
            type="number"
            class="w-full border-2 rounded-md px-2 py-2 outline-none"
            v-model="land.Dimensione"
          />
          <p class="px-2 text-xl">ha</p>
        </div>
      </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="agency" class="font-medium">Foglio Catastale</label>
            <p class="text-red-600" v-if="invalidForm && !land.FoglioCatastale">**Compila questo campo**</p>
            </div>
            <input
            type="text"
            class="w-full border-2 rounded-md px-2 py-2 outline-none"
            v-model="land.FoglioCatastale"
            />
      </div>

      <div class="flex flex-col space-y-2">
        <div class="flex justify-between">
          <label for="desc" class="font-medium">Mappale catastale: </label>
          <p class="text-red-600" v-if="invalidForm && !land.MappaleCatastale">**Compila questo campo**</p>
        </div>
        <input
          class="w-full border-2 rounded-md px-2 py-2 outline-none"
          v-model="land.MappaleCatastale"
        />
      </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="title" class="font-medium">Parcella catastale: </label>
            <p class="font-light text-red-600" v-if="invalidForm && !land.ParcellaCatastale"> **Compila questo campo**</p>
            </div>
            <input
            type="text"
            class="w-full border-2 rounded-md px-2 py-2 outline-none"
            v-model="land.ParcellaCatastale"
            />
        </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="langs" class="font-medium">Tipologia del terreno: </label>
            <p class="text-red-600" v-if="invalidForm && !land.Tipologia">**Compila questo campo**</p>
            </div>
            <select
            class="w-full border-2 bg-white rounded-md px-2 py-2 outline-none"
            v-model="land.Tipologia"
            >
            <option>
                Argilloso
            </option>
            <option>
                Sabbioso
            </option>
            <option>
                Ghiaioso
            </option>
            <option>
                Tufo
            </option>
            </select>
        </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="langs" class="font-medium">Tipologia di irrigazione: </label>
            <p class="text-red-600" v-if="invalidForm && !land.Irrigazione">**Compila questo campo**</p>
            </div>
            <select
            class="w-full border-2 bg-white rounded-md px-2 py-2 outline-none"
            v-model="land.Irrigazione"
            >
            <option>
                A scorrimento
            </option>
            <option>
                Pozzo
            </option>
            <option>
                Canale
            </option>
            <option>
                Senz'acqua
            </option>
            </select>
        </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="langs" class="font-medium">Tipologia di offerta: </label>
            <p class="text-red-600" v-if="invalidForm && !land.Offerta">**Compila questo campo**</p>
            </div>
            <select
            class="w-full border-2 bg-white rounded-md px-2 py-2 outline-none"
            v-model="land.Offerta"
            >
            <option>
                vendita
            </option>
            <option>
                affitto
            </option>
            <option>
                affido gratuito
            </option>
            </select>
        </div>

        <div class="flex flex-col space-y-2">
            <div class="flex justify-between">
            <label for="title" class="font-medium">Canone offerta: </label>
            <p class="text-red-600" v-if="invalidForm && !land.Canone">**Compila questo campo**</p>
            </div>
            <input
            type="text"
            class="w-full border-2 rounded-md px-2 py-2 outline-none"
            v-model="land.Canone"
            />
        </div>

        <div class="w-2/2 h-full space-y-4 font-light ">
            <div class="flex-col justify-between">
            <label for="title" class="font-medium">Disponibilità: </label>
                <input
                type="checkbox"
                class="border-2 m-2 mt-3 rounded-md px-2 py-2 outline-none"
                v-model="land.Disponibilità"
                />
            </div>
        </div>

      <div class="flex w-full justify-end py-2">
        <button
          :disabled="invalidForm"
          class="
            px-5
            py-2
            space-x-2
            rounded
            text-black
            hover:bg-red-500 hover:text-white hover:border-red-600
            border-2 border-black
            transition
            duration-300
            disabled:cursor-not-allowed
          "
          @click="create()"
        >
        {{ $route.name == 'edit' ? "Salva": "Crea" }}
        </button>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
    data() {
       return{
            land:{
              Disponibilità: false,
            },
            isEdit: false,
            invalidForm: false,
       } 
    },
    async mounted(){
            if (this.$route.name == "edit") {
                this.isEdit = true;
                let id = this.$route.params.id;
                let response = await axios.get("http://localhost:8000/api/lands/" + id);
                this.land = response.data;
            }
    },
    methods:{
    async create() {
        this.formValidator();
        if (!this.invalidForm) {
            if (!this.isEdit) {
            await axios.post("http://localhost:8000/api/lands/", this.land);
            console.log(this.land)
            } else {
            let id = this.$route.params.id;
            await axios.put(
                "http://localhost:8000/api/lands/" + id,
                this.land
            );
            }
            this.$router.push("/home");
        }
    },
    formValidator() {
            if (
                this.land.Comune &&
                this.land.Immagine &&
                this.land.Dimensione &&
                this.land.FoglioCatastale &&
                this.land.MappaleCatastale &&
                this.land.ParcellaCatastale &&
                this.land.Tipologia &&
                this.land.Irrigazione &&
                this.land.Offerta &&
                this.land.Canone 
            ) {
                this.invalidForm = false;
            } else {
                this.invalidForm = true;
            }
            },
        },
}
</script>
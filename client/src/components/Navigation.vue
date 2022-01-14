<template>
    <div class="flex px-3 py-4 justify-between w-full m-auto bg-gray-800">
        <h1 class="text-4xl px-3 py-4 cursor-pointer font-light text-white" @click="GoToList()">
            Banca 
            <span class="text-sm">della </span>
            <span class="text-green-500">Terra</span>
        </h1>
        <button class="px-3 py-4 font-light text-2xl border border-green-600 bg-green-500 text-white rounded hover:bg-green-800" @click="GoToCreate()">
            Aggiungi Terreno
        </button>
    </div>
</template>
<script>
export default {
    data() {
       return{

       } 
    },
    methods:{
        GoToList(){
            this.$router.push('/home');
        },
        GoToCreate(){
            this.$router.push('/create');
        }
    }
}
</script>
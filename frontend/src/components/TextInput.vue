<script setup>
import {ref} from 'vue';
const props = defineProps(['name','type'])
const model= defineModel()

</script>
<template>
    <div class="my-2 p-4 w-full">
        <input class="bg-gray-100 p-4 rounded-xl w-full" :type="type" v-model="model" :placeholder="name">
    </div>
</template>
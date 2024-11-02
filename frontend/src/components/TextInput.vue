<script setup>
import {ref} from 'vue';
const props = defineProps(['name','type'])
const value= ref('');

</script>
<template>
    <div class="my-2 w-25">
        <input class="bg-gray-100 p-4 rounded-xl w-full" :type="type" v-model="value" :placeholder="name">
    </div>
</template>
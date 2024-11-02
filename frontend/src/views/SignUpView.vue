<template lang="">
    <div class="flex flex-col items-center justify-center">
        <p class="font-bold text-xl">Inscription</p>
        <div class="w-full  md:w-1/2 h-4/5 flex flex-col items-center w-50 ">
            <TextInput name="Name" type="text"/>
            <TextInput name="Email" type="text"/>
            <TextInput name="Password" type="password"/>
            <button class="bg-blue-500 font-bold text-center text-white w-[350px] py-4 rounded-full">Incription</button>
        </div>
    </div>
</template>
<script setup>
import TextInput from '@/components/TextInput.vue';


</script>
<style lang="">
    
</style>
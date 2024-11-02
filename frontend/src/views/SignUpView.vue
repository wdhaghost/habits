<template lang="">
    <div class="m-4 dvw-full h-4/5 bg-red-500">
        <div class="flex flex-col items-center w-50 ">
            <TextInput name="name" type="text"/>
            <TextInput name="email" type="text"/>
            <TextInput name="password" type="password"/>
            <button>Incription</button>
        </div>
    </div>
</template>
<script setup>
import TextInput from '@/components/TextInput.vue';

</script>
<style lang="">
    
</style>
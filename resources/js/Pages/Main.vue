<script setup>
import {ref, reactive, onMounted} from "vue";
const props = defineProps({
    data:String,
});
onMounted(() => {
    console.log(props);
})
</script>

<template>
    Main page of the site
</template>

<style scoped>

</style>

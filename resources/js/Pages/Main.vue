<script setup>
import {ref, reactive, onMounted} from "vue";
import SubHeader from "./SubHeader.vue";
import MainHeader from "./MainHeader.vue";

const props = defineProps({
    data: String,
});
onMounted(() => {
    console.log(props);
})
</script>

<template>
    <SubHeader></SubHeader>
    <MainHeader></MainHeader>
    <div class="bg-[#ECF0FB]">
        <div class="mx-[382px]">
            <img :src="'/storage/index1.jpg'" alt="" class="pt-20">
            de
        </div>
    </div>
</template>

<style scoped>

</style>

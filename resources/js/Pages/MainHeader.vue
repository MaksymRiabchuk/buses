<script setup>
import {ref} from "vue";

const vars = ref({
    onHoverPages: false,
})
</script>

<template>
    <div style="background-color:white" class="mt-3">
        <div class="mx-[382px] font-open-sans text-[16px] leading-[22.4px] font-bold flex justify-between
             items-center py-4">
            <div>
                Logo
            </div>
            <div class="flex font-open-sans font-bold text-gray-700 leading-[26px]">
                <div class="mr-8">
                    <span class="hover:border-b-2  hover:border-[#5476DB] cursor-pointer active:text-[#5476DB]">
                        Home Page
                    </span>
                </div>
                <div class="mr-8">
                    <span class="hover:border-b-2  hover:border-[#5476DB] cursor-pointer active:text-[#5476DB]">
                    About Us
                    </span>
                </div>
                <div class="mr-8 relative" @mouseenter="vars.onHoverPages=true" @mouseleave="vars.onHoverPages=false">
                    <span class="hover:border-b-2  hover:border-[#5476DB] cursor-pointer active:text-[#5476DB]">
                    Pages
                    </span>
                    <div class="absolute p-5" v-show="vars.onHoverPages===true" style="box-shadow: 0px 0px 8px 0px rgba(128,128,128,1)">
                        <div class="cursor-pointer">
                            Our team
                        </div>
                        <div class="cursor-pointer">
                            Pricing
                        </div>
                        <div class="cursor-pointer">
                            Landing
                        </div>
                        <div class="cursor-pointer">
                            Blog
                        </div>
                    </div>
                </div>
                <div class="mr-8">
                    <span class="hover:border-b-2  hover:border-[#5476DB] cursor-pointer active:text-[#5476DB]">
                    Pricing
                    </span>
                </div>
                <div class="mr-8">
                    <span class="hover:border-b-2  hover:border-[#5476DB] cursor-pointer active:text-[#5476DB]">
                    Blog
                    </span>
                </div>
            </div>
            <div style="background-color:rgb(84, 118, 219);"
                 class="text-white font-open-sans py-[10px] px-8 text-[14px] font-bold leading-[19.6px]">
                GET A QUOTE
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>

<script setup>
const model=defineModel({
  type:null,
  required:true,
})
defineProps({
  labelName: {
    type: String,
  },
  type: {
    type: String,
    default: 'text',
  },
  message: String,
  id:{
    type:String,
    default:'name-input',
  },
  placeholder:String,
  labelClass:String,
  inputClass:String,
})
</script>

<template>
  <div>
    <label :for="id" :class="labelClass">
      {{ labelName }}
    </label>
    <input :placeholder="placeholder" :type="type" :id="id" v-model="model" :class="[message?inputClass+' !border-red-500 ':inputClass]">
    <div v-if="message" class="text-red-500 text-xs italic">
      {{ message }}
    </div>
  </div>
</template>

<style scoped>

</style>
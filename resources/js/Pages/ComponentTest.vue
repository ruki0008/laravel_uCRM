<script setup>
import { ref } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const text = ref('初期値が入ります');
</script>

<template>
<GuestLayout>
    <InputLabel value="件名">タイトル</InputLabel>
    <TextInput v-model="text"></TextInput>
</GuestLayout>
</template>
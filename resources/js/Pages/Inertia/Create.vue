<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { useForm, router } from '@inertiajs/vue3';

defineProps({
    errors: Object
})

const form = reactive({
  title: null,
  content: null
})

const submit = () => {
    router.post('/inertia', form)
}
</script>

<template>
    <form @submit.prevent="submit">
        <input name="title" v-model="form.title"><br>
        <div v-if="errors.title">{{ errors.title }}</div>
        <input name="content" v-model="form.content"><br>
        <div v-if="errors.content">{{ errors.content }}</div>
        <button type="submit">送信</button>
    </form>
</template>

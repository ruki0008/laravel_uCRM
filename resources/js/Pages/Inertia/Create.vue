<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { useForm, router } from '@inertiajs/vue3';
import ValidationErrors from '@/Components/ValidationErrors.vue';

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
    <validation-errors :errors="errors"/>
    <form @submit.prevent="submit">
        <input name="title" v-model="form.title"><br>
        <input name="content" v-model="form.content"><br>
        <button type="submit">送信</button>
    </form>
</template>

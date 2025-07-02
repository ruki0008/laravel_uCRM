<script setup>
import { useForm, Link } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

const form = useForm({
  title: '',
  content: ''
})

const titleError = computed(() => {
  if (!form.title) return 'タイトルは必須です'
  if (form.title.length < 10) return '10文字以上で入力してください'
  return ''
})

function submit() {
  form.post(route('inertia.store'))
}
</script>

<template>
Inertiaテストです<br>
<a href="/">aタグ経由です</a><br>
<Link href="/">Link経由です</Link><br>
<Link :href="route('inertia.index')">名前付きルート</Link><br>
<Link :href="route('inertia.show', { id: 50 })">ルートパラメーターのテストです</Link>

<div class="mb-8"></div>
<form @submit.prevent="submit">
<div>
    <input v-model="form.title" placeholder="タイトル" />
    <div v-if="titleError" class="text-red-500">{{ titleError }}</div>
</div>

<div>
    <input v-model="form.content" placeholder="コンテンツ" />
</div>

<button type="submit" :disabled="!!titleError">保存</button>
</form>
</template>
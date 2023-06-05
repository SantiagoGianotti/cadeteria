<script setup>

import {reactive,watch} from 'vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import debounce from 'lodash.debounce'
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'

defineProps({
    search_columns: Array,
})

const form = reactive({
    busqueda: null,
    campo: null,
})

const reloadPage = () => {

    let url = route(route().current(), form)

    router.replace(url)
}

watch(form, debounce((val) => reloadPage(), 500))

</script>

<template>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div>
            <InputLabel for="busqueda" value="Buscar por" />
            <TextInput
                id="busqueda"
                ref="busqueda"
                v-model="form.busqueda"
                type="text"
                class="mt-1 block w-full"
                autocomplete="current-password" />
        </div>

        <div>
            <label for="filtro" class="block mb-2 text-sm font-medium text-slate-100">Filtro</label>
            <select v-model="form.campo" id="filtro" class="border text-sm rounded-lg block w-full p-2.5 bg-slate-700 border-slate-600 placeholder-slate-400 text-slate-100 focus:ring-cyan-500 dark:focus:border-cyan-500">
                <option selected disabled>Seleccione un filtro de busqueda</option>
                <option v-for="column in search_columns" :value="column.value">{{ column.name }}</option>
            </select>
        </div>
    </div>
</template>

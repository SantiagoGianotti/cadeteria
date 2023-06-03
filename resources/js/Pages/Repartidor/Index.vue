<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';
import ListMenu from '../../Components/Lists/ListMenu.vue';


defineProps({
    repartidores: Array,
 })

const search_columns =  [
    {
        value: 'nombre',
        name: 'Nombre',
    },
    {
        value: 'apellido',
        name: 'Apellido',
    },
]

</script>

<template>
    <AppLayout title="Repartidores">
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">
                Repartidores
            </h2>
        </template>

        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg ">
                    <div class="m-6 lg:m-8 bg-slate-800 border-slate-300">

                        <ListMenu :items="repartidores"
                            :search="true"
                            :search_columns="search_columns"
                            v-slot="{item}">

                            <div class="flex items-center gap-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate text-slate-100">
                                        {{ item.nombre }} {{ item.apellido }}
                                    </p>
                                    <p class="text-sm truncate text-slate-400">
                                        email@windster.com
                                    </p>
                                </div>
                                <div class="flex-shrink-0 items-center text-base font-semibold text-slate-100">
                                    $320
                                </div>
                            </div>

                        </ListMenu>

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

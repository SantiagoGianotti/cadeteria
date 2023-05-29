<script setup>
import { computed } from 'vue';
import ResponsiveNavMenu from './ResponsiveNavMenu.vue';
import ResponsiveProfileComponent from './ResponsiveProfileComponent.vue';


const props = defineProps({
    routes: Array,
});

const menues = computed(() => {
    return props.routes.filter(route => route.type == "menu")
})

</script>

<template>
    <div class="fixed z-50 inset-0 overflow-y-auto lg:hidden">

        <div class="fixed inset-0 bg-black/20 backdrop-blur-sm dark:bg-slate-900/80" @click="$emit('toggleResponsiveNavBar')">
        </div>

        <div class="relative bg-white w-80 max-w-[calc(100%-3rem)] p-6 dark:bg-slate-800">


            <button @click="$emit('toggleResponsiveNavBar')" type="button"
                class="absolute z-10 top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300" tabindex="0"><span class="sr-only">Close
                    navigation</span><svg viewBox="0 0 10 10" class="w-2.5 h-2.5 overflow-visible">
                    <path d="M0 0L10 10M10 0L0 10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                </svg>
            </button>

            <ResponsiveProfileComponent></ResponsiveProfileComponent>

            <div class="lg:text-sm lg:leading-6 relative">
                <ul v-for="menu in menues">

                    <li class="mt-12 lg:mt-8">
                        <ResponsiveNavMenu :items="menu.items">
                            {{ menu.title }}
                        </ResponsiveNavMenu>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</template>

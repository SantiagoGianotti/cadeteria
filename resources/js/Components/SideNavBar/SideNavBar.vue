<script setup>
import { computed } from 'vue';
import SideNavMenu from './SideNavMenu.vue';


const props = defineProps({
    routes: Array,
});

const menues = computed(() => {
    return props.routes.filter(route => route.type == "menu")
})

</script>

<template>
    <div>
        <div class="hidden lg:block fixed z-20 inset-0 top-[4.125rem] left-[max(0px,calc(25%-45rem))] right-auto w-[19.5rem] pb-10 px-8 overflow-y-auto">
            <nav id="nav" class="lg:text-sm lg:leading-6 relative">
                <div class="sticky top-0 -ml-0.5 pointer-events-none">
                    <div class="h-10 bg-white dark:bg-slate-900"></div>
                    <!-- <div class="bg-white dark:bg-slate-900 relative pointer-events-auto"><button type="button" class="hidden w-full lg:flex items-center text-sm leading-6 text-slate-400 rounded-md ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300 dark:bg-slate-800 dark:highlight-white/5 dark:hover:bg-slate-700"><svg width="24" height="24" fill="none" aria-hidden="true" class="mr-3 flex-none"><path d="m19 19-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle></svg>Quick search...<span class="ml-auto pl-3 flex-none text-xs font-semibold">Ctrl K</span></button></div> -->
                    <div class="h-8 bg-gradient-to-b from-white dark:from-slate-900"></div>
                </div>

                <li class="mt-4 lg:mt-4 list-none" v-for="menu in menues">
                    <SideNavMenu :items="menu.items">
                        {{ menu.title }}
                    </SideNavMenu>
                </li>
            </nav>
        </div>
    </div>
</template>

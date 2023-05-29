<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import ResponsiveNavLink from './ResponsiveNavLink.vue';


const props = defineProps({
    items: Array,
});

</script>

<template>
    <!-- Menu title -->
    <h5 class="mb-4 lg:mb-3 font-semibold text-slate-200">
        <slot/>
    </h5>

    <!-- Menu items -->
    <ul class="space-y-6 lg:space-y-2 border-l border-slate-100 dark:border-slate-700" v-for="item in props.items">
        <ResponsiveNavLink :href="item.href" :active="$page[item.active_state.compare] == item.active_state.with">
            {{item.title}}
        </ResponsiveNavLink>
    </ul>

</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import SideNavLink from './SideNavLink.vue';

const props = defineProps({
    items: Array,
});

</script>

<template>
    <!-- Menu title -->
    <h5 class="mb-8 lg:mb-3 font-semibold text-slate-100 dark:text-slate-200">
        <slot/>
    </h5>

    <!-- Menu items -->
    <ul class="space-y-6 lg:space-y-2 border-l border-slate-700 dark:border-slate-700" v-for="item in props.items">
        <SideNavLink :href="item.href" :active="$page[item.active_state.compare] == item.active_state.with">
            {{item.title}}
        </SideNavLink>
    </ul>

</template>

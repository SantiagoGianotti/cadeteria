<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'block border-l border-cyan-500 pl-4 -ml-px hover:border-l-2 text-slate-100 hover:text-white transition duration-150 ease-in-out'
        : 'block border-l border-slate-700 pl-4 -ml-px hover:border-l-2 hover:border-cyan-600 text-slate-400 hover:text-slate-100 transition duration-150 ease-in-out';
});
</script>

<template>
    <li>
        <Link :href="href" :class="classes">
            <slot />
        </Link>
    </li>
</template>

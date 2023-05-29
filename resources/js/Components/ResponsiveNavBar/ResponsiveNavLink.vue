<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'block border-l pl-4 -ml-px border-cyan-500 hover:border-slate-400 hover:border-slate-500 text-slate-200 hover:text-white'
        : 'block border-l pl-4 -ml-px border-slate-700 hover:border-slate-400 hover:border-slate-500 text-slate-400 hover:text-slate-300';
});
</script>

<template>
    <li>
        <Link :href="href" :class="classes">
            <slot />
        </Link>
    </li>
</template>

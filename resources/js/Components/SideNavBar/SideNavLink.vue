<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'block border-l pl-4 -ml-px border-transparent hover:border-slate-400 text-slate-100 hover:text-slate-100 transition duration-150 ease-in-out'
        : 'block border-l bg-slate-800 pl-4 -ml-px border-transparent hover:border-slate-400 text-slate-100 hover:text-slate-100 transition duration-150 ease-in-out';
});
</script>

<template>
    <li>
        <Link :href="href" :class="classes">
            <slot />
        </Link>
    </li>
</template>

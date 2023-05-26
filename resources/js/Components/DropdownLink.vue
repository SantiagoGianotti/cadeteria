<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: String,
    as: String,
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" type="submit" class="block w-full px-4 py-2 text-left text-sm leading-5 bg-slate-800 text-slate-100 hover:bg-slate-700 focus:outline-none focus:bg-slate-800 transition duration-150 ease-in-out">
            <slot />
        </button>

        <a v-else-if="as =='a'" :href="href" class="block px-4 py-2 text-sm leading-5 text-slate-100 bg-slate-800 hover:bg-slate-700 focus:outline-none focus:bg-slate-700 transition duration-150 ease-in-out">
            <slot />
        </a>

        <Link v-else :href="href" class="block px-4 py-2 text-sm leading-5 text-slate-100 hover:bg-slate-700 focus:outline-none focus:bg-slate-700 transition duration-150 ease-in-out">
            <slot />
        </Link>
    </div>
</template>

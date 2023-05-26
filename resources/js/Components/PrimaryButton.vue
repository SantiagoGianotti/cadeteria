<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-cyan-500/50 border border-transparent rounded-md font-semibold text-xs text-gray-300 uppercase tracking-widest hover:bg-cyan-500 focus:bg-cyan-600 active:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-0 transition ease-in-out duration-150">
        <slot />
    </button>
</template>

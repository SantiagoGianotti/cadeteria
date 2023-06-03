<script setup>

import ListFilter from './ListFilter.vue';

defineProps({
    items: Array,
    search: {
        type: Boolean,
        default: false
    },
    search_columns: Array,
})

</script>

<template>
    <div class="w-full max-w p-4 border  rounded-lg shadow sm:p-8">
        <div class="flow-root">
            <ListFilter v-if="search" :search_columns="search_columns"/>
            <ul role="list" class="divide-y divide-gray-700">
                <li class="py-3 sm:py-4 px-3 sm:px-4" v-for="item in items">
                    <slot :item="item">
                    </slot>

                </li>
            </ul>
        </div>
    </div>
</template>

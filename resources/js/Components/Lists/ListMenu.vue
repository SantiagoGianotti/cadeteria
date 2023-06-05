<script setup>

import ListFilter from './ListFilter.vue';
import ListPaginator from './ListPaginator.vue';

defineProps({
    paginated: Object,
    search: {
        type: Boolean,
        default: false
    },
    search_columns: Array,
})

</script>

<template>
    <div class="w-full max-w p-4 border border-slate-700 shadow sm:p-8 rounded-lg">
        <div class="flow-root">
            <ListFilter v-if="search" :search_columns="search_columns"/>
            <ul role="list" class="divide-y divide-slate-700">
                <li class="py-3 sm:py-4 px-3 sm:px-4" v-for="item in paginated.data">
                    <slot :item="item">
                    </slot>
                </li>
            </ul>
            <div class="flex justify-center">
                <ListPaginator :paginated="paginated"></ListPaginator>
            </div>
        </div>
    </div>
</template>

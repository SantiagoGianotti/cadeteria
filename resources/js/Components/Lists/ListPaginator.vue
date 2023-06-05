<script setup>

    import { Link } from '@inertiajs/vue3';

    defineProps({
        paginated: Object
    })

    const activeClasses = (bool) => {
        return bool?
            'px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white':
            'px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white';
    }

</script>

<template>
    <nav aria-label="List Pagination">
        <ul class="inline-flex items-center -space-x-px">

            <li v-for="link in paginated.links">
                <Link
                    preserve-state
                    preserve-scroll
                    :href="link.url??'#'"
                    :active="link.active"
                    :class="activeClasses(link.active)">
                    {{ link.label }}

                </Link>
            </li>

        </ul>
    </nav>
</template>

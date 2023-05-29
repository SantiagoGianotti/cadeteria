<script setup>

import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

</script>

<template>
    <div class="pt-8 pb-1 mb-4 border-b">
        <div class="flex items-center px-4 py-2 border-slate-200 bg-slate-700 rounded-lg">
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">
                <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
            </div>

            <div>
                <div class="font-medium text-base text-gray-100">
                    {{ $page.props.auth.user.name }}
                </div>
                <div class="font-medium text-sm text-gray-100">
                    {{ $page.props.auth.user.email }}
                </div>
            </div>
        </div>

        <div class="mt-3 space-y-1 text-white">
            <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                Perfil
            </ResponsiveNavLink>

            <ResponsiveNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')" :active="route().current('api-tokens.index')">
                API Tokens
            </ResponsiveNavLink>

            <!-- Authentication -->
            <form method="POST" @submit.prevent="logout">
                <ResponsiveNavLink as="button">
                    Cerrar Sesión
                </ResponsiveNavLink>
            </form>
        </div>
    </div>
</template>

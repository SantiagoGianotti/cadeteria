export function getRoutes() {
    const json = [
        {
            type: 'menu',
            title: 'Dashboard',
            items: [
                {
                    title: 'Pedidos',
                    href: route('dashboard'),
                    active_state: {
                        compare: "url",
                        with: "/dashboard"
                    }
                },
            ]
        },
        {
            type: 'menu',
            title: 'Configuración',
            items: [
                {
                    title: 'Repartidores',
                    href: route('repartidores.index'),
                    active_state: {
                        compare: "url",
                        with: '/repartidores'
                    }
                },
                {
                    title: 'Motos',
                    href: '',
                    active_state: {
                        compare: "url",
                        with: "dashboard"
                    }
                },
                {
                    title: 'Permisos',
                    href: '',
                    active_state: {
                        compare: "url",
                        with: "dashboard"
                    }
                }
            ],
        },
        {
            type: 'menu',
            title: 'Mi Usuario',
            items: [
                {
                    title: 'Perfil',
                    href: route('profile.show'),
                    active_state: {
                        compare: "url",
                        with: "/user/profile"
                    }
                },
            ]
        },
    ]

    return json
}

import RoutesComponents from "../RoutesComponents";

export default [
    {
        path: 'profile',
        component: RoutesComponents.ProfilesLayout,
        meta: {breadcrumbs: 'profiles'},
        children: [
            {
                path: 'auth',
                component: RoutesComponents.AuthUserLayout,
                meta: {breadcrumbs: false/*'authentication'*/},
                children: [
                    {
                        path: 'change-password',
                        component: RoutesComponents.ChangePassword,
                        name: 'change_password',
                        meta: {breadcrumbs: 'change_password'}
                    },
                    {
                        path: 'change-email',
                        component: RoutesComponents.ChangeEmail,
                        name: 'change_email',
                        meta: {breadcrumbs: 'change_email'}
                    },
                ]
            },
        ],
    },
];

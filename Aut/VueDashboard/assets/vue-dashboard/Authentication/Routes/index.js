import RoutesComponents from './RoutesComponents';

export default {
    path: '/',
    component: RoutesComponents.AuthLayout,
    children: [
        {
            path: '/login',
            component: RoutesComponents.Login,
            name: 'login',
            meta: {message: 'login_message'}
        },
        {
            path: '/register',
            component: RoutesComponents.Register,
            name: 'register',
            meta: {message: 'register_message'}
        },
        {
            path: '/password',
            component: RoutesComponents.PasswordLayout,
            children: [
                {
                    path: 'reset',
                    component: RoutesComponents.Email,
                    name: 'email',
                    meta: {message: 'email_message'}
                },
                {
                    path: 'reset/:token',
                    component: RoutesComponents.Reset,
                    name: 'reset',
                    props: true,
                    meta: {message: 'reset_message'}
                },
            ]
        },
        {
            path: '/privacy',
            component: RoutesComponents.Privacy,
            name: 'privacy',
            meta: {message: 'privacy_message'}
        },
    ],
    meta: {
        middleware: ['guest']
    }
};

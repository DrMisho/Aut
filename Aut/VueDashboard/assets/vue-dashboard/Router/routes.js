import DashboardLayout from '../Dashboard/Views/DashboardLayout';

let routes = [];

import authRoutes from '../Authentication/Routes';
import appRoutes from '../../../../../resources/assets/js/router/routes';

let dashboardRoutes = {
    path: '/dashboard',
    component: DashboardLayout,
    children: appRoutes,
    meta: {breadcrumbs: 'dashboard', middleware: ['auth', 'verified']}
};

routes.push(authRoutes);
routes.push(dashboardRoutes);

export default routes;

import DashboardRoutes from './routes/Dashboard';
import UserRoutes from './routes/User';
import ErrorsRoutes from './routes/Errors';

export default Array.prototype.concat(
    DashboardRoutes,
    UserRoutes,
    ErrorsRoutes,
);

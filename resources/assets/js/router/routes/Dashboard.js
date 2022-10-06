import RoutesComponents from "../RoutesComponents";

export default [
    // Global
    {path: '/', component: RoutesComponents.Dashboard, name: 'dashboard', meta: {breadcrumbs: false}},
    {path: 'test', component: RoutesComponents.Test, name: 'test', meta: {breadcrumbs: false}},

    // Authentication
    {path: 'permissions', component: RoutesComponents.Permissions, name: 'permissions', meta: {breadcrumbs: 'permissions'}},
    {path: 'roles', component: RoutesComponents.Roles, name: 'roles', meta: {breadcrumbs: 'roles'}},
    {path: 'users', component: RoutesComponents.Users, name: 'users', meta: {breadcrumbs: 'users'}},

    // GlobalSettings
    {path: 'languages', component: RoutesComponents.Languages, name: 'languages', meta: {breadcrumbs: 'languages'}},
    {path: 'social-networks', component: RoutesComponents.SocialNetworks, name: 'social_networks', meta: {breadcrumbs: 'social_networks'}},
    {path: 'genders', component: RoutesComponents.Genders, name: 'genders', meta: {breadcrumbs: 'genders'}},
    {path: 'icons', component: RoutesComponents.Icons, name: 'icons', meta: {breadcrumbs: 'icons'}},
    {path: 'cake', component: RoutesComponents.Cake, name: 'cake', meta: {breadcrumbs: 'cake'}},
    {path: 'news', component: RoutesComponents.News, name: 'news', meta: {breadcrumbs: 'news'}},
    {path: 'news-categories', component: RoutesComponents.NewsCategory, name: 'news-categories', meta: {breadcrumbs: 'news-categories'}},
    {path: 'news-statuses', component: RoutesComponents.NewsStatus, name: 'news-statuses', meta: {breadcrumbs: 'news-statuses'}},
    {path: 'news-types', component: RoutesComponents.NewsType, name: 'news-types', meta: {breadcrumbs: 'news-types'}},
    {path: 'news-tags', component: RoutesComponents.NewsTag, name: 'news-tags', meta: {breadcrumbs: 'news-tags'}},
    {path: 'box', component: RoutesComponents.Box, name: 'box', meta: {breadcrumbs: 'box'}},
    {path: 'branch', component: RoutesComponents.Branch, name: 'branch', meta: {breadcrumbs: 'branch'}},
    {path: 'suite', component: RoutesComponents.Suite, name: 'suite', meta: {breadcrumbs: 'suite'}},
    {path: 'client', component: RoutesComponents.Client, name: 'client', meta: {breadcrumbs: 'client'}},
    {path: 'solution', component: RoutesComponents.Solution, name: 'solution', meta: {breadcrumbs: 'solution'}},
    {path: 'module', component: RoutesComponents.Module, name: 'module', meta: {breadcrumbs: 'module'}},
    {path: 'page', component: RoutesComponents.Page, name: 'page', meta: {breadcrumbs: 'page'}},
    {path: 'team', component: RoutesComponents.Team, name: 'team', meta: {breadcrumbs: 'team'}},
    {path: 'job-title', component: RoutesComponents.JobTitle, name: 'job-title', meta: {breadcrumbs: 'job-title'}},
    {path: 'client-say', component: RoutesComponents.ClientSay, name: 'client-say', meta: {breadcrumbs: 'client-say'}},
    {path: 'event', component: RoutesComponents.Event, name: 'event', meta: {breadcrumbs: 'event'}},
    {path: 'contribution', component: RoutesComponents.Contribution, name: 'contribution', meta: {breadcrumbs: 'contribution'}},
    {path: 'competition', component: RoutesComponents.Competition, name: 'competition', meta: {breadcrumbs: 'competition'}},
    {path: 'country', component: RoutesComponents.Country, name: 'country', meta: {breadcrumbs: 'country'}},
    {path: 'city', component: RoutesComponents.City, name: 'city', meta: {breadcrumbs: 'city'}},
];

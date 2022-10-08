<?php

return [

    'settings' => [
        'persistent' => true,
    ],

    'tables' => [
        'languages' => \Aut\GlobalSettings\DataTables\LanguagesDataTable::class,
        'icons' => \Aut\GlobalSettings\DataTables\IconsDataTable::class,
        'social-network' => \Aut\GlobalSettings\DataTables\SocialNetworksDataTable::class,
        'genders' => \Aut\GlobalSettings\DataTables\GendersDataTable::class,

        'permissions' => \Aut\Authorization\DataTable\PermissionsDatatable::class,
        'roles' => \Aut\Authorization\DataTable\RolesDatatable::class,
        'users' => \App\Http\DataTables\UsersDataTable::class,

        'cakes' => Aut\Cake\DataTables\CakesDataTable::class,
        'news' => Aut\News\DataTables\NewsDataTable::class,
        'box' => App\Http\DataTables\BoxesDataTable::class,
        'branch' => App\Http\DataTables\BranchesDataTable::class,
        'suite' => App\Http\DataTables\SuitesDataTable::class,
        'client' => App\Http\DataTables\ClientsDataTable::class,
        'solution' => App\Http\DataTables\SolutionsDataTable::class,
        'module' => App\Http\DataTables\ModulesDataTable::class,
        'page' => App\Http\DataTables\PagesDataTable::class,
        'team' => App\Http\DataTables\TeamsDataTable::class,
        'job-title' => App\Http\DataTables\JobTitlesDataTable::class,
        'client-say' => App\Http\DataTables\ClientSayDataTable::class,
        'event' => App\Http\DataTables\EventDataTable::class,
        'contribution' => App\Http\DataTables\ContributionDataTable::class,
        'country' => App\Http\DataTables\CountryDataTable::class,
        'city' => App\Http\DataTables\CityDataTable::class,
        'competition' => App\Http\DataTables\CompetitionsDataTable::class,
        'news-categories' => Aut\News\DataTables\CategoriesDataTable::class,
        'news-statuses' => Aut\News\DataTables\StatusesDataTable::class,
        'news-types' => Aut\News\DataTables\TypesDataTable::class,
        'news-tags' => Aut\News\DataTables\TagsDataTable::class,


        'tests' => \Aut\Test\DataTables\TestsDataTable::class,
    ]
];

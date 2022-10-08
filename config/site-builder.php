<?php

return [

    'project' => env('SITE_BUILDER_PROJECT', null),

    'home_page_name' => env('SITE_BUILDER_HOME', 'builder.pages.1'),

    /**
     * This will contain all the data (from all projects)
     */
    'default' => [
        'attributes' => [
            'status' => \Aut\SiteBuilder\Attributes\StatusAttribute::class,
            'width' => \Aut\SiteBuilder\Attributes\WidthAttribute::class,
        ],
        'grouped_attributes' => [

        ],
        'modules' => [

        ],
        'pageable_models' => [
            'pages' => \Aut\SiteBuilder\Models\Page::class,
            'news' => \Aut\News\Models\News::class,
            'suite' => \App\Models\Suite::class,
            'page' => \App\Models\Page::class,
        ],
        'menuable_models' => [
            'pages' => \Aut\SiteBuilder\Models\Page::class,
        ],
    ],

    'project_code' => [
        'attributes' => [

        ],
        'grouped_attributes' => [

        ],
        'modules' => [

        ],
        'pageable_models' => [

        ],
        'menuable_models' => [

        ],
    ],
];

<?php

return [
    'icons' => \Aut\GlobalSettings\Autocompletes\IconsAutocomplete::class,
    'genders' => \Aut\GlobalSettings\Autocompletes\GendersAutocomplete::class,
    'news-category' => \Aut\News\Autocompletes\CategoryAutocomplete::class,
    'news-status' => \Aut\News\Autocompletes\StatusAutocomplete::class,
    'news-tag' => \Aut\News\Autocompletes\TagsAutocomplete::class,
    'country' => \App\Http\Autocompletes\CountryAutocomplete::class,
    'seo' => \App\Http\Autocompletes\SeoAutocomplete::class,
    'suite' => \App\Http\Autocompletes\SuiteAutocomplete::class,
    'solution' => \App\Http\Autocompletes\SolutionAutocomplete::class,
    'social_network' => \App\Http\Autocompletes\SocialNetworkAutocomplete::class,
    'job_title' => \App\Http\Autocompletes\JobTitleAutocomplete::class,
    'city' => \App\Http\Autocompletes\CityAutocomplete::class,
    'team' => \App\Http\Autocompletes\TeamAutocomplete::class,
    'module' => \App\Http\Autocompletes\ModuleAutocomplete::class,
];

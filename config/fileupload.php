<?php

return [
    'with_webp' => false,

    'news_video' => Aut\News\FileUploader\VideoNewsUpload::class,
    'news_image' => Aut\News\FileUploader\ImageNewsUpload::class,
    'language_flag' => \Aut\GlobalSettings\FileUploader\FlagUploader::class,
    'branch' => App\Http\FileUploader\BranchImageUpload::class,
    'branch_logo' => App\Http\FileUploader\BranchLogoUpload::class,
    'team' => App\Http\FileUploader\TeamImageUpload::class,
    'competition' => App\Http\FileUploader\CompetitionImageUpload::class,
    'client' => App\Http\FileUploader\ClientFileUpload::class,
    'client_logo' => App\Http\FileUploader\ClientLogoUpload::class,
    'client_say' => App\Http\FileUploader\ClientSayFileUpload::class,
    'contribution_file' => App\Http\FileUploader\ContributionFileUpload::class,
    'contribution_image' => App\Http\FileUploader\ContributionImageUpload::class,
];

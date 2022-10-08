<?php

namespace Aut\News\DataTables;

use Aut\News\Models\Comment;
use Aut\VueDataTable\Builders\Label;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\ApiResources\VueDataTable;

class CommentsDataTable extends VueDataTable
{
    public static $model = Comment::class;

    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'news' => $this->news->title,
            'user' => $this->user->name,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            Label::make('user')->label(trans('news::news.username')),
            Label::make('news')->label(trans('news::news.title')),
            TextInput::make('content')->label(trans('news::news.content')),
        ];
    }

    public static function title()
    {
        return trans('News::news.comments');
    }

    public static function singular()
    {
        return trans('News::news.comment');
    }
}
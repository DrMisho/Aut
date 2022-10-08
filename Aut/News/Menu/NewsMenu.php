<?php

namespace Aut\News\Menu;

use Aut\VueMenu\Builder\Link;
use Aut\VueMenu\Builder\Panel;

class NewsMenu
{
    public function __invoke()
    {
        return [

            Panel::make([
                Link::make()->title($this->trans('types'))->icon('fas fa-align-right')->to(['name' => 'types']),
                Link::make()->title($this->trans('categories'))->icon('fab fa-trello')->to(['name' => 'categories']),
                Link::make()->title($this->trans('tags'))->icon('fas fa-hashtag')->to(['name' => 'tags']),
                Link::make()->title($this->trans('statuses'))->icon('fab fa-bandcamp')->to(['name' => 'statuses']),
                Link::make()->title($this->trans('news'))->icon('fas fa-newspaper')->to(['name' => 'news']),
//                Link::make()->title($this->trans('comments'))->icon('fas fa-comment-alt')->to(['name' => 'comments']),
            ])->title($this->trans('news'))->authenticated(),

        ]
    }
    public function trans($key)
    {
        return trans("News::news.${key}");
    }
}

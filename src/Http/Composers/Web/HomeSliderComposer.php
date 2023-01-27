<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

use Delgont\Cms\Repository\Post\PostRepository;

class HomeSliderComposer
{
    public function compose(View $view)
    {
        $view->with([
            'slides' => app(PostRepository::class)->paginated(1, 10)->fromCache()->getPostsOfCategory('home slide')
        ]);
    }
}
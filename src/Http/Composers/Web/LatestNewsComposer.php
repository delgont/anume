<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use Delgont\Cms\Repository\Post\PostRepository;

class LatestNewsComposer
{
    public function compose(View $view)
    {
        $view->with([
            'news' => app(PostRepository::class)->paginated(1, 3)->fromCache()->getPostsOfType('news and anoucements')
        ]);
    }
}
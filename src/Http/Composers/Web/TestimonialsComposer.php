<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use Delgont\Cms\Repository\Post\PostRepository;

class TestimonialsComposer
{
    public function compose(View $view)
    {
        $view->with([
            'testimonials' => app( PostRepository::class )->paginated( 1, 6 )->fromCache()->getPostsOfType( 'testimonial' )
        ]);
    }
}
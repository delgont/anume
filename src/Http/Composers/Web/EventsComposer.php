<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;

use Delgont\Anume\Repository\Event\EventRepository;


class EventsComposer
{
    public function compose(View $view)
    {
        $view->with([
            'events' => app( EventRepository::class )->fromCache()->all()
        ]);
    }
}
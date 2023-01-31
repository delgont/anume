<?php

namespace Delgont\Anume\Http\Controllers\Web;

use Delgont\Anume\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Delgont\Anume\Repository\Event\EventRepository;

class EventController extends Controller
{

    protected $eventRepository = null;

    public function __construct()
    {
        $this->eventRepository = app( EventRepository::class )->fromCache();
    }
    /**
     * Display admin account info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = request('page') ?? 1;
        $events = $this->eventRepository->paginated($page, 6)->all();
        return view('web.templates.events-page', compact(['events']));
    }

    public function show($slug)
    {
        return $this->eventRepository->setKey('slug')->findOrFail($slug);
    }
    
}

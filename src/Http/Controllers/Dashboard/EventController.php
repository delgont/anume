<?php

namespace Delgont\Anume\Http\Controllers\Dashboard;

use Delgont\Anume\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Delgont\Anume\Http\Requests\CreateEventRequest;
use Delgont\Anume\Http\Requests\UpdateEventRequest;

use Delgont\Cms\Services\Image\ImageUploadService;

use App\Repository\Event\EventRepository;

use Delgont\Anume\Event;



class EventController extends Controller
{

    protected $eventRepository = null;
    protected $imageUploadService = null;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->eventRepository = app( EventRepository::class );
        $this->imageUploadService = $imageUploadService;
    }
    /**
     * Display admin account info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->eventRepository->orderBy('start_date', 'asc')->all();
        return view('anume::dashboard.events.index', compact(['events']));
    }

    public function create()
    {
        return view('anume::dashboard.events.create');
    }

    public function store(CreateEventRequest $request)
    {
        $request->validated();

        $event = $this->eventRepository->create([
            'title' => $request->title,
            'extract_text' => $request->extract_text,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'content' => $request->content,
            'featured_image' => null,
            'slug' => str_replace(' ', '-', $request->slug ?? $request->title),
            'featured_image' => ($request->hasFile('featured_image')) ? $this->imageUploadService->upload(request()->featured_image) : null
        ]);

        return back()->with('created', 'Event created successfully');
    }

    public function edit($id)
    {
        $event = $this->eventRepository->findOrFail($id);
        return view('anume::dashboard.events.edit', compact(['event']));
    }

    public function update(UpdateEventRequest $request, $id)
    {
        $request->validated();

        $this->eventRepository->update($id, [
            'title' => $request->title,
            'extract_text' => $request->extract_text,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'content' => $request->content,
            'featured_image' => null,
            'slug' => str_replace(' ', '-', $request->slug ?? $request->title),
            'featured_image' => ($request->hasFile('featured_image')) ? $this->imageUploadService->upload(request()->featured_image) : null
        ]);

        return back()->withInput()->with('message', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = $this->eventRepository->findOrFail($id);

        $this->eventRepository->delete($event);

        return back()->with('deleted', 'Event deleted successfully');
    }

    public function show($slug)
    {
        return $this->eventRepository->setKey('slug')->findOrFail($slug);
    }
    
}

@extends('delgont::layouts.master')

@section('title', 'Manage Events')

@section('pageHeading', 'Manage Events')

@section('requiredJs')
<script src="{{ asset('stephendevs/pagman/js/posts.js') }}" defer></script>
@endsection


@section('search')
    @include('delgont::includes.forms.search', ['action' => route('delgont.posts.search')])
@endsection

@section('actions-right')
<a href="{{ route('anume.dashboard.events.create') }}" class="text-primary p-1" data-toggle="tooltip" title="Add Event"><i class="bx bx-plus"></i> Add Event</a>
<a href="{{ route('delgont.posts.trash') }}" class="text-primary p-1" data-toggle="tooltip" title="Events Settings"><i class="bx bx-cog"></i> Settings</a>
@endsection

@section('content')

<section class="my-2">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-striped">
                        @if (count($events))
                            <thead>
                                <th><input type="checkbox" name="" id=""></th>
                                <th>Title</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Venue</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>{{ str_limit($event->title, 20) }}</td>
                                        <td>{{ $event->start_date }}</td>
                                        <td>{{ $event->end_date ?? 'Not Specified' }}</td>
                                        <td>{{ $event->start_time ?? 'Not Specified' }}</td>
                                        <td>{{ $event->end_time ?? 'Not Specified' }}</td>
                                        <td>{{ $event->venue ?? 'Not Specified' }}</td>
                                        <td>
                                            <a href="{{ route('anume.dashboard.events.destroy', ['id' => $event->id]) }}"><i class="bx bx-trash bx-sm text-danger"></i></a>
                                            <a href="{{ route('anume.dashboard.events.edit', ['id' => $event->id]) }}"><i class="bx bx-edit bx-sm text-primary"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            
                        @endif
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
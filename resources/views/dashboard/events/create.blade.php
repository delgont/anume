@extends('delgont::layouts.master')

@section('title', 'Manage Events')

@section('pageHeading', 'Add New Event')

@section('search')
    @include('delgont::includes.forms.search', ['action' => route('delgont.posts.search')])
@endsection

@section('requiredJs')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection

@section('actions-right')
<a href="{{ route('anume.dashboard.events.create') }}" class="text-primary p-1" data-toggle="tooltip" title="Add Event"><i class="bx bx-plus"></i> Add Event</a>
<a href="{{ route('delgont.posts.trash') }}" class="text-primary p-1" data-toggle="tooltip" title="Events Settings"><i class="bx bx-cog"></i> Settings</a>
@endsection

@section('actions')
<a href="{{ route('anume.dashboard.events') }}" class="text-primary p-1" data-toggle="tooltip" title="Add Post"><i class="bx bx-book"></i> All Events</a>
@endsection

@section('content')

<section class="my-2">
    <div class="container-fluid">
        <form action="{{ route( 'anume.dashboard.events.store' ) }}" class="row" id="createEventForm" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="col-lg-3">

           <div class="card alert alert-light border border-info p-0">
             <div class="card-body p-2">

               <label for="startDate">Start Date</label>
               <input type="date" name="start_date" class="form-control @error('start_date') {{ 'is-invalid' }} @enderror" value="{{ old('start_date') }}">
               <small class="text-danger">{{ $errors->first('start_date') }}</small><hr />

               <label for="endDate">End Date</label>
               <input type="date" name="end_date" class="form-control @error('end_date') {{ 'is-invalid' }} @enderror" value="{{ old('end_date') }}">
               <small class="text-danger">{{ $errors->first('end_date') }}</small>

               <div class="mt-3 row">
                 <div class="col-lg-6">
                   <label for="startTime">Start Time</label>
                   <input type="time" name="start_time" class="form-control @error('start_time') {{ 'is-invalid' }} @enderror"">
                 </div>
                 <div class="col-lg-6">
                  <label for="endTime">End Time</label>
                  <input type="time" name="end_time" class="form-control @error('end_time') {{ 'is-invalid' }} @enderror"">
                </div>
               </div>
               
             </div>
           </div>

           <div class="card alert alert-light border border-light p-0">
             <div class="card-body p-2">
              <label for="extractText" class="text-dark font-weight-bold">Event Extract Text | Description</label>
              <textarea name="extract_text" id="extractText" cols="30" rows="5" class="mt-2 form-control" placeholder="Extract Text">{{ old('extract_text') }}</textarea>
              <small class="text-danger post-extract-error">{{ $errors->first('extract_text') }}</small>
             </div>
           </div>

         </div>

         <div class="col-lg-6">
           @if (Session('created'))
               <div class="alert alert-success">
                 {{ Session('created') }}
               </div>
           @endif
           <div class="card shadow-sm border border-primary">
             <div class="card-body p-0">
              <textarea name="title" id="" cols="3" rows="2" class="form-control " placeholder="Event Title">{{ old('title') }}</textarea>
             </div>
           </div>
           <small class="text-danger">{{ $errors->first('title') }}</small>

           <div class="card shadow-sm border border-primary mt-2">
            <div class="card-body p-0">
             <input type="text" name="slug" class="form-control" placeholder="Event Slug" value="{{ old('slug') }}" />
            </div>
          </div>

          <small class="text-danger">{{ $errors->first('slug') }}</small>


           <div class="card shadow-sm alert p-0 alert-primary my-2 border border-primary">
            <div class="card-body p-0">
             <textarea name="content" id="editor" cols="3" rows="10" class="form-control" placeholder="Event Content"></textarea>
            </div>
          </div>

         </div>

         <div class="col-lg-3">
          <div class="card mb-3 p-0 alert alert-light">
               <img class="card-img-top" src="{{ asset('img/event.jpg') }}" alt="Featured Image" id="eventFeaturedImageHolder" />
               <div class="card-body p-2">
                 <h6 class="card-title mb-2 text-dark font-weight-bold">Choose Featured Image</h6>
                 <input type="file" name="featured_image" id="selectPostFeaturedImage" data-toggle="readImageAsDataURL" data-target="#eventFeaturedImageHolder" hidden />
                 <label for="selectPostFeaturedImage" class="custom-file-upload btn btn-sm bg-transparent py-1 px-2 border-info  text-primary" data-toggle="tooltip" title="Choose Featured Image">
                     <i class="bx bx-file"></i> Choose Image
                 </label>
                   <small class="text-danger featured-image-error">
                       {{ $errors->first('featured_image') }}
                   </small>
               </div>
           </div>

           <button type="submit" class="btn btn-info">Create Event</button>
         </div>

        </form>
    </div>
</section>

@endsection
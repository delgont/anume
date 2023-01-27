@extends('delgont::layouts.master')

@section('title', 'Posts')

@section('pageHeading', 'Website Intro Section')

@section('requiredJs')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection



@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <form action="{{ route('anume.dashboard.settings.intro.store') }}" method="POST" class="row" enctype="multipart/form-data">
            <div class="col-lg-8">
                    @csrf
                    <div class="card alert alert-light border border-light p-0">
                        <div class="card-body p-0">
                            <textarea name="aamsnm_intro" id="editor" class="form-control mt-4" cols="30" rows="10" placeholder="Intro">{{ old('aamsnm_intro') ?? option('aamsnm_intro') }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-md btn-light font-weight-bold border border-primary">Update</button>
            </div>
            <div class="col-lg-4">
                <h6 class="font-weight-bold">Intro Media</h6>
            <img src="{{ asset(option('aamsnm_intro_media')) }}" alt="" id="aamsnmIntroMediaHolder" class="img-fluid pb-3 rounded" />
                <input type="file" name="aamsnm_intro_media" id="" data-toggle="readImageAsDataUrl" data-target="#aamsnmIntroMediaHolder">
            </div>
        </form>
        <div class="row">
            
        </div>
    </div>
</section>

@endsection
@extends('delgont::layouts.master')

@section('title', 'Posts')

@section('pageHeading', 'Website Header Image')

@section('requiredJs')
<script src="{{ asset('stephendevs/pagman/js/posts.js') }}" defer></script>
@endsection


@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            
        </div>
        <div class="row">
            <!-- Posts Table -->
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset(option('aamsnm_header_image', 'img/header/header.jpg')) }}" alt="" id="imageHolder" />
                    <div class="card-body">
                        <form action="{{ route('anume.dashboard.settings.headerimage.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="aamsnm_header_image" id="AamsnmHeaderImage">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-upload"></i></button>
                            <small class="text-danger">{{ $errors->first('aamsnm_header_image') }}</small>
                        </form>
                        <hr />
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-1 scrollable custom-scrollbar">
                <a href="" class="d-block py-1"><i class="bx bx-trash bx-sm"></i></a>
                <a href="" class="d-block py-1"><i class="bx bx-edit bx-sm"></i></a>
                <a href="" class="d-block py-1"><i class="bx bx-edit bx-sm"></i></a>
            </div>
            <div class="col-lg-3 ">
                @includeIf('anume::dashboard.includes.settings', ['some' => 'data'])
            </div>
        </div>
    </div>
</section>

@endsection
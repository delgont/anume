@extends('delgont::layouts.master')

@section('title', 'Posts')

@section('pageHeading', 'Anume Settings')

@section('requiredJs')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection



@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-3">
                @includeIf('anume::dashboard.includes.settings', ['some' => 'data'])
            </div>
        </div>
    </div>
</section>

@endsection
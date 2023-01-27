@extends('delgont::layouts.master')

@section('title', 'Posts')

@section('pageHeading', 'Website Contact Info')

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
                <div class="card alert alert-light border border-primary">
                    <div class="card-body">
                        <form action="{{ route('anume.dashboard.settings.contact-info.store') }}" method="POSt" class="row">
                            @csrf
                            <div class="col-lg-6 ">
                                <label for="aamsnmEmail">Email Address</label>
                                <input type="email" class="form-control" name="aamsnm_email" value="{{ old('aamsnm_email') ?? option('aamsnm_email') }}" id="aamsnmEmail" />
                            </div>
                            <div class="col-lg-6">
                                <label for="aamsnmAddress">Address</label>
                                <input type="text" class="form-control" name="aamsnm_address" value="{{ old('aamsnm_address') ?? option('aamsnm_address') }}" id="aamsnmAddress" />
                            </div>
                            <div class="col-lg-6 pt-3">
                                <label for="aamsnmPhone">Phone Number</label>
                                <input type="text" class="form-control" name="aamsnm_phone" value="{{ old('aamsnm_phone') ?? option('aamsnm_phone') }}" id="aamsnmPhone" />
                            </div>
                            <div class="col-lg-12">
                                <div class="" style="">
                                    <h6>Google Map</h6>
                                    <iframe class="rounded w-100 h-50"
                                    src="{{ option('aamsnm_map', config('web.options.aamsnm_map')) }}"
                                    frameborder="0" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                                </div>
                                <label for="aamsnmMap">Google Map URL</label>
                                <textarea name="aamsnm_map" id="" cols="" class="form-control h-25 scrollable custom-scrollbar" rows="5" id="aamsnmMap">{{ old('aamsnm_map') ?? option('aamsnm_map') }}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                @includeIf('anume::dashboard.includes.settings', ['some' => 'data'])
            </div>
        </div>
    </div>
</section>

@endsection
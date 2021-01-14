@extends('layouts.app')

@include('layout.navbar')
@include('layout.background_carousel')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


        @include('HomeUserInterface.scholar_highschool')
        @include('HomeUserInterface.scholar_bachelor')
        @include('HomeUserInterface.scholar_master')
        @include('HomeUserInterface.scholar_phd')
        @include('HomeUserInterface.source_book')
        @include('HomeUserInterface.source_video')
        @include('HomeUserInterface.source_website')

        @include('layout.footer')
@endsection

@extends('WebSite.layouts.appWebsite')
@section('title', 'HomeWebSite')
@section('styles')

@endsection

@section('content')

    <main>
        @include('WebSite.includes.sectionHero')
        <hr>
        @include('WebSite.includes.sectionAbout')
        <hr>
        @include('WebSite.includes.sectionCostumed')
        <hr>
        @include('WebSite.includes.sectionGallery')
        <hr>
        @include('WebSite.includes.sectionTimeline')
        <hr>
        @include('WebSite.includes.sectionReviews')
        <hr>
        @include('WebSite.includes.sectionBooking')
    </main>
@endsection

@section('scripts')

@endsection

@extends('index')

@section('content')
    @component("partials.heading")
        {{ $page->title }}
    @endcomponent

    <p>
        {{ $page->content }}
    </p>

    @include('partials.nav')
@endsection
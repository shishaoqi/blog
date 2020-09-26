@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h4>{{ $collection->name }}</h4>
    @endcomponent

    @include('widgets.article')

@endsection
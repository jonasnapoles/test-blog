@extends('layouts.main')

@section('title', 'BBC Events')

@section('content')
    @foreach ($events as $event)
        <p>{{$event->title}} -- {{$event->description}}</p>
    @endforeach
@endsection

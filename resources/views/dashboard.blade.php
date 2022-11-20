@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 deshboard-title-container">
    <h1>My events</h1>
</div>

<div class="col-md-10 offset-md-1 deshboard-events-container">
    @if(count($events)>0)
    @else
    <p>You don't have events yet, <a href="/events/create">Create a new event</a></p>
</div>

@endsection

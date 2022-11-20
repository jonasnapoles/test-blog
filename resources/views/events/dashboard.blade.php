@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 deshboard-title-container">
        <h1>My events</h1>
    </div>

    <div class="col-md-10 offset-md-1 deshboard-events-container">
        @if(count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Participants</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event )
                    <tr>
                        <th scope="row"> {{ $loop->index + 1 }}</th>
                        <td>0<a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td><a href="#">Edit</a><a href="#">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You don't have events yet, <a href="/events/create">Create a new event</a></p>
        @endif
    </div>

@endsection

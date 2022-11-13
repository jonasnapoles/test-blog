@extends('layouts.main')

@section('title', 'BBC Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Search an event</h1>
        <form action="">
            <input type="text" name="search" name="search" class="form-control" placeholder="searching...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Next Events</h2>
        <p class="subtitle">See the events to the next days</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtoTime($event->date))}}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">x Participants</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">More details</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0)
                <p>There aren't events available</p>

            @endif
        </div>
    </div>

@endsection

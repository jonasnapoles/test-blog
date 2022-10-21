@extends('layouts.main')

@section('title', 'BBC Events')

@section('content')
<<<<<<< HEAD
    @foreach ($events as $event)
        <p>{{$event->title}} -- {{$event->description}}</p>
    @endforeach
=======
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
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/eventOne.jpg" alt="{{ $event->title }}">
            <div class="card-body">
                <div class="card-body">
                    <p class="card-date">20/10/2022</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">x Participants</p>
                    <a href="#" class="btn btn-primary">More details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

>>>>>>> 69f4771 (feature(#02):Update-events-MVC-styles)
@endsection

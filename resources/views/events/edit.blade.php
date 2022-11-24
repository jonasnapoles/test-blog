@extends('layouts.main')

@section('title', 'Editing: ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editing: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image of Event</label>
                <input type="file" id="image" name="image" class="from-control-file">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Event name" value="{{$event->title}}">
            </div>
            <div class="form-group">
                <label for="date">Date of event:</label>
                <input type="date" class="form-control" name="date" id="date" value="{{$event->date->format('Y-m-d')}}">
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Event address" value="{{$event->city}}">
            </div>
            <div class="form-group">
                <label for="title">is the event private?:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1" {{ $event->private == 1 ? "selected = 'selected'" : ""}}>Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea type="text" class="form-control" name="description" id="description"
                    placeholder="Event description" value="{{$event->description}}"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Infrastructure details:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="chair"> Chair
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="stage"> Stage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="tables"> Tables
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="catering"> Catering
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="souvenir"> Souvenir
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit event">
        </form>

    </div>
@endsection

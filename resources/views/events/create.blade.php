@extends('layouts.main')

@section('title', 'BBC Events')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create an event</h1>
        <form action="/event" method="POST">
        <div class="form-group">
            <label for="title">Event:</label>
            <input type="text" class="form-control" id="title" placeholder="Event name">
        </div>
        <div class="form-group">
            <label for="title">City:</label>
            <input type="text" class="form-control" id="City" placeholder="Event address">
        </div>
        <div class="form-group">
            <label for="title">is the event private?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Event description">
        </div>
        <input type="submit" class="btn btn-primary" value="Create event">
        </form>

    </div>
@endsection

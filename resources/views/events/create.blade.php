@extends('layouts.main')

@section('title', 'Create envent')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create an event</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image of Event</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Event name">
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Event address">
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
                <input type="text" class="form-control" name="description" id="description"
                    placeholder="Event description">
            </div>
            <div class="form-group">
                <label for="title">Infrastructure details</label>
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
            <input type="submit" class="btn btn-primary" value="Create event">
        </form>

    </div>
@endsection

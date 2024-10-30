@extends('layouts.app')

@section('page-description', 'Edit Destination')
@section('page-name', 'Edit Destination')

@section('main-content')
<main>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title">
            <h1 class="py-5">Edit Destination</h1>
        </div>
        <div class="create-form">
            <form action="{{route('destinations.update', $destination->id)}}" method="POST"
                class="form-control mb-5 shadow">
                @csrf
                @method('PUT')

                <div class="inputs p-2">
                    <input class="form-control my-2" type="text" name="name" value="{{$destination->name}}">
                    <input class="form-control my-2" type="text" name="type" value="{{$destination->type}}">
                    <textarea class="form-control" name="description" rows="3"
                        cols="50">{{$destination->description}}</textarea>
                    <input class="form-control my-2" type="url" name="img_url" value="{{$destination->img_url}}">
                    <input class="form-control my-2" type="text" name="trip_duration"
                        value="{{$destination->trip_duration}}">
                    <input class="form-control my-2" type="number" min="1" max="5" placeholder="Destination avg Vote"
                        name="avg_vote" value="{{$destination->avg_vote}}">
                    <input class="form-control my-2" type="number" name="tot_person_vote"
                        value="{{$destination->tot_person_vote}}">
                    <input class="form-control my-2" type="number" name="price" value="{{$destination->price}}">
                </div>
                <div class="btns p-2">
                    <button type="submit" class="btn btn-primary">Update destination</button>
                    <button type="reset" class="btn btn-warning">reset</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
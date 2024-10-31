@extends('layouts.app')

@section('page-description', 'Create new Destination')
@section('page-name', 'Create Destination')

@section('main-content')
<main>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="errors">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <p class="text-danger"><small>{{$error}}</small></p>
            @endforeach
            @endif
        </div>
        <div class="title">
            <h1 class="py-5">Create new Destination</h1>
        </div>
        <div class="create-form">
            <form action="{{route('destinations.store')}}" method="post" class="form-control mb-5 shadow">
                @csrf
                <div class="inputs p-2">
                    <input class="form-control my-2" type="text" placeholder="Destinaiton Name" name="name"
                        value="{{old('name')}}">
                    <input class="form-control my-2" type="text" placeholder="Destinaiton type" name="type"
                        value="{{old('type')}}">
                    <textarea class="form-control" name="description" rows="3" cols="50"
                        placeholder="Destination description">{{old('description')}}</textarea>
                    <input class="form-control my-2" type="url" placeholder="Destinaiton img" name="img_url"
                        value="{{old('img_url')}}">
                    <input class="form-control my-2" type="text" placeholder="Trip duration" name="trip_duration"
                        value="{{old('trip_duration')}}">
                    <input class="form-control my-2" type="number" placeholder="Destination avg Vote" name="avg_vote"
                        value="{{old('avg_vote')}}">
                    <input class="form-control my-2" type="number" placeholder="Destination TOT persons vote"
                        name="tot_person_vote" value="{{old('tot_person_vote')}}">
                    <input class="form-control my-2" type="number" placeholder="Price" name="price"
                        value="{{old('price')}}">
                </div>
                <div class="btns p-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-warning">reset</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
@extends('layouts.app')

@section('page-description', 'Create new Destination')
@section('page-name', 'Create Destination')

@section('main-content')
<main>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title">
            <h1 class="py-5">Create new Destination</h1>
        </div>
        <div class="create-form">
            <form action="{{route('destinations.store')}}" method="post" class="form-control mb-5 shadow">
                @csrf
                <div class="inputs p-2">
                    <div class="name">
                        <input class="form-control my-2" type="text" placeholder="Destinaiton Name" name="name"
                            value="{{old('name')}}">
                        @error("name")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="type">
                        <input class="form-control my-2" type="text" placeholder="Destinaiton type" name="type"
                            value="{{old('type')}}">
                        @error("type")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="description">
                        <textarea class="form-control" name="description" rows="3" cols="50"
                            placeholder="Destination description">{{old('description')}}</textarea>
                        @error("description")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="img">
                        <input class="form-control my-2" type="url" placeholder="Destinaiton img" name="img_url"
                            value="{{old('img_url')}}">
                        @error("img_url")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="duration_trip">
                        <input class="form-control my-2" type="text" placeholder="Trip duration" name="trip_duration"
                            value="{{old('trip_duration')}}">
                        @error("trip_duration")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="vote">
                        <input class="form-control my-2" type="number" placeholder="Destination avg Vote"
                            name="avg_vote" value="{{old('avg_vote')}}">
                        @error("avg_vote")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="review">
                        <input class="form-control my-2" type="number" placeholder="Destination TOT persons vote"
                            name="tot_person_vote" value="{{old('tot_person_vote')}}">
                        @error("tot_person_vote")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="price">
                        <input class="form-control my-2" type="number" placeholder="Price" name="price"
                            value="{{old('price')}}">
                        @error("price")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
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

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
                    <div class="name">
                        <input class="form-control my-2" type="text" name="name"
                            value="{{old('name',$destination->name)}}">
                        @error("name")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="type">
                        <input class="form-control my-2" type="text" name="type"
                            value="{{old('type',$destination->type)}}">
                        @error("type")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="descritpion">
                        <textarea class="form-control" name="description" rows="3"
                            cols="50">{{old('decription',$destination->description)}}</textarea>
                        @error("description")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="img">
                        <input class="form-control my-2" type="url" name="img_url"
                            value="{{old('img_url',$destination->img_url)}}">
                        @error("img_url")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="duration">
                        <input class="form-control my-2" type="text" name="trip_duration"
                            value="{{old('trip_duration',$destination->trip_duration)}}">
                        @error("trip_duration")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="vote">
                        <input class="form-control my-2" type="number" step="0.1" min="1" max="5"
                            placeholder="Destination avg Vote" name="avg_vote"
                            value="{{old('avg_vote',$destination->avg_vote)}}">
                        @error("avg_vote")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="reviews">
                        <input class="form-control my-2" type="number" name="tot_person_vote"
                            value="{{old('tot_person_vote',$destination->tot_person_vote)}}">
                        @error("tot_person_vote")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                    <div class="price">
                        <input class="form-control my-2" type="number" name="price"
                            value="{{old('price',$destination->price)}}">
                        @error("price")
                        <p class="text-danger"><small>{{$message}}</small></p>
                        @enderror
                    </div>
                </div>
                <div class="btns p-2">
                    <button type="submit" class="btn btn-primary">Update {{$destination->name}}</button>
                    <button type="reset" class="btn btn-warning">reset</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

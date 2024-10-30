@extends('layouts.app')

@section('page-description','Show destination page')
@section('page-name', 'Destination')

@section('main-content')
<main>
    <div class="container">
        <div class="card my-5 shadow">
            <div class="card-body">
                <h5 class="card-title py-3">{{$destination->name}}</h5>
                <p class="card-text"><small class="text-body-secondary">{{$destination->avg_vote}}
                        ({{$destination->tot_person_vote}})</small></p>
                <img src="{{$destination->img_url}}" class="card-img-top" alt="{{$destination->name}}">
                <p class="card-text">{{$destination->description}}</p>
            </div>
        </div>
    </div>
</main>
@endsection
{{-- Extends Layouts --}}
@extends('layouts.app')

{{-- Page description --}}
@section('page-description', 'Daily Trip home page')
{{-- Page Title --}}
@section('page-name', 'Dayli Trip')

{{-- Main --}}
@section('main-content')
<main>
    <h1 class="py-5 fw-bold text-center">
        Albainan Destinations
    </h1>
    <div class="container">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 py-4">
            @forelse ($destinations as $destination)
            <div class="col">
                <div class="card shadow">
                    <img src="{{$destination->img_url}}" class="card-img-top" alt="{{$destination->name}}"
                        height="100px">
                    <div class="card-body">
                        <p class="card-text">{{$destination->type}}</p>
                        <h4 class="card-title">{{$destination->name}}</h4>
                        <p><i>{{$destination->description}}</i></p>
                        <p>{{$destination->trip_duration}}</p>
                        <div>
                            <span><small>{{$destination->avg_vote}}</small></span>
                            <span><small>({{$destination->tot_person_vote}})</small></span>
                        </div>
                        <div class="price">
                            <p class="text-danger fs-6 py-4"><span class="text-dark fs-6">FROM
                                </span>&euro;{{$destination->price}}
                                <span class="text-dark fs-6">per person</span>
                            </p>
                        </div>
                        <a href="{{route('show_destination',$destination->id)}}"
                            class="btn btn-outline text-primary">More info...</a>
                    </div>
                </div>
            </div>
            @empty
            abort(404)
            @endforelse
        </div>
    </div>
</main>
@endsection
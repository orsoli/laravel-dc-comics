{{-- Extends Layouts --}}
@extends('layouts.app')

{{-- Page description --}}
@section('page-description', 'Daily Trip home page')
{{-- Page Title --}}
@section('page-name', 'Daily Trip')

{{-- Main --}}
@section('main-content')
<main>
    <div class="container py-5">
        {{-- <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 py-4">
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
                        <a href="{{route('destinations.show',$destination->id)}}"
                            class="btn btn-outline text-primary">More info...</a>
                    </div>
                </div>
            </div>
            @empty
            abort(404)
            @endforelse
        </div> --}}

        <h1 class="py-3 fw-bold text-center">
            Destinations
        </h1>

        <!-- Create destination Button-->
        <a href="{{route('destinations.create')}}" type="button" class="btn btn-sm btn-outline-primary mb-3">
            Create new Destination
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Img</th>
                    <th scope="col">Destinaton</th>
                    <th scope="col">Type</th>
                    <th scope="col">Trip Duration</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($destinations as $destination)
                <tr>
                    <th scope="row">{{$destination->id}}</th>
                    <td>
                        <img src="{{$destination->img_url}}" alt="{{$destination->name}}" class="card-img-top"
                            id="img-destination">
                    </td>
                    <td>{{$destination->name}}</td>
                    <td>{{$destination->type}}</td>
                    <td>{{$destination->trip_duration}}</td>
                    <td>
                        <a href="{{route('destinations.show', $destination->id)}}" class="btn btn-sm btn-success"><i
                                class="bi bi-eye-fill"></i></a>
                        <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil-fill"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
                @empty
                abort(404)
                @endforelse
            </tbody>
        </table>
    </div>
</main>
@endsection
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
                        <a href="{{route('destinations.edit', $destination->id)}}" class="btn btn-sm btn-warning"><i
                                class="bi bi-pencil-fill"></i></a>
                        <form action="{{route('destinations.destroy', $destination->id)}}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger delete-btn" type="submit" value="delete"
                                delete-data-name="{{$destination->name}}"><i class="bi bi-trash3-fill"></i></button>
                        </form>
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
@section('add-script')
@vite('resources/js/delete_destination.js')
@endsection
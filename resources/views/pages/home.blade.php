{{-- Extends Layouts --}}
@extends('layouts.app')

{{-- Links --}}
@section('favicon','DailyTrip-logo.png')
{{-- Page description --}}
@section('page-description', 'Daily Trip home page')
{{-- Page Title --}}
@section('page-name', 'Dayli Trip')

{{-- Main --}}
@section('main-content')
<div class="row row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
  <div class="col">
    @forelse ($destinations as $destination)
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    @empty
    abort(404)
    @endforelse
  </div>
</div>
@endsection
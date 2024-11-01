@extends('layouts.app')

@section('page-description', 'Create new Destination')
@section('page-name', 'Create Destination')

@section('main-content')
<main>
    @include('layouts.destination_input', [
    'titleForm' => 'Create new Destination',
    'url' => route('destinations.store'),
    'clickName' => 'Save',
    'placeholderName' => 'Name',
    'placeholderType' => 'Type',
    'placeholderDescription' => 'Description',
    'placeholderImg' => 'Img Url',
    'placeholderDuration' => 'Trip Duration',
    'placeholderVote' => 'Avg Vote',
    'placeholderReview' => 'ToT person vote',
    'placeholderPrice' => 'Price'
    ])
</main>
@endsection

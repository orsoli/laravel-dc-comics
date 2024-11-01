@extends('layouts.app')

@section('page-description', 'Edit Destination')
@section('page-name', 'Edit Destination')

@section('main-content')
<main>
    @include('layouts.destination_input',[
    'titleForm' => 'Update Destination',
    'method' => 'PUT',
    'url' => route('destinations.update', $destination->id),
    'clickName' => 'Update',
    'destinationNameValue' => $destination->name,
    'destinationTypeValue' => $destination->type,
    'destinationDescriptionValue' => $destination->description,
    'destinationImgValue' => $destination->img_url,
    'destinationDurationValue' => $destination->trip_duration,
    'destinationVoteValue' => $destination->avg_vote,
    'destinationReviewValue' => $destination->tot_person_vote,
    'destinationPriceValue' => $destination->price
    ])
</main>
@endsection

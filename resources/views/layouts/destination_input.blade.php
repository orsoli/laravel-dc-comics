<div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="title">
        <h1 class="py-5">{{$titleForm}}</h1>
    </div>
    <div class="create-form">
        <form action="{{$url}}" method="post" class="form-control mb-5 shadow">
            @csrf
            @method($method ?? '')

            <div class="inputs p-2">
                <div class="name">
                    <input class="form-control my-2" type="text" placeholder="{{$placeholderName ?? ' '}}" name="name"
                        value="{{old('name', $destinationNameValue ?? '')}}">
                    @error("name")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="type">
                    <input class="form-control my-2" type="text" placeholder="{{$placeholderType ?? ' '}}" name="type"
                        value="{{old('type',$destinationTypeValue ?? '')}}">
                    @error("type")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="description">
                    <textarea class="form-control" name="description" rows="3" cols="50"
                        placeholder="{{$placeholderDescription ?? ' '}}">{{old('description', $destinationDescriptionValue ?? '')}}</textarea>
                    @error("description")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="img">
                    <input class="form-control my-2" type="url" placeholder="{{$placeholderImg ?? ' '}}" name="img_url"
                        value="{{old('img_url', $destinationImgValue ?? '')}}">
                    @error("img_url")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="duration_trip">
                    <input class="form-control my-2" type="text" placeholder="{{$placeholderDuration ?? ' '}}"
                        name="trip_duration" value="{{old('trip_duration', $destinationDurationValue ?? '')}}">
                    @error("trip_duration")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="vote">
                    <input class="form-control my-2" type="number" step="0.1" placeholder="{{$placeholderVote ?? ' '}}"
                        name="avg_vote" value="{{old('avg_vote',$destinationVoteValue ?? '')}}">
                    @error("avg_vote")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="review">
                    <input class="form-control my-2" type="number" placeholder="{{$placeholderReview ?? ' '}}"
                        name="tot_person_vote" value="{{old('tot_person_vote', $destinationReviewValue ?? '')}}">
                    @error("tot_person_vote")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
                <div class="price">
                    <input class="form-control my-2" type="number" placeholder="{{$placeholderPrice ?? ' '}}"
                        name="price" value="{{old('price', $destinationPriceValue ?? '')}}">
                    @error("price")
                    <p class="text-danger"><small>{{$message}}</small></p>
                    @enderror
                </div>
            </div>
            <div class="btns p-2">
                <button type="submit" class="btn btn-primary">{{$clickName}}</button>
                <button type="reset" class="btn btn-warning">reset</button>
            </div>
        </form>
    </div>
</div>

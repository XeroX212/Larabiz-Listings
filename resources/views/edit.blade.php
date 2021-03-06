@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create New Listing <span class="float-right"><a href="{{{ url("/home") }}}" class="badge badge-secondary">Go Back</a></span></div>

            <div class="card-body">
                {{-- Form Starts --}}
            <form method="POST" action="{{route('listings.update', [$listingDetails->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Company Name"
                            value="{{ $listingDetails->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            placeholder="Your Company Address" value="{{  $listingDetails->address }}">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" name="website" id="website"
                            placeholder="https://www.Company-Name.com" value="{{  $listingDetails->website }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Company Email"
                            value="{{  $listingDetails->email }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="455555xxx"
                            value="{{  $listingDetails->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="bio">Company Bio</label>
                        <textarea type="text" class="form-control" name="bio" id="bio"
                            rows="3">{{{ $listingDetails->bio }}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

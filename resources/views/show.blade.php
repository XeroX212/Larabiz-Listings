@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{{ $listings->name }}}<span class="float-right"><a href="{{{ url("listings") }}}"
                class="badge badge-secondary">Go back</a></span></div>
            <div class="card-body">
                <div class="list-group">
                    <div class="list-group-item">
                        Company Name: {{{$listings->name}}}
                    </div>
                    <div class="list-group-item">
                        Address: {{{$listings->address}}}
                    </div>
                    <div class="list-group-item">
                        Website: {{{$listings->website}}}
                    </div>
                    <div class="list-group-item">
                        Email: {{{$listings->email}}}
                    </div>
                    <div class="list-group-item">
                        Phone: {{{$listings->phone}}}
                    </div>
                    <div class="list-group-item">
                        Bio: {{{$listings->bio}}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

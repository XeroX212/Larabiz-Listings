@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="{{{ url("listings/create") }}}" class="badge badge-secondary">Create New Listing</a></span></div>
                <ul>
                    @foreach ($listings as $item)
                    <li>{{{ $item->name }}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

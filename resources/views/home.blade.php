@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="{{{ url("listings/create") }}}" class="badge badge-secondary">Create New Listing</a></span></div>
                <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">ID #</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">phone</th>
                            <th scope="col">Edit</th>
                            <th scope="col">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($listings as $item)
                            <tr>
                                <th scope="row">{{{ $item->id }}}</th>
                                <td>{{{ $item->name }}}</td>
                                <td>{{{ $item->phone }}}</td>
                                <td><a href="{{{route('listings.edit', [$item->id])}}}" class="btn btn-secondary btn-sm">Edit</a></td>
                                <td>
                                <form action="{{{route('listings.destroy', [$item->id])}}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
</div>
@endsection

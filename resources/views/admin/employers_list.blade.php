@extends('layout.layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Phone</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Created</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($employers as $employer)
                <tr class="text-center">
                    <th scope="row">{{ $employer->id }}</th>
                    <td scope="row">{{ $employer->name }}</td>
                    <td scope="row">{{ $employer->phone }}</td>
                    <td scope="row">{{ $employer->email }}</td>
                    <td scope="row">{{ $employer->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
</table>
@endsection
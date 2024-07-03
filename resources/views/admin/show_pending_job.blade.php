@extends('layout.layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Company</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Description</th>
                <th scope="col" class="text-center">Location</th>
                <th scope="col" class="text-center">Employment Type</th>
                <th scope="col" class="text-center">Experience</th>
                <th scope="col" class="text-center">Salary</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr class="text-center">
                <th scope="row">{{ $job->id }}</th>
                <td scope="row">{{ $job->company_name }}</td>
                <td scope="row">{{ $job->title }}</td>
                <td scope="row" class="w-25">{{ $job->description }}</td>
                <td scope="row">{{ $job->location }}</td>
                <td scope="row">{{ $job->employment_type }}</td>
                <td scope="row">{{ $job->experience }}</td>
                <td scope="row">{{ $job->salary }}</td>
                <td>
                    <form action="{{ route('admin.approve', $job->id) }}" method="POST" class="m-0">
                        @csrf
                        @method('POST')
                        <button class="btn btn-primary btn-sm">Approve</button>
                    </form>
                </td>
            </tr>
        </tbody>
</table>
@endsection
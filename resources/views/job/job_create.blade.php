@extends('layout.layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="w-25">
            <form class="w-100" action="{{ route('job.create') }}" method="POST">
                @csrf
                @method('POST')
                <div class="col-md-12 mb-2">
                    <label class="labels">Company Name<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Company name" name="company_name">
                    @error('company_name')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="labels">Job Title<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Job title" name="title">
                    @error('title')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="labels">Job Description<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Job description" name="description">
                    @error('description')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="labels">Job Location<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Job location" name="location">
                    @error('location')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="labels">Employment Type<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Employment type" name="employment_type">
                    @error('employment_type')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="labels">Experience<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Experience" name="experience">
                    @error('experience')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="labels">Salary<span class="text-danger">&#42;</span></label>
                    <input type="text" class="form-control" placeholder="Salary" name="salary">
                    @error('salary')
                        <span class="d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

@endsection

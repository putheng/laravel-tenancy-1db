@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ config('app.name') }} Dashboard</div>

                <div class="card-body">
                    <div class="list-group">
                        @foreach($projects as $project)
                            <a href="{{ route('project.show', $project) }}" class="list-group-item">
                                {{ $project->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <br>
            <div class="card">
                <div class="card-header">New Project</div>
                <div class="card-body">
                    <form action="{{ route('project.create') }}" method="post">
                        @csrf

                        <div class="form-group @error('name') is-invalid @enderror">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Create project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

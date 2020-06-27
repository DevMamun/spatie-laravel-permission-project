@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>All Posts</span>
                    @role('writer|admin')
                        <a href="{{ route('post.create') }}">Add Post</a>
                    @endrole
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($posts as $data)
                            <li class="d-flex justify-content-between mb-2">
                                <a href="#">
                                    <h5>
                                        {{ $data->title }}
                                    </h5>
                                </a>
                                @role('editor|admin')
                                <a href="{{ route('post.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                @endrole
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection          
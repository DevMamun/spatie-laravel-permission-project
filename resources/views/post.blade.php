@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>All Posts</span>
                    <a href="#">Add Post</a>
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
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection          
@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container">
        <h2>Posts</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>OwnerId</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->ownerId}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
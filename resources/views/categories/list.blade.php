@extends('layouts.layout')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container">
        <h2>Categories</h2>
        <div class="row">
            
            @foreach ($categories as $category)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$category->id}}</h5>
                            <p class="card-text">{{$category->description}} fait par {{$category->user->name}}</p>
                            <a href="categories/{{$category->id}}" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
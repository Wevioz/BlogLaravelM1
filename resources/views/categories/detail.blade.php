@extends('layouts.layout')

@section('title')
    {{$category->title}}
@endsection

@section('content')
    <div class="container">
        <h2>{{$category->title}}</h2>
        <div class="row">

            
            
            @foreach ($formations as $formation)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$formation->title}}</h5>
                            <p class="card-text">{{$formation->description}} fait par {{$formation->user->name}}</p>
                            <a href="formation/{{$formation->id}}" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
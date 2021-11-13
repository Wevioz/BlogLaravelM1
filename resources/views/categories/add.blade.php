@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container">
        <h2>Posts - Ajout</h2>

        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ownerId" class="form-label">Auteur :</label>
                <input type="text" class="form-control" id="ownerId" placeholder="Entrez un auteur" name="ownerId">
            </div>

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Titre :</label>
                <input type="text" class="form-control" id="title" placeholder="Entrez un titre" name="title">
            </div>
            <label for="content">Contenu : </label>
            <textarea class="form-control" rows="5" id="content" name="content"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
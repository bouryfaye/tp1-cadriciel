@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('content')

   <div class="row">
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
        <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter</a>
    </div>
   </div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->id }}</td>
                    <td><a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nom }}</a></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $etudiants }}
    </div>
</div>


@endsection
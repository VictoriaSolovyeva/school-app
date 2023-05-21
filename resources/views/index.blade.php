@extends('app')

@section('content')

    <h1>Application de l'école</h1>

    <a href="{{ route('students.create') }}">Ajouter un élève</a><br>
    <a href="{{ route('students.index') }}">Voir tous les élèves</a><br>
    Voir les élèves d'une classe: <br>
    @foreach ($classes as $classe)
        <p>
            <a href="{{ route('classe.detail', ['id' => $classe->id]) }}">
                {{ $classe->name }}
            </a>
        </p>
    @endforeach

@endsection

@extends('app')

@section('content')

    <ul>
        <li><a href="{{ route('students.create') }}">Ajouter un élève</a></li>
        <li><a href="{{ route('students.index') }}">Afficher tous les élèves de l'école</a></li>
        <li>Afficher les élèves d'une classe:</li>
        <ul>
            @foreach ($classes as $classe)
                <li>
                    <a href="{{ route('classe.detail', ['id' => $classe->id]) }}">
                        {{ $classe->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </ul>

@endsection

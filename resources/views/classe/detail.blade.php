@extends('app')

@section('content')

    <h3><a href="{{ route('index') }}">Retour à l'accueil</a></h3>

    <div>
        <p>{{ $student->first_name }}</p>
        <p>{{ $student->last_name }}</p>
        <p>{{ $student->birth_date }}</p>
        <p>{{ $student->address }}</p>
        <p>{{ $classe->name }}</p>
    </div>

@endsection

@extends('app')

@section('content')

    <h3><a href="{{ route('index') }}">Retour à l'accueil</a></h3>

    @foreach ($students as $student)
        <p>
            <a href="{{ route('students.detail', ['id' => $student->id]) }}">
                {{ $student -> id }} -
                {{ $student -> first_name }} {{ $student -> last_name }}
            </a>
        </p>
    @endforeach

@endsection

@extends('app')

@section('content')

    <h1>Hello World</h1>
    <a href="{{ route('students.create') }}">Ajouter un élève</a>

@endsection

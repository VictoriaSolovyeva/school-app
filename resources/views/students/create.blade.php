@extends('app')

@section('content')

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input type="text" name="firstName">
        <input type="text" name="lastName">
        <input type="text" name="id">
        <button type="submit">Ajouter</button>
    </form>

@endsection

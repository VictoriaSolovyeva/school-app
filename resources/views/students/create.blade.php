@extends('app')

@section('content')

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="firstName">firstName</label>
        <input type="text" id="firstName" name="firstName"><br>
        <label for="lastName">lastName</label>
        <input type="text" id="lastName" name="lastName"><br>
        <label for="birthDate">birthDate</label>
        <input type="date" id="birthDate" name="birthDate"><br>
        <label for="address">address</label>
        <input type="text" id="address" name="address"><br>
        <label for="classeId">classeId</label>
        <input type="number" min="1" max="3" id="classeId" name="classeId"><br>
        <button type="submit">Ajouter</button>
    </form>

@endsection

@extends('app')

@section('content')

    <h3>Ajouter un élève</h3>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="lastName">Nom:</label>
            <input type="text" id="lastName" name="lastName">
        </div>
        <div>
            <label for="firstName">Prénom:</label>
            <input type="text" id="firstName" name="firstName">
        </div>
        <div>
            <label for="birthDate">Date de naissance:</label>
            <input type="date" id="birthDate" name="birthDate">
        </div>
        <div>
            <label for="address">Adresse:</label>
            <input type="text" id="address" name="address">
        </div>
        <div>
            <label for="classeId">Classe:</label>
            <select id="classeId" name="classeId">
                @foreach($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>

@endsection

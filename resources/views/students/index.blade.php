@extends('app')

@section('content')

    <h3>
        Liste des élèves
        @if ($classe)
            : {{ $classe->name }}
        @endif
    </h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Adresse</th>
            @if (!$classe)
                <th>Classe</th>
            @endif
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $student->address }}</td>
                @if (!$classe)
                    <td>{{ $student->classe_id }}</td>
                @endif
            </tr>
        @endforeach
    </table>

@endsection

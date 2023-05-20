@extends('app')

@section('content')

    @foreach ($students as $student)
        <p>{{ $student -> id }} - {{ $student -> first_name }} {{ $student -> last_name }} : {{ $student -> classe_id }}</p>
    @endforeach

@endsection

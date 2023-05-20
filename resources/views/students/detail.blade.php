@extends('app')

@section('content')

    <div>
        <p>{{ $student->first_name }}</p>
        <p>{{ $student->last_name }}</p>
        <p>{{ $student->birth_date }}</p>
        <p>{{ $student->address }}</p>
        <p>{{ $classe->name }}</p>
    </div>

@endsection

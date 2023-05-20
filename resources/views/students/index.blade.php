@extends('app')

@section('content')

    @foreach ($students as $student)
        {{ $student -> firstName }} {{ $student -> lastName }}
    @endforeach

@endsection

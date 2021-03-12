@extends('layouts.base')
@section('title', 'Designer')
@section('content')
    <h1>{{ $designer->name }}</h1>
    <p>{{ $designer->nationality }}</p>
    <p>{{ $designer->birth_year }}</p>
@endsection
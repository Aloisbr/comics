@extends('layouts.base')
@section('title', 'Character')
@section('content')
    <h1>{{ $character->name }}</h1>
    <h3>{{ $character->designer->name }}</h3>
    <p>{{ $character->creation_year }}</p>
    <p>{{ $character->comics }}</p>
@endsection
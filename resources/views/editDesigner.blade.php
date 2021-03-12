@extends('layouts.base')
@section('style')
<link rel="stylesheet" href="{{ url('/css/edit.css') }}">
<link rel="stylesheet" href="{{ url('/css/designer.css') }}">
@endsection
@section('title', 'Add')
@section('content')
    <h1>Edit</h1>
    <form action="/editDesigner" method="post">
        @csrf
        <input class="input" type="hidden" value="{{ $designer->id }}" name="id">
        <label for="name">Name</label>
        <input class="input" type="text" id="name" name="name" value="{{ $designer->name }}">
        <label for="nationality">Nationality</label>
        <input class="input" type="text" id="nationality" name="nationality" value="{{ $designer->nationality }}">
        <label for="birth_year">Birth Year</label>
        <input class="input" type="number" id="birth_year" name="birth_year" value="{{ $designer->birth_year }}">
        <input class="button input" type="submit" value="Submit">
    </form>
@endsection
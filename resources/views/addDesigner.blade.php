@extends('layouts.base')
@section('style')
<link rel="stylesheet" href="{{ url('/css/edit.css') }}">
<link rel="stylesheet" href="{{ url('/css/designer.css') }}">
@endsection
@section('title', 'Add')
@section('content')
    <h1>Add</h1>
    <form action="/addDesigner" method="post">
        @csrf
        <input class="input" type="text" placeholder="Name" name="name">
        <input class="input" type="text" placeholder="Nationality" name="nationality">
        <input class="input" type="number" placeholder="Birth Year" name="birth_year">
        <input class="button input" type="submit" value="Submit">
    </form>
@endsection
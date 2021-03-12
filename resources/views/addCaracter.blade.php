@extends('layouts.base')
@section('style')
<link rel="stylesheet" href="{{ url('/css/edit.css') }}">
@endsection
@section('title', 'Add')
@section('content')
    <h1>Add</h1>
    <form action="/addCharacter" method="post">
        @csrf
        <input class="input" type="text" placeholder="Name" name="name">
        <select name="designer_id" id="designer">
            <option value="">Select a Designer</option>
            @foreach ($designers as $designer)
                <option value="{{ $designer->id }}">{{ $designer->name }}</option>   
            @endforeach
        </select>
        <input class="input" type="number" placeholder="Creation Year" name="creation_year">
        <input class="input" type="text" placeholder="Comics" name="comics">
        <input class="button input" type="submit" value="Submit">
    </form>
@endsection
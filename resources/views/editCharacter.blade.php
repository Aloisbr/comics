@extends('layouts.base')
@section('style')
<link rel="stylesheet" href="{{ url('/css/edit.css') }}">
@endsection
@section('title', 'Edit')
@section('content')
    <h1>Edit</h1>
    <form action="/editCharacter" method="post">
        @csrf
        <input class="input" type="hidden" value="{{ $character->id }}" name="id">
        <label for="name">Name</label>
        <input class="input" type="text" value="{{ $character->name }}" id="name" name="name">
        <label for="designer">Designer</label>
        <select name="designer_id" id="designer">
            <option value=" {{ $character->designer_id }} ">{{ $character_designer }}</option>
            @foreach ($designers as $designer)
            @if ($designer->name != $character_designer)
                <option value="{{ $designer->id }}">{{ $designer->name }}</option>   
            @endif
            @endforeach
        </select>
        <label for="creation_year">Creation Year</label>
        <input class="input" type="number" value="{{ $character->creation_year }}" id="creation_year" name="creation_year">
        <label for="comics">Comics</label>
        <input class="input" type="text" value="{{ $character->comics }}" id="comics" name="comics">
        <input class="button input" type="submit" value="Submit">
    </form>
@endsection
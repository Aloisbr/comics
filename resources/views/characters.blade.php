@extends('layouts.base')
@section('style')
<link rel="stylesheet" href="{{url('css/addButton.css')}}">
@endsection
@section('title', 'Characters')
@section('content')
    <h1>Characters</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>DESIGNER</th>
                <th>COMICS</th>
                <th>CREATION YEAR</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <th>{{ $character->id }}<th>
                    <td><a href="/character/{{ $character->id }}">{{ $character->name }}</a></td>
                    <td>{{ $character->designer->name }}</td>
                    <td>{{ $character->comics}}</td>
                    <td>{{ $character->creation_year }}</td>
                    <td><a href="/editCharacter/{{ $character->id }}">U</a></td>
                    <td>
                        <form method="POST" action="/removeCharacter">
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" id="remove" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a class="button" href="/addCharacter">Add</a>
    </div>
@endsection
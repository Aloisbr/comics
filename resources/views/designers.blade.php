@extends('layouts.base')
@section('style')
@endsection
@section('title', 'Designers')
@section('content')
    <h1>Designers</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>NATIONALITY</th>
                <th>BIRTH YEAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($designers as $designer)
                <tr>
                    <th>{{ $designer->id }}<th>
                    <td><a href="/designer/{{ $designer->id }}">{{ $designer->name }}</a></td>
                    <td>{{ $designer->nationality }}</td>
                    <td>{{ $designer->birth_year}}</td>
                    <td><a href="/editDesigner/{{ $designer->id }}">U</a></td>
                    <td>
                        <form method="POST" action="/removeDesigner">
                        @csrf
                        <input type="hidden" name="id" value="{{ $designer->id }}">
                        <input type="submit" id="remove" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a href="/addDesigner">Add</a>
    </div>
@endsection
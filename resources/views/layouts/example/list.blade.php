@extends('layouts.master')
@section('content')
    <h2>All Examples</h2>
    <a href="{{route('example.create')}}" class="btn btn-info mb-3"> add new example</a>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($examples as $example)
            <tr>
                <td>{{ $example->id }}</td>
                <td>{{ $example->title }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

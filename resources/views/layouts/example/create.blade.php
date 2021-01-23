@extends('layouts.master')
@section('content')
<h2>Add New Example</h2>
<div class="row">


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" class="form-horizontal" action="{{route('example.store')}}">
        @csrf
    <label for="inputEmail3" class="col-sm-2 control-label">title</label>
    <input class="form-group" type="text" name="title" id="title">
    <button name="submit" class="btn btn-danger form-group">submit</button>
    </form>
</div>
@endsection

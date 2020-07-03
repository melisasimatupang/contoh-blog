@extends('layouts.home')

@section('content')
<h1>Edit Tags</h1>
<br><br>
<form action="{{ route('tags.update', $tags->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" class="form-control input-default" placeholder="add tags" name="name" value="{{ $tags->name }}">
    <div class="form-group">
        <button class="btn btn-primary btn-block">ubah data</button>
    </div>
</form>

@endsection
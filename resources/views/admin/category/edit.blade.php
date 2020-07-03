@extends('layouts.home')

@section('content')
<h1>Edit Category</h1>
<br><br>
<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" class="form-control input-default" placeholder="add category" name="name" value="{{ $category->name }}">
    <div class="form-group">
        <button class="btn btn-primary btn-block">ubah data</button>
    </div>
</form>

@endsection
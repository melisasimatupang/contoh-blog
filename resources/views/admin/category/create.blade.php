@extends('layouts.home')

@section('content')
<h1>Add Category</h1>
<br><br>
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif
    
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session('success')}}
        </div>
    @endif

<form action="{{ route('category.store')}}" method="POST">
    @csrf
    <input type="text" class="form-control input-default" placeholder="add category" name="name">
    <div class="form-group">
        <button class="btn btn-primary btn-block">save</button>
    </div>
</form>

@endsection
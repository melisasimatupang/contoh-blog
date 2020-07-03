@extends('layouts.home')

@section('content')
<h1>Add New User</h1>
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

<form action="{{ route('user.store')}}" method="POST">
    @csrf

    <div class="form-group">
    <label>Nama User</label>
    <input type="text" class="form-control input-default" name="name"></div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label>Type User</label>
        <select class="form-control" name="tipe">
            <option value="" holder>Pilih Tipe User</option>
            <option value="1" holder>Administrator</option>
            <option value="0" holder>Author</option>
        </select>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block">save</button>
    </div>

</form>

@endsection
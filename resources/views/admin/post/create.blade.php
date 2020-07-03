@extends('layouts.home')

@section('content')
<h1>Add Post</h1>
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

<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id">
        <option value="" holder>Pilih Kategori</option>
        @foreach($category as $result)
            <option value ="{{ $result->id }}">{{ $result->name }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Tags (hold shift to select more than one):</label>
        <select multiple="multiple" name="tags[]" class="form-control" id="sel2">
            @foreach( $tags as $tags)
            <option value="{{( $tags->id )}}">{{( $tags->name )}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content"></textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" class="form-control" name="gambar">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">save</button>
    </div>

</form>

@endsection
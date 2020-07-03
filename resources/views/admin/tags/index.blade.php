@extends('layouts.home')

@section('content')
<h1>Tags</h1>

@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

<div class="container">
  <p>Fill Category table: <a href=" {{ route('tags.create') }} " class="btn btn-info btn-sm">Add</a></p>
  <br>            
  <table class="table table-bordered table-striped table-hover table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($tags as $result => $hasil)
      <tr>
        <td>{{ $result + $tags -> firstitem() }}</td>
        <td>{{ $hasil->name }}</td>
        <td>{{ $hasil->slug }}</td>
        <td>
            <form action="{{ route('tags.destroy', $hasil->id) }}" method="POST">
              @csrf
              @method('delete')
              <a href="{{ route('tags.edit' , $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
              <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
      </tr>
      
      @endforeach

    </tbody>
  </table>
    {{ $tags->links() }}
</div>

@endsection
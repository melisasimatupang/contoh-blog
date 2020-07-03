@extends('layouts.home')

@section('content')
<h1>POST</h1>

@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

<div class="container">
  <p>Fill POST table: <a href=" {{ route('post.create') }} " class="btn btn-info btn-sm">Add</a></p>
  <br>            
  <table class="table table-bordered table-striped table-hover table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Category_id</th>
        <th>Tags</th>
        <th>Creator</th>
        <th>Thumbnail</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($post as $result => $hasil)
      <tr>
        <td>{{ $result + $post -> firstitem() }}</td>
        <td>{{ $hasil->judul }}</td>
        <td>{{ $hasil->category->name }}</td>
        <td>@foreach ($hasil->tags as $tags )
            <ul>
            <span class="badge badge-secondary">{{ $tags->name }}</span>
            </ul>
            @endforeach
        </td>
        <td>{{ $hasil->user->name }}</td>
        <td><img src=" {{ asset( $hasil->gambar )}} " class="img-responsive" style="width:100px;height:100px;"></td>
        <td>
            <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
              @csrf
              @method('delete')
              <a href="{{ route('post.edit' , $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
              <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
      </tr>
      
      @endforeach

    </tbody>
  </table>
    {{ $post->links() }}
</div>

@endsection
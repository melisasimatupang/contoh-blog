@extends('layouts.home')

@section('content')
<h1>POST yang sudah di hapus</h1>

@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

<div class="container">            
  <table class="table table-bordered table-striped table-hover table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Category_id</th>
        <th>Tags</th>
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
              <li>{{ $tags->name }}</li>
            </ul>
            @endforeach
        </td>
        <td><img src=" {{ asset( $hasil->gambar )}} " class="img-responsive" style="width:100px;height:100px;"></td>
        <td>
            <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
              @csrf
              @method('delete')
              <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-info btn-sm">Restore</a>
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
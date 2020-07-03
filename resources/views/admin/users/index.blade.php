@extends('layouts.home')

@section('content')
<h1>User List</h1>

@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
@endif

<div class="container">
  <p>Fill User table: <a href=" {{ route('user.create') }} " class="btn btn-info btn-sm">Add</a></p>
  <br>            
  <table class="table table-bordered table-striped table-hover table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>User</th>
        <th>Email</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($user as $result => $hasil)
            <tr>
                <td>{{ $result + $user -> firstitem() }}</td>
                <td>{{ $hasil->name }}</td>
                <td>{{ $hasil->email }}</td>
                <td>
                    @if($hasil->tipe)
                        <span class="badge badge-info">Administrator</span>
                        @else
                        <span class="badge badge-warning">Author</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('user.edit' , $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
  </table>
    {{ $user->links() }}
</div>

@endsection
@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content">
            <main style="background-color: #edf2f4">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @elseif($message = Session::get('danger'))
                    <div class="alert alert-danger">{{ $message }}</div>                   
                @endif
                <div class="card mb-4" style="background-color: #edf2f4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        <b>Users table</b>
                        <div class="m-3">
                            <a href="{{ route('profile.update') }}" class="btn btn-primary btn-sm float-end m-1">UPDATE PROFILE</a>
                        </div>
                        <div class="col m-3">
                            <a href="{{ route('users.create') }}" class="btn btn-success btn-sm float-end m-1">ADD USER</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Operator</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Operator</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email}}</td>
                                        <td>
                                            <form method="post" action=" {{ route('users.destroy', $row->id) }} ">
                                                @csrf
                                                @method('DELETE')
                                                <input onclick="return confirm('Are you sure you want to delete the user?');"  type="submit" class="btn btn-danger btn-sm" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
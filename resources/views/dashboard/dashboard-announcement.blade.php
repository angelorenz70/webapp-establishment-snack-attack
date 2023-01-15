@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content">
            <main>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>                    
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="col col-md-6">
                            <i class="fas fa-table me-1"></i>
                            <b>Annoucements table</b>
                        </div>
                        <div class="col">
                            <a href="{{ url('dashboard-announcements/add-announcement') }}" class="btn btn-success btn-sm float-end">ADD</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Head Name</th>
                                    <th>Sub-Header Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>User-id</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Head Name</th>
                                    <th>Sub-Header Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>User-id</th>
                                    <th>Operation</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($announcements as $row)
                                    <tr>
                                        <td>{{ $row->header }}</td>
                                        <td>{{ $row->sub_header }}</td>
                                        <td>{{ $row->image }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>{{ $row->user_id }}</td>
                                        <td>
                                            <form method="post" action="{{ route('announcements.destroy', $row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <!--Unya nalang ning edit-->
                                                <a href="{{ route('announcements.edit', $row->id) }}" class="btn btn-primary btn-sm">UPDATE</a>
                                                
                                                <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>  
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
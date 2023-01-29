@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content">
            <main style="background-color: #edf2f4">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>                    
                @endif
                <div class="card mb-4" style="background-color: #edf2f4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        <b>Annoucements table</b>
                        <div class="col">
                            <a href="{{ route('announcements.create') }}" class="btn btn-success btn-sm float-end">ADD ANNOUNCEMENT</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Header</th>
                                    <th>Sub-Header</th>
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
                                    <td>
                                        <div>
                                            <!-- Menu button trigger modal -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#viewimage" data-aos="fade-left" data-aos-delay="100">
                                                VIEW
                                            </button>
                                        </div>
                                        <!-- Menu Modal -->
                                        <div class="modal fade" id="viewimage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="modal-body">
                                                                <!-- Project details-->
                                                                <h3 class="text-uppercase">SNACK ATTACK</h3>
                                                                <img class="img-fluid border border-warnin d-block mx-auto" src="{{ asset('images/' . $row->image) }}" alt="..." />
                                                                <ul class="list-inline">
                                                                    <li>
                                                                    </li>
                                                                </ul>
                                                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                                    <i class="fas fa-xmark me-1"></i>
                                                                    CLOSE IMAGE
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->user_id }}</td>
                                    <td>
                                        <form method="post" action="{{ route('announcements.destroy', $row->id) }}">
                                            @csrf
                                            @method('DELETE')
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
        </div>
    </div>
@endsection
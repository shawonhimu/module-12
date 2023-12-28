@extends('layout.app')

@section('content')
    <div class="mainAdmin">
        {{-- Navbar --}}
        @include('Components.Sidebar')
        {{-- Contents --}}
        <div class="adminContentBar" id="adminContentBar">
            @include('Components.AdminTopbar')
            {{-- Cards --}}

            <div class="adminContents">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="my-3 me-3">
                                    <a class="btn btn-primary" href="{{ url('new-driver') }}">

                                        <i class="fas fa-plus"></i>
                                        <span> New Driver </span>
                                    </a>
                                </div>

                            </div>

                            <hr>
                            <h5>All Driver List</h5>
                            <hr>
                            <table id="example" data-order='[[ 0, "desc" ]]' class="table table-striped"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drivers as $driver)
                                        <tr>
                                            <td>{{ $driver->name }}</td>
                                            <td>{{ $driver->phone }}</td>
                                            <td>{{ $driver->address }}</td>

                                            <td>
                                                <a class=" btn btn-outline-success"
                                                    href="{{ url('edit-driver/' . $driver->id) }}">Edit</a>
                                                <a class=" btn btn-outline-danger"
                                                    href="{{ url('delete-driver/' . $driver->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    @if (session('success'))
        <script>
            swal("Success !", "{{ session('success') }}", "success", {
                button: false,
                // button: "OK",
                timer: 2000,
            })
        </script>
    @elseif (session('error'))
        <script>
            swal("Error !", "{{ session('error') }}", "error", {
                button: false,
                // button: "OK",
                timer: 3000,
            })
        </script>
    @else
        <div></div>
    @endif
@endsection


@section('scripts')
    <script src="js/dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable("#example", {
            scrollX: true,
            scrollCollapse: true,
            scrollY: "50vh",
        });
    </script>
@endsection

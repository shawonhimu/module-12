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
                                    <a class="btn btn-primary" href="{{ url('new-location') }}">

                                        <i class="fas fa-plus"></i>
                                        <span> New Location </span>
                                    </a>
                                </div>

                            </div>

                            <hr>
                            <h5>All Product List</h5>
                            <hr>
                            <table id="example" data-order='[[ 0, "desc" ]]' class="table table-striped"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Started at</th>
                                        <th>Ended at</th>
                                        <th>Root Direction</th>
                                        <th>Distance</th>
                                        <th>Duration</th>
                                        <th>Ticket Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ $location->started_at }}</td>
                                            <td>{{ $location->ended_at }}</td>
                                            <td>{{ $location->root_direction }}</td>
                                            <td>{{ $location->distance }}</td>
                                            <td>{{ $location->duration }}</td>
                                            <td>{{ $location->ticket_price }} Tk</td>

                                            <td>
                                                <a class=" btn btn-outline-success"
                                                    href="{{ url('edit-location/' . $location->id) }}">Edit</a>
                                                <a class=" btn btn-outline-danger"
                                                    href="{{ url('delete-location/' . $location->id) }}">Delete</a>
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

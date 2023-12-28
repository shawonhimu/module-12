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
                                    <a class="btn btn-primary" href="{{ url('new-schedule') }}">

                                        <i class="fas fa-plus"></i>
                                        <span> New Schedule </span>
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
                                        <th>Departure Time</th>
                                        <th>Arrival Time</th>
                                        <th>Trip Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedules as $schedule)
                                        <tr>
                                            <td>{{ $schedule->departure_time }}</td>
                                            <td>{{ $schedule->arrival_time }}</td>
                                            <td>{{ $schedule->trip_date }}</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    @if ($schedule->active_status == 1)
                                                        <span class="btn-success px-1 rounded">
                                                            Active
                                                        </span>
                                                    @else
                                                        <span class="btn-secondary px-1 rounded">
                                                            Disable
                                                        </span>
                                                    @endif

                                                </div>
                                            </td>

                                            <td>
                                                <a class=" btn btn-outline-secondary"
                                                    href="{{ url('schedule-details/' . $schedule->id) }}">view</a>
                                                <a class=" btn btn-outline-success"
                                                    href="{{ url('edit-schedule/' . $schedule->id) }}">Edit</a>
                                                <a class=" btn btn-outline-danger"
                                                    href="{{ url('delete-schedule/' . $schedule->id) }}">Delete</a>
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

    <script>
        function updateCheckboxValue(checkbox) {
            checkbox.value = checkbox.checked ? 1 : 0;
        }

        function getCheckboxValue() {
            var checkbox = document.getElementById('schedule{{ $schedule->id }}');
            var value = checkbox.checked ? 1 : 0;
            console.log(value); // You can use the value as needed
        }
    </script>
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

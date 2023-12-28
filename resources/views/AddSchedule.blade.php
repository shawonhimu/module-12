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
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form action="/schedule" method="POST" class="mb-4">
                                @csrf
                                <div class="mt-3 newCard p-4">
                                    <h5>Add new schedule</h5>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="departureTime" class="form-label">Departure Time </label>
                                        <input type="text" name="departureTime" class="form-control" id="departureTime"
                                            placeholder="Morning (10 AM)" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="arrivalTime" class="form-label">Arrival Time </label>
                                        <input type="text" name="arrivalTime" class="form-control" id="arrivalTime"
                                            placeholder="Night (10 PM)" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneID" class="form-label">Trip Date </label>
                                        <input type="date" name="tripDate" class="form-control" id="phoneID"
                                            placeholder="Enter phone number" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Select Schedule Direction</span>
                                        <select class="form-select" name="scheduleDir" required>
                                            <option selected disabled>--- Select Bus ----</option>
                                            <option value="dha2cox">Dhaka to Cox's Bazar</option>
                                            <option value="cox2dha">Cox's Bazar to Dhaka </option>
                                        </select>
                                        <span class="input-group-text">Select Bus</span>
                                        <select class="form-select" name="busId" required>
                                            <option selected disabled>--- Select Bus ----</option>
                                            @foreach ($buses as $bus)
                                                <option value="{{ $bus->id }}">{{ $bus->name }}
                                                    ({{ $bus->bus_number }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Select Driver</span>
                                        <select class="form-select" name="driverId" required>
                                            <option selected disabled>--- Select Driver ----</option>
                                            @foreach ($divers as $diver)
                                                <option value="{{ $diver->id }}">{{ $diver->name }}
                                                    ({{ $diver->phone }})
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-text">Select Supervisor</span>
                                        <select class="form-select" name="supervisorId" required>
                                            <option selected disabled>--- Select Supervisor ----</option>
                                            @foreach ($supervisors as $supervisor)
                                                <option value="{{ $supervisor->id }}">{{ $supervisor->name }}
                                                    ({{ $supervisor->phone }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <span>Active Status :</span>
                                    <div class="form-check-inline form-switch mb-3 mx-3">
                                        <input class="form-check-input" name="activeStatus" type="checkbox" id="schedule2"
                                            value="1" checked onchange="updateCheckboxValue(this)">
                                        <label class="form-check-label" for="schedule2">Active</label>
                                        <!-- Hidden input for the unchecked state -->
                                    </div>
                                    <div></div>

                                    <button class=" btn btn-success" type="submit">Add Now</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
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
    </script>
@endsection

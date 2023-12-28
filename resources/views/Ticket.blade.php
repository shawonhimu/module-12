@extends('layout.app')


@section('content')
    {{-- User Navbar --}}
    @include('Components.UserNav')

    {{-- User ticket --}}
    <div class="container">
        <div class="m-2 text-center">
            <h4>Buy your ticket</h4>
            <hr>
        </div>
        <form action="{{ url('book-ticket') }}" method="post">
            @csrf
            <div class="row">

                <div class="col-lg-2"></div>

                <div class="col-lg-4">

                    <div class="bgTiki">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="mt-4 pt-3"><span class="p-2 bg-light">Door</span></div>
                            <div class="p-4 rounded bg-light">Engine</div>
                            <div class="p-4 rounded-circle bg-light">Driver</div>
                        </div>

                        <!-- A block -->
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="A1"
                                            required />
                                        <span data-seatname="A1" class="tiki-seat btn btn-light">A1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="A2"
                                            required />
                                        <span data-seatname="A2" class="tiki-seat btn btn-light">A2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="A3"
                                            required />
                                        <span data-seatname="A3" class="tiki-seat btn btn-light">A3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="A4"
                                            required />
                                        <span data-seatname="A4" class="tiki-seat btn btn-light">A4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- B block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="B1"
                                            required />
                                        <span data-seatname="B1" class="tiki-seat btn btn-light">B1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="B2"
                                            required />
                                        <span data-seatname="B2" class="tiki-seat btn btn-light">B2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="B3"
                                            required />
                                        <span data-seatname="B3" class="tiki-seat btn btn-light">B3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="B4"
                                            required />
                                        <span data-seatname="B4" class="tiki-seat btn btn-light">B4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- C block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="C1"
                                            required />
                                        <span data-seatname="C1" class="tiki-seat btn btn-light">C1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="C2"
                                            required />
                                        <span data-seatname="C2" class="tiki-seat btn btn-light">C2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="C3"
                                            required />
                                        <span data-seatname="C3" class="tiki-seat btn btn-light">C3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="C4"
                                            required />
                                        <span data-seatname="C4" class="tiki-seat btn btn-light">C4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- D block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="D1"
                                            required />
                                        <span data-seatname="D1" class="tiki-seat btn btn-light">D1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="D2"
                                            required />
                                        <span data-seatname="D2" class="tiki-seat btn btn-light">D2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="D3"
                                            required />
                                        <span data-seatname="D3" class="tiki-seat btn btn-light">D3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="D4"
                                            required />
                                        <span data-seatname="D4" class="tiki-seat btn btn-light">D4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- E block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="E1"
                                            required />
                                        <span data-seatname="E1" class="tiki-seat btn btn-light">E1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="E2"
                                            required />
                                        <span data-seatname="E2" class="tiki-seat btn btn-light">E2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="E3"
                                            required />
                                        <span data-seatname="E3" class="tiki-seat btn btn-light">E3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="E4"
                                            required />
                                        <span data-seatname="E4" class="tiki-seat btn btn-light">E4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- F block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="F1"
                                            required />
                                        <span data-seatname="F1" class="tiki-seat btn btn-light">F1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="F2"
                                            required />
                                        <span data-seatname="F2" class="tiki-seat btn btn-light">F2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="F3"
                                            required />
                                        <span data-seatname="F3" class="tiki-seat btn btn-light">F3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="F4"
                                            required />
                                        <span data-seatname="F4" class="tiki-seat btn btn-light">F4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- G block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="G1"
                                            required />
                                        <span data-seatname="G1" class="tiki-seat btn btn-light">G1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="G2"
                                            required />
                                        <span data-seatname="G2" class="tiki-seat btn btn-light">G2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="G3"
                                            required />
                                        <span data-seatname="G3" class="tiki-seat btn btn-light">G3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="G4"
                                            required />
                                        <span data-seatname="G4" class="tiki-seat btn btn-light">G4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- H block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="H1"
                                            required />
                                        <span data-seatname="H1" class="tiki-seat btn btn-light">H1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="H2"
                                            required />
                                        <span data-seatname="H2" class="tiki-seat btn btn-light">H2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="H3"
                                            required />
                                        <span data-seatname="H3" class="tiki-seat btn btn-light">H3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="H4"
                                            required />
                                        <span data-seatname="H4" class="tiki-seat btn btn-light">H4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- I block -->
                        <div class="d-flex justify-content-between my-2">
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="I1"
                                            required />
                                        <span data-seatname="I1" class="tiki-seat btn btn-light">I1</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="I2"
                                            required />
                                        <span data-seatname="I2" class="tiki-seat btn btn-light">I2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="I3"
                                            required />
                                        <span data-seatname="I3" class="tiki-seat btn btn-light">I3</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input class="tikiRadio d-none" type="radio" name="seatName" value="I4"
                                            required />
                                        <span data-seatname="I4" class="tiki-seat btn btn-light">I4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div>
                            <div>
                                <div class="bgTiki d-flex justify-content-between">
                                    <div>
                                        <div class="tiki-mark bg-light"></div>
                                        <div><span>Available</span></div>
                                    </div>
                                    <div>
                                        <div class="tiki-mark bg-danger"></div>
                                        <div><span>Booked</span></div>
                                    </div>
                                    <div>
                                        <div class="tiki-mark bg-success"></div>
                                        <div><span>Selected</span></div>
                                    </div>
                                </div>
                                <div class="my-2 bgTiki"> To see preview select below options</div>
                            </div>

                            {{-- For getting Schedule/Destination data all changes here :: It happen By Javascript query --}}

                            <div class="my-3">
                                <label for="rootDirection" class="form-label">Select bus root direction </label>
                                <select class="form-select" name="rootDirection" id="rootDirection"
                                    onchange="calculateTotal()" required>
                                    <option selected disabled>--- Select root ----</option>
                                    <option value="dha2cox">Dhaka to Cox's Bazar</option>
                                    <option value="cox2dha">Cox's Bazar to Dhaka </option>
                                </select>
                            </div>

                            {{-- Schedule all changes here --}}

                            <div class="mb-3">
                                <label for="scheduleId" class="form-label">Select From Availabe Schedule </label>
                                <select class="form-select" name="scheduleId" id="scheduleId" required
                                    onchange="bookedSeat()">
                                    <option selected disabled>--- Select Date Time ----</option>
                                    @foreach ($schedules as $schedule)
                                        <option class="d-none" data-direction="{{ $schedule->schedule_dir }}"
                                            value="{{ $schedule->id }}">{{ $schedule->trip_date }} -
                                            {{ $schedule->departure_time }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Final destination changes here --}}

                            <div class="mb-3">
                                <label for="locationId" class="form-label">Select Your Destination </label>
                                <select class="form-select" name="locationId" id="locationId"
                                    onchange="calculateTotal()" required>
                                    <option selected disabled>--- Select Location ----</option>
                                    @foreach ($locations as $location)
                                        <option class="d-none" data-selectprice="{{ $location->ticket_price }}"
                                            data-direction="{{ $location->root_direction }}" value="{{ $location->id }}">
                                            {{ $location->started_at }} to
                                            {{ $location->ended_at }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="priceID" class="form-label">Total Price ( Tk )</label>
                                <input type="number" readonly name="totalPrice" class="form-control" id="priceID"
                                    placeholder="Product price in tk" value="" required />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger my-4">Buy Ticket Now</button>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </form>
    </div>



    {{-- Scripts --}}
    <script>
        function calculateTotal() {
            //Location 
            var selectElement = document.getElementById('locationId');
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var selectedPrice = selectedOption.dataset.selectprice;
            // var direction = selectedOption.dataset.direction;

            //Root direction
            var rootDirection = document.getElementById('rootDirection').value;
            var rootDirection = document.getElementById('rootDirection').value;

            const directions = document.querySelectorAll('[data-direction]');

            // Loop through each element and apply styles based on data-value
            directions.forEach(element => {
                const dataValue = element.getAttribute('data-direction');

                if (dataValue === 'dha2cox' && rootDirection == 'dha2cox') {
                    element.classList.add('d-block');
                    element.classList.remove('d-none');
                } else if (dataValue === 'cox2dha' && rootDirection == 'cox2dha') {
                    element.classList.add('d-block');
                    element.classList.remove('d-none');
                } else {
                    element.classList.add('d-none');
                    element.classList.remove('d-block');
                }
            });

            // Display the total in the 'total' input field
            document.getElementById('priceID').value = selectedPrice;
        }

        // get available seats

        function bookedSeat() {

            let id = document.getElementById('scheduleId').value;

            axios.get('/available-ticket/' + id, {
                id: id,
            }).then(function(response) {

                const elements = document.querySelectorAll('.tiki-seat');

                const checkBoxVals = document.querySelectorAll('.tikiRadio');
                elements.forEach(item => {
                    item.style.backgroundColor = '#fff';
                    item.style.color = 'black';
                    item.style.cursor = 'pointer';
                })
                checkBoxVals.forEach(item => {
                    item.disabled = false;
                })


                if (response.status == 200) {
                    let data1 = response.data.allSeats;
                    let data = response.data.noseat;
                    console.log(data);
                    if (data) {
                        swal("NO SEAT AVAILABLE !", data, "error", {
                            button: false,
                            button: "OK",
                            // timer: 3000,
                        })
                    }

                    // console.log(id);

                    const elements = document.querySelectorAll('.tiki-seat');

                    const checkBoxVals = document.querySelectorAll('.tikiRadio');

                    data1.forEach(item => {
                        // Assuming there's a common identifier between the data and elements, like 'data-name'
                        const element = document.querySelector(
                            `.tiki-seat[data-seatname="${item.seat_name}"]`);
                        const checkBoxVal = document.querySelector(`.tikiRadio[value="${item.seat_name}"]`);

                        // Check if the element is found before attempting to change its color
                        if (element === element && checkBoxVal === checkBoxVal) {
                            element.style.backgroundColor = '#9e0303';
                            element.style.color = 'white';
                            element.style.cursor = 'not-allowed';
                            checkBoxVal.disabled = true;
                        } else {
                            //this will happen exactly before data fatching 
                            /*
                            element.style.backgroundColor = '#fff';
                            element.style.color = 'black';
                            element.style.cursor = 'pointer';
                            checkBoxVal.disabled = false;
                            */
                        }

                    });

                }
            }).catch();

        }
    </script>


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
                button: "OK",
                // timer: 3000,
            })
        </script>
    @else
        <div></div>
    @endif
@endsection

@extends('layout.app')


@section('content')
    <div class="bodyStyle">
        <div class="loginPage">
            <div class="overlay"></div>
            <div class="container">
                <div class="loginForm">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="loginCard">
                                <h3 class="text-light text-uppercase bg-success p-2 rounded">Tiki :: Bus Ticket </h3>
                                {{-- Registration Form --}}
                                <div id="adminForm">
                                    <h5 class="text-warning my-4">Create Account</h5>
                                    <form action="{{ url('/registration') }}" class="loginForm" method="POST">
                                        @csrf
                                        <input type="text" name="name" class="form-control text-start"
                                            placeholder="Enter your name" required />
                                        <input type="number" name="phone" class="form-control text-start"
                                            placeholder="Enter your phone number" required />

                                        <input type="text" name="address" class="form-control text-start"
                                            placeholder="Enter your address" required />
                                        <input type="password" name="password" class="form-control text-start"
                                            id="" placeholder="Enter your password" required>
                                        <input type="password" name="conFirmPassword" class="form-control text-start"
                                            id="" placeholder="Confirm password" required>

                                        <input class="btn btn-login" name="submit" type="submit" value="Register Now">
                                    </form>
                                </div>
                                {{-- End login form --}}
                                <div>
                                    <p class=" text-light">Already have account ?</p>
                                    <a class=" btn btn-success" href="{{ url('login') }}">Login</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('error'))
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

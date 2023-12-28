<div class="adminSidebar" id="adminSidebar">
    <div class="adminSidebarOptions">
        <div class="adminLogo">
            <div class="text-center text-white my-3">
                <a class="logoLink" href="#"><img src="{{ asset('img/user.png') }}" alt="" /></a>
                <div class="sideTitle">
                    <h6>Shawon Himu</h6>
                    <h6>Owner</h6>
                    <h6>M.S. Trading</h6>
                    <hr />
                </div>
            </div>
        </div>
        <ul class="navSidebar">
            <li class="navSbarItem">
                <a class="navSbarLink  {{ 'home' == request()->path() ? 'active' : '' }}" href="{{ url('/home') }}">
                    <i class="fas fa-th-large"></i>
                    <span class="sideTitle">Home</span>
                </a>
            </li>
            <li class="navSbarItem">
                {{-- @php
                    use Illuminate\Support\Str;
                    $isProduct = Str::startsWith(request()->path(), 'edit-product/');
                    $isTransaction = Str::startsWith(request()->path(), 'transaction-details/');

                @endphp --}}
                <a class="navSbarLink  {{ 'bus' == request()->path() || 'new-bus' == request()->path() ? 'active' : '' }}"
                    href="{{ url('bus') }}">
                    <i class="fas fa-bus-alt"></i>
                    <span class="sideTitle">Bus</span>
                </a>
            </li>
            <li class="navSbarItem">
                <a class="navSbarLink {{ 'driver' == request()->path() || 'new-driver' == request()->path() ? 'active' : '' }}"
                    href="{{ url('driver') }}">
                    <i class="fas fa-user-alt"></i>
                    <span class="sideTitle">Driver</span>
                </a>
            </li>
            <li class="navSbarItem">
                <a class="navSbarLink {{ 'supervisor' == request()->path() || 'new-supervisor' == request()->path() ? 'active' : '' }}"
                    href="{{ url('supervisor') }}">
                    <i class="fas fa-house-user"></i>
                    <span class="sideTitle">Supervisor</span>
                </a>
            </li>

            <li class="navSbarItem">
                <a class="navSbarLink {{ 'location' == request()->path() || 'new-location' == request()->path() ? 'active' : '' }}"
                    href="{{ url('location') }}">
                    <i class="fas fa-map-marked-alt"></i>
                    <span class="sideTitle">Location</span>
                </a>
            </li>

            <li class="navSbarItem">
                <a class="navSbarLink {{ 'schedule' == request()->path() || 'new-schedule' == request()->path() ? 'active' : '' }}"
                    href="{{ url('schedule') }}">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="sideTitle">Schedule</span>
                </a>
            </li>

            <li class="navSbarItem">
                <a class="navSbarLink" href="#">
                    <i class="fas fa-cog"></i>
                    <span class="sideTitle">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>

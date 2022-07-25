<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto ">
        <div class="d-flex align-items-center">
            <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                <span class="semi-bold ">
                    {{ auth()->user()->nama }}
                    {{ auth()->user()->nama_perusahaan }}
                </span>
            </div>
        </div>

        <li class="nav-item">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-alt"></i>
                {{-- @if (auth()->user()->foto)
                    <img class="img-profile rounded-circle" src="{{ url(auth()->user()->foto) }}" type="image/jpeg"
                        style="width: 4%">
                @else
                    <i class="fas fa-user-alt"></i>
                @endif --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                <div class="dropdown-item dropdown-profile-pic" href="">
                    {{-- @if (auth()->user()->foto)
                        <img class="img-profile rounded-circle" src="{{ url(auth()->user()->foto) }}" type="image/jpeg"
                            style="width: 4%">
                    @else
                        <img class="img-profile rounded-circle" src="{{ url('/') }}/dist/img/vektoruser.jpg"
                            frameborder="0" type="image/jpeg" style="width: 30%">
                    @endif --}}
                </div>

                <a class="dropdown-item" @if (auth()->guard('mahasiswa')->check()) href="{{ url('mahasiswa/profile') }}" @endif
                    @if (auth()->guard('dataperusahaan')->check()) href="{{ url('istansi/master-data/profile') }}" @endif
                    @if (auth()->check()) href="{{ url('profile/pegawai') }}" @endif>

                    <i class="fa fa-user"></i> Profile
                </a>

                <div class="dropdown-divider"></div>

                <a href="{{ url('logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>

            </div>
        </li>
        @if (!auth()->guard('mahasiswa')->check())
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        @endif
        </li>
    </ul>
</nav>

{{-- <style>
    .circularimage {
        border: 1 px solid #000000;
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 50%;
        /* Tambahkan baris berikut */
    }
</style> --}}

@section('profil')
    {{-- <div class="profile-img">
        <img style="object-fit: cover; position: static;" src="{{ url("$mahasiswa->foto") }}" width="100%">
    </div> --}}
    <img src="{{ url("$mahasiswa->foto") }}" height="150px" width="150px" class="img-size-50 mr-3 img-circle" />
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
@endsection

{{-- @section('profil')
    <li class="nav-item dropdown">
        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><img src="{{ url("public/$mahasiswa->foto") }}" alt=""
                class="user-avatar-md rounded-circle"></a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
            <div class="dropdown-item dropdown-profile-pic" href="">
                <img src="{{ url("public/$mahasiswa->foto") }}" height="150px" width="150px" class="rounded-circle">
                <p class="text-center m-t-10 m-b-20">
                    {{ $mahasiswa->Nama }}
                </p>
            </div>
        </div>
    </li>
@endsection --}}

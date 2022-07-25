<x-module.superadmin>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Profile Pegawai
    </h5>

    <x-template.button.back-button url="superadmin/master-data/pegawai" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url('/') }}/dist/img/vektoruser.jpg" class="img-fluid profile-pic-container"
                        style="width: 100%">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <div class="card-title">Profile</div>
                    {{-- <a href="{{ url('mahasiswa/profile', $pegawai->id) }}/edit" --}}
                    <a class="btn btn-warning btn-sm float-right">
                        <i class="fa fa-edit"></i>Edit
                    </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <label for="" class="control-label col-md-4">Nip</label>
                                <p type="text" class="form-control-static col-md-8">{{ auth()->user()->nip }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Nama Pegawai</label>
                                <p type="text" class="form-control-static col-md-8">{{ auth()->user()->nama }}
                                </p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Username</label>
                                <p type="text" class="form-control-static col-md-8">
                                    {{ auth()->user()->username }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Email</label>
                                <p type="text" class="form-control-static col-md-8">{{ auth()->user()->email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="">
                    <div class="card">
                        <img src="{{ url('/') }}/dist/img/vektoruser.jpg" class="img-fluid profile-pic-container"
                            style="width: 100%">
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="card card-default">
                    <div class="card-header bg-blue">
                        <div class="card-title">Profile</div>
                        <a href="{{ url('profile/edit') }}" class="btn btn-dark btn-sm float-right"><i
                                class="fa fa-edit"></i> Edit </a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <label for="" class="control-label col-md-4">Nip</label>
                                    <p type="text" class="form-control-static col-md-8">{{ auth()->user()->nip }}</p>
                                </div>
                                <div class="row">
                                    <label for="" class="control-label col-md-4">Nama Pegawai</label>
                                    <p type="text" class="form-control-static col-md-8">{{ auth()->user()->nama }}
                                    </p>
                                </div>
                                <div class="row">
                                    <label for="" class="control-label col-md-4">Username</label>
                                    <p type="text" class="form-control-static col-md-8">
                                        {{ auth()->user()->username }}</p>
                                </div>
                                <div class="row">
                                    <label for="" class="control-label col-md-4">Email</label>
                                    <p type="text" class="form-control-static col-md-8">{{ auth()->user()->email }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}



</x-module.superadmin>>

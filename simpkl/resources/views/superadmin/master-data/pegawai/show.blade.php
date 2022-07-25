<x-module.superadmin>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Pegawai
    </h5>

    <x-template.button.back-button url="superadmin/master-data/pegawai" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url('/') }}/dist/img/vektoruser.png" class="img-fluid profile-pic-container"
                        style="width: 100%">
                    {{-- <img src="{{ url("$mahasiswa->foto") }}" class="img-fluid profile-pic-container" style="width: 100%"> --}}
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <div class="card-title">Profile</div>
                    <a href="{{ url('superadmin/master-data/pegawai', $pegawai->id) }}/edit"
                            class="btn btn-warning btn-sm float-right">
                            <i class="fa fa-edit"></i>Edit
                        </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <label for="" class="control-label col-md-4">Nama Lengkap</label>
                                <p type="text" class="form-control-static col-md-8">{{ $pegawai->nama }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Nip</label>
                                <p type="text" class="form-control-static col-md-8">{{ $pegawai->nip }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Program Studi</label>
                                <p type="text" class="form-control-static col-md-8">
                                    {{ $pegawai->prodi->nama_prodi }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Username</label>
                                <p type="text" class="form-control-static col-md-8">{{ $pegawai->username }}
                                </p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Email</label>
                                <p type="text" class="form-control-static col-md-8">{{ $pegawai->email }}</p>
                            </div>
                            {{-- <div class="row">
                                    <label for="" class="control-label col-md-4">Tempat, Tanggal Lahir</label>
                                    <p type="text" class="form-control-static col-md-8">{{ $pegawai->tempat_lahir }} ,
                                        {{ $mahasiswa->tanggal_lahir }}</p>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-template.button.back-button url="superadmin/master-data/pegawai" /> --}}

    {{-- <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama</dt>
                <dd>{{ $pegawai->nama }}</dd>
                <dt>Username</dt>
                <dd>{{ $pegawai->username }}</dd>
                <dt>NIP</dt>
                <dd>{{ $pegawai->nip }}</dd>
                <dt>Email</dt>
                <dd>{{ $pegawai->email }}</dd>
            </dl>
        </div>
    </div> --}}



    {{-- <div class="container">
        <div class="card card-default">
            <div class="container p-5">
                <div>
                    <x-template.button.back-button url="superadmin/master-data/pegawai" />
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="">
                            <div class="card">
                                <img src="{{ url('/') }}/dist/img/vektoruser.png"
                                    class="img-fluid profile-pic-container" style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="card card-default">
                            <div class="card-header bg-blue">
                                <div class="card-title">Profile</div>
                                <a href="{{ url('superadmin/master-data/pegawai', $pegawai->id) }}/edit "
                                    class="btn btn-dark btn-sm float-right"><i class="fa fa-edit"></i> Edit </a>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="" class="control-label col-md-4">Nip</label>
                                            <p type="text" class="form-control-static col-md-8">{{ $pegawai->nip }}
                                            </p>
                                        </div>
                                        <div class="row">
                                            <label for="" class="control-label col-md-4">Nama Pegawai</label>
                                            <p type="text" class="form-control-static col-md-8">
                                                {{ $pegawai->nama }}</p>
                                        </div>
                                        <div class="row">
                                            <label for="" class="control-label col-md-4">Username</label>
                                            <p type="text" class="form-control-static col-md-8">
                                                {{ $pegawai->username }}</p>
                                        </div>
                                        <div class="row">
                                            <label for="" class="control-label col-md-4">Unit Kerja</label>
                                            <p type="text" class="form-control-static col-md-8">Prodi
                                                {{ $pegawai->prodi->nama_prodi }}</p>
                                        </div>
                                        <div class="row">
                                            <label for="" class="control-label col-md-4">Email</label>
                                            <p type="text" class="form-control-static col-md-8">
                                                {{ $pegawai->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-module.superadmin>

<x-module.mahasiswa title="Mahasiswa">

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Profile Mahasiswa
    </h5>

    <x-template.button.back-button url="mahasiswa/dashboard" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url("$mahasiswa->foto") }}" class="img-fluid profile-pic-container" style="width: 100%">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <div class="card-title">Profile</div>
                    <a href="{{ url('mahasiswa/profile', $mahasiswa->id) }}/edit"
                        class="btn btn-warning btn-sm float-right">
                        <i class="fa fa-edit"></i>Edit
                    </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <label for="" class="control-label col-md-4">Nama Lengkap</label>
                                <p type="text" class="form-control-static col-md-8">{{ $mahasiswa->nama }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">NIM</label>
                                <p type="text" class="form-control-static col-md-8">{{ $mahasiswa->nim }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Jenis Kelamin</label>
                                <p type="text" class="form-control-static col-md-8">{{ $mahasiswa->jenis_kelamin }}
                                </p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Program Studi</label>
                                <p type="text" class="form-control-static col-md-8">
                                    {{ $mahasiswa->prodi->nama_prodi }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Tahun Ajaran</label>
                                <p type="text" class="form-control-static col-md-8">
                                    {{ $mahasiswa->tahunajaran->tahun_ajaran }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Angkatan</label>
                                <p type="text" class="form-control-static col-md-8">{{ $mahasiswa->angkatan }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Agama</label>
                                <p type="text" class="form-control-static col-md-8">{{ $mahasiswa->agama }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Tempat, Tanggal Lahir</label>
                                <p type="text" class="form-control-static col-md-8">{{ $mahasiswa->tempat_lahir }} ,
                                    {{ $mahasiswa->tanggal_lahir_string }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-module.mahasiswa>

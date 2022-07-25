<x-module.mahasiswa title="Mahasiswa">

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Profile Mahasiswa
    </h5>

    <x-template.button.back-button url="mahasiswa/profile" />
    
    <form action="{{ url('mahasiswa/profile', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
    <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url("$mahasiswa->foto") }}" class="img-fluid profile-pic-container"
                            style="width: 100%">
                        <input type="file" name="foto" accept="image/png, image/gif, image/jpeg"
                            class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="card-title">Edit Profile</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nim</label>
                                    <p class="form-control">{{ $mahasiswa->nim }}</p>
                                    {{-- <input type="text" name="nim" value="{{ $mahasiswa->nim }}"
                                        class="form-control"> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <p class="form-control">{{ $mahasiswa->nama }}</p>
                                    {{-- <input type="text" name="nama" value="{{ $mahasiswa->nama }}"
                                        class="form-control"> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Program Studi</label>
                                    <p class="form-control">{{ $mahasiswa->prodi->nama_prodi }}</p>
                                    {{-- <input type="text" name="id_prodi" value="{{ $mahasiswa->prodi->nama_prodi }}"
                                        class="form-control"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Agama</label>
                                    <select name="agama" class="form-control">
                                        <option value="{{ $mahasiswa->agama }}">{{ $mahasiswa->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="kristen">kristen</option>
                                        <option value="katolik">katolik</option>
                                        <option value="hindu">hindu</option>
                                        <option value="buddha">buddha</option>
                                        <option value="konghucu">konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="{{ $mahasiswa->jenis_kelamin }}">{{ $mahasiswa->jenis_kelamin }}
                                        </option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-dark float-right"><i class="fas fa-save"> Simpan</i></button>
                            </div>
                        </div>
        </form>


    </div>
    </div>
    </div>
    </div>


</x-module.mahasiswa>

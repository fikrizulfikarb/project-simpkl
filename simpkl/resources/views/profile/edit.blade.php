<x-module.profile.pegawai>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Profile Pegawai
    </h5>

    <button onclick="goBack()" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>
        Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

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
                    <div class="card-title">Edit Profile</div>
                </div>

                <div class="card-body">
                    <form action="{{ url('profile/pegawai', $pegawai->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nip</label>
                                    <p class="form-control">{{ $pegawai->nip }}</p>
                                    {{-- <input type="text" name="nip" value="{{ $pegawai->nip }}"
                                        class="form-control" disabled> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <p class="form-control">{{ $pegawai->nama }}</p>
                                    {{-- <input type="text" name="nama" value="{{ $pegawai->nama }}"
                                        class="form-control" disabled> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">username</label>
                                    <input type="text" name="username" value="{{ $pegawai->username }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" name="email" value="{{ $pegawai->email }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>

                        {{-- save --}}
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


</x-module.profile.pegawai>

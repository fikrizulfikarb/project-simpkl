<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/mahasiswa" />

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Mahasiswa</div>
        </div>

        <div class="card-body">
            <form action="{{ url('superadmin/master-data/mahasiswa', $mahasiswa->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIM</label>
                            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            <select name="id_prodi" class="form-control">
                                <option value="{{ $mahasiswa->prodi->id }}">{{ $mahasiswa->prodi->nama_prodi }}
                                </option>
                                @foreach ($list_prodi as $prodi)
                                    <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Angkatan</label>
                            <input type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Tahub Ajaran Magang</label>
                            <select name="id_tahunajaran" class="form-control">
                                <option value="{{ $mahasiswa->tahunajaran->id }}">
                                    {{ $mahasiswa->tahunajaran->tahun_ajaran }}
                                </option>
                                @foreach ($list_tahunajaran as $tahunajaran)
                                    <option value="{{ $tahunajaran->id }}">{{ $tahunajaran->tahun_ajaran }}-
                                        {{ $tahunajaran->prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control">
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
</x-module.superadmin>

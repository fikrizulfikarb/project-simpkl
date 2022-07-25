<x-module.admin>
    <x-template.button.back-button url="admin/master-data/mahasiswa" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Mahasiswa</div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/mahasiswa') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIM</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            <select name="id_prodi" class="form-control">
                                <option value="">Pilih Prodi</option>
                                @foreach ($list_prodi as $prodi)
                                        <option value='{{ $prodi->id}}'>{{ $prodi->nama_prodi }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control">
                            {{-- <select name="angkatan" class="form-control">
                                <option disabled selected>Angkatan</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                            </select> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Agama</label>
                            <select name="agama" class="form-control">
                                <option disabled selected>Pilih Agama</option>
                                <option value="islam">Islam</option>
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
                                <option disabled selected>Pilih Jenis Kelamin</option>
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
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" name="foto" accept="image/png, image/gif, image/jpeg" class="form-control">
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
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-save"> Simpan</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>

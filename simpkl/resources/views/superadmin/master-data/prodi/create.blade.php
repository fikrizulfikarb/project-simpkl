<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/prodi" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data prodi
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('superadmin/master-data/prodi') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jurusan</label>
                            <select name="id_jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($list_jurusan as $jurusan)
                                        <option value='{{ $jurusan->id}}'>{{ $jurusan->nama_jurusan }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kode Prodi</label>
                            <input type="text" name="kode_prodi" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Prodi</label>
                            <input type="text" name="nama_prodi" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Koordinator</label>
                            <input type="text" name="nama_koordinator" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.superadmin>

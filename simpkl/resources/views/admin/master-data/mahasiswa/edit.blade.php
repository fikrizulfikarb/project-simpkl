<x-module.admin>
    <x-template.button.back-button url="admin/master-data/mahasiswa" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Data Mahasiswa</div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/mahasiswa', $mahasiswa->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIM</label>
                            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
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
</x-module.admin>

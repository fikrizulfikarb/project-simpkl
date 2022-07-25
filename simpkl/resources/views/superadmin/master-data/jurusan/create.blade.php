<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/jurusan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Jurusan
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('superadmin/master-data/jurusan') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Jurusan</label>
                            <input type="text" name="nama_jurusan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Ketua Jurusan</label>
                            <input type="text" name="nama_ketua_jurusan" class="form-control">
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

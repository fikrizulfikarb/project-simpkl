<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/dataperusahaan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('superadmin/master-data/dataperusahaan') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama_perusahaan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Telp</label>
                            <input type="text" name="no_handphone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Bergerak Di Bidang</label>
                            <textarea type="text" name="keterangan" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="text" name="password" class="form-control">
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

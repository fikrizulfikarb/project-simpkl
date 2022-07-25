<x-module.admin>
    <x-template.button.back-button url="admin/master-data/dataperusahaan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/dataperusahaan') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            @if ($errors->has('nama_perusahaan'))
                                <label for=""
                                    class="control-label text-danger">{{ $errors->get('nama_perusahaan')[0] }}</label>
                            @endif
                            <input type="text" name="nama_perusahaan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Telp</label>
                            @if ($errors->has('no_handphone'))
                                <label for=""
                                    class="control-label text-danger">{{ $errors->get('no_handphone')[0] }}</label>
                            @endif
                            <input type="text" name="no_handphone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            @if ($errors->has('email'))
                                <label for=""
                                    class="control-label text-danger">{{ $errors->get('email')[0] }}</label>
                            @endif
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
                            @if ($errors->has('alamat'))
                                <label for=""
                                    class="control-label text-danger">{{ $errors->get('alamat')[0] }}</label>
                            @endif
                            <textarea type="text" name="alamat" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control">
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
</x-module.admin>

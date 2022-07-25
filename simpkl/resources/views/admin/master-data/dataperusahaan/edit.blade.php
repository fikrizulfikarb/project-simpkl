<x-module.admin>
    <x-template.button.back-button url="admin/master-data/dataperusahaan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/dataperusahaan', $dataperusahaan->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama_perusahaan" value="{{ $dataperusahaan->nama_perusahaan }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Telp</label>
                            <input type="text" name="no_handphone" value="{{ $dataperusahaan->no_handphone }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="text" name="email" value="{{ $dataperusahaan->email }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Keterangan</label>
                            <textarea type="text" name="keterangan" value="{{ $dataperusahaan->keterangan }}"
                                class="form-control">{{ $dataperusahaan->keterangan }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat</label>
                            <textarea type="text" name="alamat" value="{{ $dataperusahaan->alamat }}"
                                class="form-control">{{ $dataperusahaan->alamat }}</textarea>
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
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>

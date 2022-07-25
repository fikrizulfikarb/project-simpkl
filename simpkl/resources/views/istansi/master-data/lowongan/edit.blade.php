<x-module.istansi>

    <x-template.button.back-button url="istansi/master-data/lowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('istansi/master-data/lowongan', $lowongan->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="" class="control-label">Bidang</label>
                            <input type="text" name="bidang" value="{{ $lowongan->bidang }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Kuota</label>
                            <input type="text" name="kuota" value="{{ $lowongan->kuota }}" class="form-control">
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

</x-module.istansi>
<x-module.admin>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Lowongan
    </h5>

    <x-template.button.back-button url="admin/master-data/lowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Lowongan Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/lowongan', $lowongan->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bidang</label>
                            <input type="text" name="bidang" value="{{ $lowongan->bidang }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kuota</label>
                            <input type="text" name="kuota" value="{{ $lowongan->kuota }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bidang</label>
                            <input type="text" name="bidang" value="{{ $lowongan->bidang }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
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
</x-module.admin>

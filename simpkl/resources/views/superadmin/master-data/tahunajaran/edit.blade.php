<x-module.superadmin>

    <x-template.button.back-button url="superadmin/master-data/tahunajaran" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Tahun Ajaran Magang</div>
        </div>
        <div class="card-body">
            <form action="{{ url('superadmin/master-data/tahunajaran', $tahunajaran->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" value="{{ $tahunajaran->tahun_ajaran }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Program Studi</label>
                            <select name="id_prodi" class="form-control">
                                <option value="{{ $tahunajaran->prodi->id }}">{{ $tahunajaran->prodi->nama_prodi }}
                                </option>
                                @foreach ($list_prodi as $prodi)
                                    <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Buka</label>
                            <input type="date" name="tanggal_buka" class="form-control"  value="{{ $tahunajaran->tanggal_buka }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Tutup</label>
                            <input type="date" name="tanggal_tutup"  class="form-control" value="{{ $tahunajaran->tanggal_tutup }}" >
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

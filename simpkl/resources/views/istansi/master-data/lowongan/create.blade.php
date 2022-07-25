<x-module.istansi>

    <x-template.button.back-button url="istansi/master-data/lowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Lowongan Magang Untuk Mahasiswa Politap
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('istansi/master-data/lowongan') }}" method="post">
                @csrf
                <div class="row">
                    <input type="text" value="{{ $dataperusahaan->id}}" name="id_dataperusahaan" hidden>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bidang Yang Diperlukan</label>
                            <input type="text" name="bidang" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Untuk Prodi</label>
                            <select name="id_prodi" class="form-control">
                                <option value="">Pilih Prodi</option>
                                @foreach ($list_prodi as $prodi)
                                        <option value='{{ $prodi->id}}'>{{ $prodi->nama_prodi }}
                                        </option>
                                @endforeach
                            </select>
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
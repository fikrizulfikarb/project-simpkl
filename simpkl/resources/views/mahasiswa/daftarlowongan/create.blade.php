<x-module.mahasiswa title="Mahasiswa">


    <x-template.button.back-button url="mahasiswa/daftarlowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah 
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('mahasiswa/daftarlowongan') }}" method="post">
                @csrf
                <div class="row">
                    <input type="text" value="{{ $mahasiswa->id}}" name="id_mahasiswa" hidden>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alasan</label>
                            <input type="text" name="alasan" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Prodi</label>
                            <select name="id_prodi" class="form-control">
                                <option value="">Pilih Prodi</option>
                                @foreach ($list_prodi as $prodi)
                                        <option value='{{ $prodi->id}}'>{{ $prodi->nama_prodi }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</x-module.mahasiswa>
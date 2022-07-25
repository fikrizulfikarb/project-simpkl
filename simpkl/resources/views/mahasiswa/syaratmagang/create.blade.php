<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/syaratmagang" />
    {{-- <div class="card">
        <div class="card-header">
            <div class="card-title">
                Syarat Magang
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('mahasiswa/syaratmagang') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Syarat Magang</label>
                            <input type="text" name="syarat_magang" class="form-control">
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
    </div> --}}

    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Syarat Magang</h3>
        </div>

        <div class="card-body">

            <form action="{{ url('mahasiswa/syaratmagang') }}" method="post" enctype="multipart/form-data"
                onsubmit="return confirm('Yakin ingin mengupload data ini?')">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">KRS Semester</label>
                            <input type="text" name="krs_semester" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Upload Syarat Magang</label>
                            <input type="file" name="syarat_magang" accept=".pdf" class="form-control">
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

</x-module.mahasiswa>

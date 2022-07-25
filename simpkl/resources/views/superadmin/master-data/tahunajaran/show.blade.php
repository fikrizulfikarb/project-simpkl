<x-module.superadmin>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tahun Ajaran Magang
    </h5>

    <x-template.button.back-button url="superadmin/master-data/tahunajaran" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Detail Mahasiswa
            </div>
            <div class="float-right">
                <x-template.button.edit-button url="superadmin/master-data/tahunajaran" id="{{ $tahunajaran->id }}"
                    title="Edit" />
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-md-4">NIM</dt>
                        <dl class="col-md-8">{{ $tahunajaran->tahun_ajaran }}</dl>
                        <dt class="col-md-4">Nama</dt>
                        <dl class="col-md-8">{{ $tahunajaran->prodi->nama_prodi }}</dl>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-md-4">Program Studi</dt>
                        <dl class="col-md-8">{{ $tahunajaran->tanggal_buka }}</dl>
                        <dt class="col-md-4">Angkatan</dt>
                        <dl class="col-md-8">{{ $tahunajaran->tanggal_tutup }}</dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-module.superadmin>

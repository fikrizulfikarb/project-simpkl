<x-module.mahasiswa title="Mahasiswa">
    <x-template.button.back-button url="mahasiswa/dataperusahaan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama</dt>
                <dd>{{ $dataperusahaan->nama_perusahaan }}</dd>
                <dt>Alamat</dt>
                <dd>{{ $dataperusahaan->alamat }}</dd>
            </dl>
        </div>
    </div>
</x-module.mahasiswa >

<x-module.mahasiswa title="Mahasiswa">
    <x-template.button.back-button url="mahasiswa/syaratmagang" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama</dt>
                <dd>{{ $syaratmagang->syarat_magang }}</dd>
                <dt>mahasiswa</dt>
                <dd>{{ $syaratmagang->id_mahasiswa }}</dd>
            </dl>
        </div>
    </div>
</x-module.mahasiswa >

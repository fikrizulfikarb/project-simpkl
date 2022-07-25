<x-module.superadmin>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Mahasiswa
    </h5>

    <x-template.button.back-button url="superadmin/master-data/mahasiswa" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Detail Mahasiswa
            </div>
            <div class="float-right">
                <x-template.button.edit-button url="superadmin/master-data/mahasiswa" id="{{ $mahasiswa->id }}"
                    title="Edit" />
            </div>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-md-4">NIM</dt>
                        <dl class="col-md-8">{{ $mahasiswa->nim }}</dl>
                        <dt class="col-md-4">Nama</dt>
                        <dl class="col-md-8">{{ $mahasiswa->nama }}</dl>
                        <dt class="col-md-4">Jenis Kelamin</dt>
                        <dl class="col-md-8">{{ $mahasiswa->jenis_kelamin }}</dl>
                        <dt class="col-md-4">Tempat Lahir</dt>
                        <dl class="col-md-8">{{ $mahasiswa->tempat_lahir }}</dl>
                        <dt class="col-md-4">Tahun Ajaran</dt>
                        <dl class="col-md-8">{{ $mahasiswa->tahunajaran->tahun_ajaran }}</dl>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl class="row">
                        <dt class="col-md-4">Program Studi</dt>
                        <dl class="col-md-8">{{ $mahasiswa->prodi->nama_prodi }}</dl>
                        <dt class="col-md-4">Angkatan</dt>
                        <dl class="col-md-8">{{ $mahasiswa->angkatan }}</dl>
                        <dt class="col-md-4">Agama</dt>
                        <dl class="col-md-8">{{ $mahasiswa->agama }}</dl>
                        <dt class="col-md-4">Tanggal Lahir</dt>
                        <dl class="col-md-8">{{ $mahasiswa->tanggal_lahir }}</dl>
                    </dl>
                </div>
                <div class="col-md-12">
                    <div class="row">

                        <dt class="col-4">Syarat Magang</dt>
                        @foreach ($list_syaratmagang as $syaratmagang)
                            @if ($syaratmagang->id_mahasiswa == $mahasiswa->id)
                                <dl class="col-md-12"><a href="" target="popup"
                                        onclick="window.open('{{ url($mahasiswa->syarat->syarat_magang) }}','popup','width=800,height=600'); return false;"
                                        class="btn btn-dark"><i class="fas fa-download"></i> Semester
                                        {{ $syaratmagang->krs_semester }}</a>
                                </dl>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-module.superadmin>

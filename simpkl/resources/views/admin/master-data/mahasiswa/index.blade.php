<x-module.admin>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Mahasiswa
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Mahasiswa
            </div>
            <a href="{{ url('admin/master-data/mahasiswa/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width : 1%">No</th>
                    <th width="100px">Aksi</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_mahasiswa as $mahasiswa)
                        @if ($pegawai->id_prodi == $mahasiswa->id_prodi)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url="admin/master-data/mahasiswa"
                                            id="{{ $mahasiswa->id }}" />
                                        <x-template.button.edit-button url="admin/master-data/mahasiswa"
                                            id="{{ $mahasiswa->id }}" />
                                        <x-template.button.delete-button url="admin/master-data/mahasiswa"
                                            id="{{ $mahasiswa->id }}" />
                                    </div>
                                </td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                <td>{{ $mahasiswa->prodi->nama_prodi }}</td>
                                <td>{{ $mahasiswa->angkatan }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>

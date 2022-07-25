<x-module.superadmin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pegawai
        </h5>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
            <a href="{{ url('superadmin/master-data/pegawai/create') }}" class="float-right btn btn-dark"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%" >No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama</th>
                    <th>Unit Kerja</th>
                    <th>Username</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_pegawai as $pegawai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.edit-button url="superadmin/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.delete-button url="superadmin/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                </div>
                            </td>
                            <td>{{ $pegawai->nama }}</td>
                            <td>Prodi {{ $pegawai->prodi->nama_prodi }}</td>
                            <td>{{ $pegawai->username }}</td>
                            <td>{{ $pegawai->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.superadmin>

<x-module.istansi>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
            <a href="{{ url('istansi/master-data/pegawai/create') }}" class="float-right btn btn-dark"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_pegawai as $pegawai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="istansi/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.edit-button url="istansi/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.delete-button url="istansi/master-data/pegawai"
                                        id="{{ $pegawai->id }}" />
                                </div>
                            </td>
                            <td>{{ $pegawai->nama }}</td>
                            <td>{{ $pegawai->username }}</td>
                            <td>{{ $pegawai->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.istansi>

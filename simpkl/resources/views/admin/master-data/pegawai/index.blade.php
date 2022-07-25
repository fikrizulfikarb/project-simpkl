<x-module.admin title="Admin">

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
            {{-- <a href="{{ url('admin/master-data/pegawai/create') }}" class="float-right btn btn-dark"><i
                        class="fas fa-plus"></i> Tambah Data</a> --}}
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width : 1%">No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama</th>
                    <th>Unit Kerja</th>
                    <th>Username</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_pegawai as $pegawai)
                        @if ( auth()->user()->id_prodi == $pegawai->prodi->id )
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url="admin/master-data/pegawai"
                                            id="{{ $pegawai->id }}" title="lihat detail" />
                                        {{-- <x-template.button.edit-button url="admin/master-data/pegawai"
                                    id="{{ $pegawai->id }}" />
                                    <x-template.button.delete-button url="admin/master-data/pegawai"
                                    id="{{ $pegawai->id }}" /> --}}
                                    </div>
                                </td>
                                <td>{{ $pegawai->nama }}</td>
                                <td>Prodi {{ $pegawai->prodi->nama_prodi }}</td>
                                <td>{{ $pegawai->username }}</td>
                                <td>{{ $pegawai->email }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-module.admin>

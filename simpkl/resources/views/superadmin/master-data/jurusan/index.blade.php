<x-module.superadmin>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Jurusan
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Jurusan Politap
            </div>
            <a href="{{ url('superadmin/master-data/jurusan/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead class="bg-dark">
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Jurusan</th>
                    <th>Jumlah Prodi</th>
                    <th>Nama Ketua Jurusan</th>
                </thead>
                <tbody>
                    @foreach ($list_jurusan as $jurusan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/jurusan"
                                        id="{{ $jurusan->id }}"/>
                                    <x-template.button.edit-button url="superadmin/master-data/jurusan"
                                        id="{{ $jurusan->id }}"/>
                                    <x-template.button.delete-button url="superadmin/master-data/jurusan"
                                        id="{{ $jurusan->id }}"/>
                                </div>
                            </td>
                            <td>{{ $jurusan->nama_jurusan }}</td>
                            <td>{{ $jurusan->prodi_count}}</td>
                            <td>{{ $jurusan->nama_ketua_jurusan}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.superadmin>

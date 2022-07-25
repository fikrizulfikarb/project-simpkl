<x-module.superadmin>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Prodi
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Prodi
            </div>
            <a href="{{ url('superadmin/master-data/prodi/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead class="bg-dark">
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Kode</th>
                    <th>Nama Prodi</th>
                    <th>Jurusan</th>
                    <th>Nama Koordinator</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_prodi as $prodi)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/prodi"
                                        id="{{ $prodi->id }}"/>
                                    <x-template.button.edit-button url="superadmin/master-data/prodi"
                                        id="{{ $prodi->id }}"/>
                                    <x-template.button.delete-button url="superadmin/master-data/prodi"
                                        id="{{ $prodi->id }}"/>
                                </div>
                            </td>
                            <td>{{ $prodi->kode_prodi }}</td>
                            <td>{{ $prodi->nama_prodi}}</td>
                            <td>{{ $prodi->jurusan->nama_jurusan}}</td>
                            <td>{{ $prodi->nama_koordinator}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-module.superadmin>

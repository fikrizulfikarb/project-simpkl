<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/jurusan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Jurusan
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <dl>
                        <dt>Nama Jurusan</dt>
                        <dl>{{ $jurusan->nama_jurusan }}</dl>             
                        {{-- <dt>Nama Ketua Jurusan</dt>
                        <dl>{{ $jurusan->nama_ketua_jurusan }}</dl> --}}
                        {{-- <dt>Nama Koordinator</dt>
                        <dl>{{ $jurusan->nama_koor->nama_koordinator }}</dl> --}}
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>Nama Ketua Jurusan</dt>
                        <dl>{{ $jurusan->nama_ketua_jurusan }}</dl>
                        {{-- <dt>Website / Email Jurusan</dt>
                        <dl>www.politap.ac.id / humas@politap.ac.id</dl>             
                        <dt>Jumlah Mahasiswa Keseluruhan</dt>
                        <dl>0</dl>
                        <dt>Jumlah Mahasiswa Aktif</dt>
                        <dl>0</dl> --}}
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>Website / Email Jurusan</dt>
                        <dl>www.politap.ac.id / humas@politap.ac.id</dl>
                        {{-- <dt>Jumlah Mahasiswa Laki-laki</dt>
                        <dl>0</dl>             
                        <dt>Jumlah Mahasiswa Perempuan</dt>
                        <dl>0</dl>
                        <dt>Jumlah Prodi</dt>
                        <dl>{{ $jurusan->prodi_count}}</dl> --}}
                    </dl>
                </div>
            </div>

            <hr>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="bg-dark">
                        <th>No</th>
                        <th width="100px">Aksi</th>
                        <th>Nama Prodi</th>
                        <th>Nama Koor Prodi</th>
                    </thead>
                    <tbody>
                        @foreach ($jurusan->prodi as $prodi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
                                <td>{{ $prodi->nama_prodi}}</td>
                                <td>{{ $prodi->nama_koordinator}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>

</x-module.superadmin>

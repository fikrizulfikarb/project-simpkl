<x-module.admin>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Perusahaan
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
            <a href="{{ url('admin/master-data/dataperusahaan/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jumlah Lowongan</th>
                </thead>
                <tbody>
                    @foreach ($list_dataperusahaan as $dataperusahaan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/master-data/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}"/>
                                    <x-template.button.edit-button url="admin/master-data/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}"/>
                                    <x-template.button.delete-button url="admin/master-data/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}"/>
                                </div>
                            </td>
                            <td>{{ $dataperusahaan->nama_perusahaan }}</td>
                            <td>{{ $dataperusahaan->alamat}}</td>
                            <td>{{ $dataperusahaan->lowongan_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>

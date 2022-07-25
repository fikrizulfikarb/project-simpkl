<x-module.istansi>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Lowongan
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Lowongan
            </div>
            <a href="{{ url('istansi/master-data/lowongan/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width : 1%">No</th>
                    <th width="120px">Aksi</th>
                    <th>Bidang</th>
                    <th>Prodi</th>
                    <th>Nama Koor</th>
                    <th>Kuota</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_lowongan as $lowongan)
                        @if ($lowongan->id_dataperusahaan == $dataperusahaan->id)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url="istansi/master-data/lowongan"
                                            id="{{ $lowongan->id }}" />
                                        <x-template.button.edit-button url="istansi/master-data/lowongan"
                                            id="{{ $lowongan->id }}" />
                                        <x-template.button.delete-button url="istansi/master-data/lowongan"
                                            id="{{ $lowongan->id }}" />
                                    </div>
                                </td>
                                <td>{{ $lowongan->bidang }}</td>
                                <td>{{ $lowongan->prodi->nama_prodi }}</td>
                                <td>{{ $lowongan->prodi->nama_koordinator }}</td>
                                <td>{{ $lowongan->kuota }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.istansi>

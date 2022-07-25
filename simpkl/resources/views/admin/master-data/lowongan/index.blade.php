<x-module.admin>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Daftar Lowongan
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Lowongan
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th width="120px">Aksi</th>
                    <th>Bidang</th>
                    <th>Nama Perusahaan</th>
                    <th>Kuota</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_lowongan as $lowongan)
                        @if ($pegawai->id_prodi == $lowongan->id_prodi)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url="admin/master-data/lowongan"
                                            id="{{ $lowongan->id }}" title="lihat detail" />
                                    </div>
                                </td>
                                <td>{{ $lowongan->bidang }}</td>
                                <td>{{ $lowongan->perusahaan->nama_perusahaan }}</td>
                                <td>{{ $lowongan->kuota }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-module.admin>

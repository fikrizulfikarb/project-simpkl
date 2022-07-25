<x-module.mahasiswa>

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
                    <th width="150px">Aksi</th>
                    <th>Bidang</th>
                    <th>Nama Perusahaan</th>
                    <th>Prodi</th>
                    <th>Tahun Ajaran</th>
                    <th>Kuota</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_lowongan as $lowongan)
                        @if ($mahasiswa->id_prodi == $lowongan->id_prodi)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url="mahasiswa/lowongan" id="{{ $lowongan->id }}"
                                            title="Lihat Lowongan" />
                                    </div>
                                </td>
                                <td>{{ $lowongan->bidang }}</td>
                                <td>{{ $lowongan->perusahaan->nama_perusahaan }}</td>
                                <td>{{ $lowongan->prodi->nama_prodi }}</td>
                                <td>{{ $lowongan->tahunajaran->tahun_ajaran }}</td>
                                <td>{{ $lowongan->kuota }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-module.mahasiswa>

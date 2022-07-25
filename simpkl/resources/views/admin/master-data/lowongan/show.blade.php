<x-module.admin>
    <x-template.button.back-button url="admin/master-data/lowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Lowongan
            </div>
            <div class="float-right">
                <a href="{{ url('admin/master-data/lowongan', $lowongan->id) }}/detail"
                    class="btn btn-success btn-sm"><i class="fas fa-users"></i> Data Diterima</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-md-4">Nama</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->nama_perusahaan }}</dl>
                        <dt class="col-md-4">alamat</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->alamat }}</dl>
                        <dt class="col-md-4">Telp</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->no_handphone }}</dl>
                        <dt class="col-md-4">Email</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->email }}</dl>
                        <dt class="col-md-4">Keterangan</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->keterangan }}</dl>
                        <dt class="col-md-4">Bidang Magang</dt>
                        <dl class="col-md-8">{{ $lowongan->bidang }}</dl>
                    </dl>
                </div>
            </div>

            <div class="card-header">
                <div class="card-title">
                    Data Pendaftar
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <th style="width: 1%">No</th>
                        <th width="180">Aksi</th>
                        <th>Nim</th>
                        <th>Nama Mahasiswa</th>
                        <th>L/P</th>
                        <th>Alasan </th>
                        <th>Tanggal Pengajuan </th>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($list_daftarlowongan as $daftarlowongan)
                            @if ($lowongan->id == $daftarlowongan->id_lowongan)
                                @if ($daftarlowongan->status == 1)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/master-data/lowongan', $lowongan->id) }}"
                                                    class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
                                                <form action="{{ url('setuju', $daftarlowongan->id) }}" method="post"
                                                    onsubmit="return confirm('Yakin ingin menyetujui pengajuan ini?')">
                                                    @csrf
                                                    @method('put')
                                                    <button class="btn btn-primary btn-sm"><i class="fas fa-check"></i>
                                                        Setuju</button>
                                                </form>
                                                <form action="{{ url('ditolak', $daftarlowongan->id) }}"
                                                    method="post"
                                                    onsubmit="return confirm('Yakin ingin menolak pengajuan ini?')">
                                                    @csrf
                                                    @method('put')
                                                    <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i>
                                                        Tolak</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $daftarlowongan->mahasiswa->nim }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->nama }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->jenis_kelamin }}</td>
                                        <td>{{ $daftarlowongan->alasan }}</td>
                                        <td>{{ $daftarlowongan->tanggal_pengajuan_string }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-header">
                    <div class="card-title">
                        Data Ditolak
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="bg-dark">
                            <th style="width: 1%">No</th>
                            <th width="100">Aksi</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>L/P</th>
                            <th>Alasan</th>
                            <th>Tanggal Pengajuan </th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($list_daftarlowongan as $daftarlowongan)
                                @if ($lowongan->id == $daftarlowongan->id_lowongan)
                                    @if ($daftarlowongan->status == 3)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="{{ url('dipulihkan', $daftarlowongan->id) }}" method="post"
                                                        onsubmit="return confirm('Yakin ingin memulihkan pengajuan ini?')">
                                                        @csrf
                                                        @method('put')
                                                        <button class="btn btn-warning btn-sm"><i class="fas fa-history"></i>
                                                            Batal</button>
                                                    </form>
                                                    <form action="{{ url('ditolak', $daftarlowongan->id) }}"
                                                        method="post"
                                                        onsubmit="return confirm('Yakin ingin menolak pengajuan ini?')">
                                                        @csrf
                                                        @method('put')
                                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                            Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{ $daftarlowongan->mahasiswa->nim }}</td>
                                            <td>{{ $daftarlowongan->mahasiswa->nama }}</td>
                                            <td>{{ $daftarlowongan->mahasiswa->jenis_kelamin }}</td>
                                            <td>{{ $daftarlowongan->alasan }}</td>
                                            <td>{{ $daftarlowongan->tanggal_pengajuan_string }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <label class="btn btn-danger">ditolak</label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-module.admin>

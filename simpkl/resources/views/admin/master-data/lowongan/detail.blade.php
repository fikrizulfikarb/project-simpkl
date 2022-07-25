<x-module.admin>
    <x-template.button.back-button url="{{ url('admin/master-data/lowongan', $lowongan->id) }}" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Lowongan
            </div>
            {{-- <div class="float-right">
                <a href="{{ url('admin/master-data/lowongan', $lowongan->id) }}/detail"
                    class="btn btn-dark btn-sm"><i class="fas fa-info"></i> Detail</a>
            </div> --}}
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
                    Data yang diterima
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <th style="width: 1%">No</th>
                        <th>Nim</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Alasan</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($list_daftarlowongan as $daftarlowongan)
                            @if ($lowongan->id == $daftarlowongan->id_lowongan)
                                @if ($daftarlowongan->status == 2)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->nim }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->nama }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->jenis_kelamin }}</td>
                                        <td>{{ $daftarlowongan->alasan }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <label class="btn btn-success">diterima</label>
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
</x-module.admin>

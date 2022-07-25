<x-module.mahasiswa>
    <x-template.button.back-button url="mahasiswa/lowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Lowongan
            </div>
            <div class="float-right">
                {{-- <a href="{{ url('mahasiswa/daftarlowongan/create') }}" class="btn btn-dark float-right"><i
                    class="fas fa-plus"></i>  Daftar Magang</a> --}}
                {{-- @if ($mahasiswa->daftarlowongan->count('id_mahasiswa') < 2) --}}
                {{-- @endif --}}
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                    Tambah
                </button>

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
                        <dt class="col-md-4">Bidang Lowongan</dt>
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
                        <th>Nim</th>
                        <th>Nama Mahasiswa</th>
                        <th>L/P</th>
                        <th>Alasan Daftar</th>
                        <th>Status</th>
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
                                        <td>{{ $daftarlowongan->mahasiswa->nim }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->nama }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->jenis_kelamin }}</td>
                                        <td>{{ $daftarlowongan->alasan }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @if ($daftarlowongan->status == 1)
                                                    <label class="btn btn-warning">diproses</label>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>
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
                        <th>L/P</th>
                        <th>Alasan Daftar</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($list_daftarlowongan as $daftarlowongan)
                            @if ($lowongan->id == $daftarlowongan->id_lowongan)
                                @if ($daftarlowongan->status == 2)
                                    <tr>
                                        <td>{{ $no++ }}</td>
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

            <div class="card-header">
                <div class="card-title">
                    Data DiTolak
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <th style="width: 1%">No</th>
                        <th>Nim</th>
                        <th>Nama Mahasiswa</th>
                        <th>L/P</th>
                        <th>Alasan Daftar</th>
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
                                        <td>{{ $daftarlowongan->mahasiswa->nim }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->nama }}</td>
                                        <td>{{ $daftarlowongan->mahasiswa->jenis_kelamin }}</td>
                                        <td>{{ $daftarlowongan->alasan }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @if ($daftarlowongan->status == 3)
                                                    <label class="btn btn-danger">ditolak</label>
                                                @endif
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

    {{-- modal --}}
    <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h4 class="modal-title">Daftar Lowongan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('store-daftar-lowongan') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <input type="text" value="{{ $lowongan->id }}" name="id_lowongan" hidden>
                        <input type="text" value="{{ $lowongan->perusahaan->id }}" name="id_dataperusahaan"
                            hidden>
                        <input type="text" value="{{ $mahasiswa->id }}" name="id" hidden>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Alasan</label>
                                    <input type="text" class="form-control" name="alasan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button class="btn btn-outline-light">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-module.mahasiswa>

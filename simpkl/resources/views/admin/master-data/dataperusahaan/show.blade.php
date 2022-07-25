<x-module.admin>
    <x-template.button.back-button url="admin/master-data/dataperusahaan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
            <div class="float-right">
                <x-template.button.edit-button url="admin/master-data/dataperusahaan" id="{{ $dataperusahaan->id }}"
                    title="Edit" />
                <a type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                    Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-md-4">Nama</dt>
                        <dl class="col-md-8">{{ $dataperusahaan->nama_perusahaan }}</dl>
                        <dt class="col-md-4">alamat</dt>
                        <dl class="col-md-8">{{ $dataperusahaan->alamat }}</dl>
                        <dt class="col-md-4">Telp</dt>
                        <dl class="col-md-8">{{ $dataperusahaan->no_handphone }}</dl>
                        <dt class="col-md-4">Email</dt>
                        <dl class="col-md-8">{{ $dataperusahaan->email }}</dl>
                        <dt class="col-md-4">Keterangan</dt>
                        <dl class="col-md-8">{{ $dataperusahaan->keterangan }}</dl>
                    </dl>
                </div>
            </div>

            <hr>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <th style="width: 1%">No</th>
                        <th width="100px">Aksi</th>
                        <th>Bidang Magang</th>
                        <th>Kuota</th>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataperusahaan->lowonganmagang as $lowongan)
                            @if ($pegawai->id_prodi == $lowongan->id_prodi)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="admin/master-data/lowongan"
                                                id="{{ $lowongan->id }}" />
                                            <x-template.button.edit-button url="admin/master-data/lowongan"
                                                id="{{ $lowongan->id }}" />
                                            <x-template.button.delete-button url="admin/master-data/lowongan"
                                                id="{{ $lowongan->id }}" />
                                        </div>
                                    </td>
                                    <td>{{ $lowongan->bidang }}</td>
                                    <td>{{ $lowongan->kuota }} Orang</td>
                                </tr>
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
                    <h4 class="modal-title">Tambah Lowongan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('store-lowongan') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <input type="text" value="{{ $dataperusahaan->id }}" name="id_lowongan" hidden>
                        <input type="text" value="{{ $dataperusahaan->id }}" name="id_dataperusahaan" hidden>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Bidang Lowongan</label>
                                    <input type="text" class="form-control" name="bidang">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Prodi</label>
                                    <select name="id_prodi" class="form-control">
                                        <option value="">Pilih Prodi</option>
                                        @foreach ($list_prodi as $prodi)
                                            @if ($pegawai->id_prodi == $prodi->id)
                                                <option value='{{ $prodi->id }}'>{{ $prodi->nama_prodi }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Tahun Ajaran Magang</label>
                                    <select name="id_tahunajaran" class="form-control">
                                        <option value="">Pilih tahunajaran</option>
                                        @foreach ($list_tahunajaran as $tahunajaran)
                                            @if ($pegawai->id_prodi == $tahunajaran->prodi->id)
                                                <option value='{{ $tahunajaran->id }}'>
                                                    {{ $tahunajaran->tahun_ajaran }} -
                                                    {{ $tahunajaran->prodi->nama_prodi }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">kuota</label>
                                    <input type="text" class="form-control" name="kuota">
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

</x-module.admin>

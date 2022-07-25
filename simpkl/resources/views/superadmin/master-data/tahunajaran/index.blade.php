<x-module.superadmin>

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tahun Ajaran
        </h5>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if ($errors->has('tahun_ajaran'))
                {{-- <label for="" class="control-label text-danger">{{ $errors->get('tahun_ajaran')[0] }}</label> --}}
                {{-- <button class="btn btn-warning">{{ $errors->get('tahun_ajaran')[0] }}</button> --}}
            <div class="alert alert-warning alert-dismissable custom-warning-box">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ $errors->get('tahun_ajaran')[0] }}</strong>
            </div>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Tahun Ajaran
            </div>
            <div class="float-right">
                {{-- <a href="{{ url('superadmin/master-data/tahunajaran/create') }}" class="btn btn-dark"><i
                        class="fas fa-plus"></i> Tambah Data</a> --}}
                <a type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                    Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th width="100px">Aksi</th>
                    <th style="text-aling-center">Tahun Ajaran</th>
                    <th style="text-aling-center">Nama Prodi</th>
                    <th style="text-aling-center">Tanggal Buka</th>
                    <th style="text-aling-center">Tanggal Tutup</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_tahunajaran as $tahunajaran)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/tahunajaran"
                                        id="{{ $tahunajaran->id }}" />
                                    <x-template.button.edit-button url="superadmin/master-data/tahunajaran"
                                        id="{{ $tahunajaran->id }}" />
                                    <x-template.button.delete-button url="superadmin/master-data/tahunajaran"
                                        id="{{ $tahunajaran->id }}" />
                                </div>
                            </td>
                            <td>{{ $tahunajaran->tahun_ajaran }}</td>
                            <td>{{ $tahunajaran->prodi->nama_prodi }}</td>
                            <td>{{ $tahunajaran->tanggal_buka_string }}</td>
                            <td>{{ $tahunajaran->tanggal_tutup_string }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Tahun Ajaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('store-tahunajaran') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Tahun Ajaran</label>
                                    <input type="text" class="form-control" name="tahun_ajaran">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Prodi</label>
                                    <select name="id_prodi" class="form-control">
                                        <option value="">Pilih Prodi</option>
                                        @foreach ($list_prodi as $prodi)
                                                <option value='{{ $prodi->id}}'>{{ $prodi->nama_prodi }}
                                                </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Buka</label>
                                    <input type="date" class="form-control" name="tanggal_buka">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Tutup</label>
                                    <input type="date" class="form-control" name="tanggal_tutup">
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

</x-module.superadmin>

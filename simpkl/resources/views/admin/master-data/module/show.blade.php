<x-module.admin>
    <x-template.button.back-button url="admin/master-data/module" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-4">Nama App</dt>
                        <dl class="col-8">{{ $module->app }}</dl>
                        <dt class="col-4">Nama</dt>
                        <dl class="col-8">{{ $module->name }}</dl>
                        <dt class="col-4">TITLE</dt>
                        <dl class="col-8">{{ $module->title }}</dl>
                        <dt class="col-4">SUBTITLE</dt>
                        <dl class="col-8">{{ $module->subtitle }}</dl>
                    </dl>
                </div>
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-4">TAG</dt>
                        <dl class="col-8">{{ $module->tag }}</dl>
                        <dt class="col-4">URL</dt>
                        <dl class="col-8">{{ $module->url }}</dl>
                        <dt class="col-4">BACKGROUND COLOR</dt>
                        <dl class="col-8">{{ $module->color }}</dl>
                        <dt class="col-4">MENU VIEW</dt>
                        <dl class="col-8">{{ $module->menu }}</dl>
                    </dl>
                </div>
                <div class="col-md-2">
                    <x-template.module-box url="{{ $module->url }}" color="{{ $module->color }}"
                        title="{{ $module->title }}" subtitle="{{ $module->subtitle }}" />
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-dark">
            <div class="card-title ">
                Hak Akses Perusahaan
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('superadmin/master-data/module/add-role') }}" method="post">
                        @csrf

                        @if (empty($module->level))
                            <input type="hidden" name="id_module" value="{{ $module->id }}">
                            <div class="form-group">
                                <label for="" class="control-label">Data Perusahaan</label>
                                <select name="id_dataperusahaan" class="form-control">
                                    @foreach ($list_dataperusahaan as $dataperusahaan)
                                        <option value="{{ $dataperusahaan->id }}">
                                            {{ $dataperusahaan->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div class="form-group">
                            <button class="btn btn-dark float-right"><i class="fas fa-save"> Simpan</i></button>
                        </div>
                    </form>
                </div>

                @if (empty($module->level))
                    <div class="col-md-12">
                        <hr>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="bg-dark">
                                <th style=" width: 1%" >No</th>
                                <th width="80px">Aksi</th>
                                <th>Nama Perushaaan</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($module->role as $role)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('superadmin/master-data/module/delete-role', $role->id) }}"
                                                class="btn btn-danger"><i class="fas fa-trash"> Hapus</i></a>
                                        </td>
                                        <td>{{ $role->dataperusahaan->nama_perusahaan }}</td>
                                        <td>{{ $role->dataperusahaan->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-module.admin>

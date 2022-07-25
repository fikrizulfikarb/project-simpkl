<x-module.superadmin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Module
        </h5>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url('superadmin/master-data/module/create') }}" class="float-right btn btn-dark"><i
                    class="fas fa-plus"></i> Tambah Module</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead class="bg-dark">
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Tag</th>
                    <th>Jumlah Akses</th>
                </thead>
                <tbody>
                    @foreach ($list_module as $module)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="superadmin/master-data/module"
                                        id="{{ $module->id }}" />
                                    <x-template.button.edit-button url="superadmin/master-data/module"
                                        id="{{ $module->id }}" />
                                    <x-template.button.delete-button url="superadmin/master-data/module"
                                        id="{{ $module->id }}" />
                                </div>
                            </td>
                            <td>{{ $module->name }}</td>
                            <td>{{ $module->tag }}</td>
                            <td>{{ $module->role_count }} User</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.superadmin>

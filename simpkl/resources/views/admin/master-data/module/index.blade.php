<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Tag</th>
                    <th>Jumlah Perusahaan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_module as $module)
                        @if (empty($module->level))
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <x-template.button.info-button url="admin/master-data/module"
                                            id="{{ $module->id }}" title="Lihat Detail" />
                                    </div>
                                </td>
                                <td>{{ $module->name }}</td>
                                <td>{{ $module->tag }}</td>
                                <td>{{ $module->role_count }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>

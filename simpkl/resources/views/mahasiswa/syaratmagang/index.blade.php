<x-module.mahasiswa title="Mahasiswa">

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Syarat Magang
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Syarat Magang
            </div>
            @if ($mahasiswa->syaratmagang->count('id_mahasiswa') < 2)
                <a href="{{ url('mahasiswa/syaratmagang/create') }}" class="btn btn-dark float-right"><i
                        class="fas fa-plus"></i> Tambah Data</a>
            @endif
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th width="75px">Aksi</th>
                    <th>Semester KRS</th>
                </thead>
                <tbody>
                    @foreach ($list_syaratmagang as $syaratmagang)
                        @if ($mahasiswa->id == $syaratmagang->id_mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="" target="popup"
                                            onclick="window.open('{{ url($syaratmagang->syarat_magang) }}','popup','width=800,height=600'); return false;"
                                            class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                                    </div>
                                </td>
                                <td>{{ $syaratmagang->krs_semester }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</x-module.mahasiswa>

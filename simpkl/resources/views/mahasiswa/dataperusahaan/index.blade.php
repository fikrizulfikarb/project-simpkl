<x-module.mahasiswa title="Mahasiswa">

    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Perusahaan
        </h5>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <th>No</th>
                    <th width="75px">Aksi</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kuota</th>
                </thead>
                <tbody>
                    @foreach ($list_dataperusahaan as $dataperusahaan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="mahasiswa/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}" title="detail"/>
                                </div>
                            </td>
                            <td>{{ $dataperusahaan->nama_perusahaan }}</td>
                            <td>{{ $dataperusahaan->alamat}}</td>
                            <td>{{ 0 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  
                <div class="row d-flex align-items-stretch">

                    @foreach ($list_dataperusahaan as $dataperusahaan)

                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                {{-- Digital Marketing --}}
                            </div>

                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        {{-- nama perusahaan --}}
                                        <h2 class="lead"><b>{{ $dataperusahaan->nama_perusahaan }}</b></h2>

                                        <p class="text-muted text-sm"><b>Tentang: </b> Perusahaan Pertanian Yang Bergerak di
                                            bidang penanaman kelapa sawit 
                                        </p>    

                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            {{-- alamat --}}
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Alamat: {{ $dataperusahaan->alamat}} </li>
                                            {{-- kontak --}}
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                            {{-- email --}}
                                            <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-box"></i></span> Email : {{ $dataperusahaan->email}}
                                            </li>

                                        </ul>

                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="text-right">
                                    <a href=" {{ url('mahasiswa/dataperusahaan', $dataperusahaan->id) }} " class="btn btn-sm btn-dark">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i>Kuota 12</i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-building"></i> Lihat Lowongan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

                </thead>   
            </table>

            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>



</x-module.mahasiswa>

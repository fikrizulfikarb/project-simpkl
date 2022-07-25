<x-module.istansi title="Instansi">

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Profile Instansi
    </h5>


    <x-template.button.back-button url="istansi/master-data/lowongan" />
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="">
                <div class="card">
                    <img src="{{ url('/') }}/dist/img/vektoruser.jpg" class="img-fluid profile-pic-container"
                        style="width: 100%">
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <div class="card-title">Profile</div>
                    <a href="{{ url('istansi/master-data/profile/edit') }}"
                        class="btn btn-warning btn-sm float-right"><i class="fa fa-edit"></i> Edit </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <label for="" class="control-label col-md-4">Nama Perusahaan</label>
                                <p type="text" class="form-control-static col-md-8">
                                    {{ auth()->user()->nama_perusahaan }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Telp</label>
                                <p type="text" class="form-control-static col-md-8">
                                    {{ auth()->user()->no_handphone }}</p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Email</label>
                                <p type="text" class="form-control-static col-md-8">{{ auth()->user()->email }}
                                </p>
                            </div>
                            <div class="row">
                                <label for="" class="control-label col-md-4">Alamat</label>
                                <p type="text" class="form-control-static col-md-8">{{ auth()->user()->alamat }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-module.istansi>

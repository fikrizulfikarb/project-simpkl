<x-module.mahasiswa title="Mahasiswa">
    
    <h1>
        Welcome Home
        <br>
        {{ auth()->user()->nama }}
    </h1>



    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/mahasiswa') }}">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ 0 }}</h3>
                        <p>Jumlah Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/jumlah-buku') }}">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ 0 }}</h3>
                        <p>Jumlah Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/pengunjung') }}">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ 0 }}</h3>
                        <p>Jumlah Pengunjung</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-person-booth"></i>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a herf="{{ url('pegawai/peminjaman') }}">
                <div class="small-box bg-gray">
                    <div class="inner">
                        <h3>{{ 0 }}</h3>
                        <p>jumlah Peminjiaman</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>
        
    </div> --}}

</x-module.mahasiswa>


{{-- <x-template.button.back-button url="alumni/alumnis" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url("$mahasiswa->foto") }}" class="img-fluid profile-pic-container" style="width: 100%">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="card-title">Input Data Alumni</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Foto 3x4 Warna</label>
                                <input type="file" name="foto" accept=".jpg, .png" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Alamat Sekarang</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Alamat Sekarang</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">No. Handphone/ Whatsapp</label>
                                <input type="number" name="no_hp" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Kegiatan Sekarang</label>
                                <select name="kegiatan_sekarang" class="form-control">
                                    <option selected>{{ $alumni->kegiatan_sekarang }}</option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Studi Lanjut">Studi Lanjut</option>
                                    <option value="Belum Bekerja">Belum Bekerja</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="khadafi">
                <div class="card-header bg-light">
                    <div class="card-title">Data Pekerjaan</div>
                    <label for="" class="label text-danger pl-1"> *Tidak perlu diisi jika belum
                        kerja.</label>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Pekerjaan</label>
                                <select name="jenis_pekerjaan" class="form-control">
                                    <option selected>{{ $alumni->jenis_pekerjaan }}</option>
                                    <option value="-">-</option>
                                    <option value="ASN/ PNS/ TNI-POLRI/ Perangkat Desa">ASN/ PNS/ TNI-POLRI/
                                        Perangkat Desa
                                    </option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Karyawan Swasta/ BUMN/ BUMD/ BUMDES">Karyawan Swasta/
                                        BUMN/ BUMD/
                                        BUMDES
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Perusahaan Tempat
                                    Kerja</label>
                                <input type="text" name="nama_perusahaan" class="form-control"
                                    value="{{ $alumni->nama_perusahaan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Kategori Perusahaan</label>
                                <select name="kategori_perusahaan" class="form-control">
                                    <option selected>{{ $alumni->kategori_perusahaan }}</option>
                                    <option value="-">-</option>
                                    <option value="Perusahaan Lokal">Perusahaan Lokal</option>
                                    <option value="Perusahaan Nasional">Perusahaan Nasional</option>
                                    <option value="Lebih dari 5 Juta">Perusahaan Multinasional/
                                        Internasional
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Posisi/ Jabatan Saat
                                    Ini</label>
                                <input type="text" name="jabatan" class="form-control"
                                    value="{{ $alumni->jabatan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Waktu Yang Diperlukan
                                    Untuk Memperoleh
                                    Pekerjaan Setelah Kelulusan</label>
                                <select name="waktu_tunggu_kerja" class="form-control">
                                    <option selected>{{ $alumni->waktu_tunggu_kerja }}</option>
                                    <option value="-">-</option>
                                    <option value="0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus">
                                        0 Bulan/
                                        Langsung
                                        Bekerja/ Dipesan Sebelum Lulus</option>
                                    <option value="Waktu Tunggu Kurang dari 3 Bulan">Waktu Tunggu
                                        Kurang dari 3
                                        Bulan
                                    </option>
                                    <option value="Waktu Tunggu Antara 3-6 Bulan">Waktu Tunggu
                                        Antara 3-6 Bulan
                                    </option>
                                    <option value="Waktu Tunggu Lebih dari 6 Bulan">Waktu Tunggu
                                        Lebih dari 6 Bulan
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Kesesuaian Kompetensi
                                    dengan Bidang
                                    Pekerjaan</label>
                                <select name="kesesuaian_kompetensi" class="form-control">
                                    <option selected>{{ $alumni->kesesuaian_kompetensi }}</option>
                                    <option value="-">-</option>
                                    <option value="Sangat Sesuai">Sangat Sesuai</option>
                                    <option value="Sesuai">Sesuai</option>
                                    <option value="Kurang Sesuai">Kurang Sesuai</option>
                                    <option value="Tidak Sesuai">Tidak Sesuai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Gaji Pertama Saat
                                    Bekerja</label>
                                <select name="gaji_pertama" class="form-control">
                                    <option selected>{{ $alumni->gaji_pertama }}</option>
                                    <option value="-">-</option>
                                    <option value="Kurang dari 3 Juta">Kurang dari 3 Juta</option>
                                    <option value="3 Juta - 5 Juta">3 Juta - 5 Juta</option>
                                    <option value="Lebih dari 5 Juta">Lebih dari 5 Juta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-light">
                    <div class="card-title">Penutup</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="label control-label">Saran dan Masukan Alumni Untuk
                                    POLITAP
                                </label>
                                <textarea name="saran_masukan" class="form-control">{{ $alumni->saran_masukan }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="label control-label">Kesan Alumni Berkuliah di
                                    POLITAP
                                </label>
                                <textarea name="kesan" class="form-control">{{ $alumni->kesan }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-dark float-right mt-3"><i class="far fa-save"></i>
                                Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div> --}}

{{-- <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-left">Profil Mahasiswa</h5>
                            <hr class="no-margin">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        Tempat PKL
                                        <h2>
                                            CV. Deni Suryaz Amazing Man
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr class="no-margin">
                            <div class="row">
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Dosen Pembimbing</dt>
                                        <dd>
                                            Bhismo ,S.H,M.Si
                                        </dd>
                                        <dt>NIK/NIP</dt>
                                        <dd>
                                            3042020019/1234567890
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Dosen Penguji</dt>
                                        <dd>
                                            Belum Tau
                                        </dd>
                                        <dt>NIK/NIP</dt>
                                        <dd>
                                            Belum Tau
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <hr class="no-margin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

{{-- <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-title">Data Mahasiswa</div>
                    <a href="#" class="btn btn-dark btn-sm float-right">
                        <i class="fas fa-save"></i>Save 
                    </a>  
            </div>
            
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="from-group from-group-default from-with-select">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                    </div>

                </div>
            </div>

        </div>	
    </div> --}}

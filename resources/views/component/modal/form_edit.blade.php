<!-- /.edit peserta didik baru -->
<div class="modal fade" id="edit-{{ $data->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Peserta Didik Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form action="edit_peserta_didik_baru/{{ $data->id }}" method="POST">
                        <div class="row g-3">
                            @method('put')

                            @csrf

                            <input type="hidden" value="{{ $data->id }}" name="id">

                            <input type="hidden" value="{{ $data->code }}" name="code">

                            <div class="col-md-3">
                                <label for="nama"><p class="p-3">Nama Lengkap :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nama" id="nama" class="form-control border-0 bg-light px-4 @error('nama') is-invalid @enderror" value="{{ $data->nama }}" style="height: 55px;">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="kelamin"><p class="p-3">Jenis Kelamin :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="kelamin" type="text" name="jenis_kelamin" class="form-control border-0 bg-light px-4 @error('jenis_kelamin') is-invalid @enderror" style="height: 55px;">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki"@if ($data->jenis_kelamin == "Laki - Laki") selected @endif>Laki - Laki</option>
                                    <option value="Perempuan"@if ($data->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="ttl"><p class="p-3">Tempat, Tanggal Lahir :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-5">
                                <input id="ttl" type="text" name="tempat_lahir" class="form-control border-0 bg-light px-4 @error('tempat_lahir') is-invalid @enderror" value="{{ $data->tempat_lahir }}" style="height: 55px;">
                                @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>                            
                            <div class="col-4">
                                <input type="date" type="text" name="tanggal_lahir" class="form-control border-0 bg-light px-4 @error('tanggal_lahir') is-invalid @enderror" value="{{ $data->tanggal_lahir }}" style="height: 55px;">
                                @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="asal_sekolah"><p class="p-3">Asal Sekolah :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="asal_sekolah" type="text" name="asal_sekolah" class="form-control border-0 bg-light px-4 @error('asal_sekolah') is-invalid @enderror" value="{{ $data->asal_sekolah }}" style="height: 55px;">
                                @error('asal_sekolah')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="no_hp_siswa/siswi"><p class="p-3">Nomor Hp Siswa/Siswi :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_siswa/siswi" type="number" name="no_hp_siswa" class="form-control border-0 bg-light px-4 @error('no_hp_siswa') is-invalid @enderror" value="{{ $data->no_hp_siswa }}" style="height: 55px;">
                                @error('no_hp_siswa')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                            <label for="no_hp_wali"><p class="p-3">Nomor HP Wali :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_wali" type="number" name="no_hp_wali" class="form-control border-0 bg-light px-4 @error('no_hp_wali') is-invalid @enderror" value="{{ $data->no_hp_wali }}" style="height: 55px;">
                                @error('no_hp_wali')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="alamat"><p class="p-3">Alamat :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <textarea id="alamat" name="alamat" class="form-control border-0 bg-light px-4 py-3 @error('alamat') is-invalid @enderror" rows="4" >{{ $data->alamat }}</textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="program_keahlian"><p class="p-3">Program Keahlian :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                        <select id="program_keahlian" type="text" name="program_keahlian" class="form-control border-0 bg-light px-4 @error('program_keahlian') is-invalid @enderror" style="height: 55px;" value="{{ $data->alamat }}">
                                        <option value="">Pilih Program Keahlian</option>
                                        <option value="TPFL"@if ($data->program_keahlian == "TPFL") selected @endif>TEKNIK PENGELASAN DAN FABRIKASI LOGAM ( TPFL )</option>
                                        <option value="TKRO"@if ($data->program_keahlian == "TKRO") selected @endif>TEKNIK KENDARAAN RINGAN OTOMOTIF( TKRO )</option>
                                        <option value="TE"@if ($data->program_keahlian == "TE") selected @endif>TEKNIK ELETRONIKA ( TE )</option>
                                        <option value="TJKT"@if ($data->program_keahlian == "TJKT") selected @endif>TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI ( TJKT )</option>
                                        <option value="TBSM"@if ($data->program_keahlian == "TBSM") selected @endif>TEKNIK DAN BISNIS SEPEDA MOTOR ( TBSM )</option>
                                        <option value="TF"@if ($data->program_keahlian == "TF") selected @endif>TEKNOLOGI FARMASI ( TF )</option>
                                        </select>
                                        @error('program_keahlian')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="float: left">{{ $message }}</strong>
                                        </span>
                                        @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="referensi"><p class="p-3">Referensi :</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="referensi" type="text" name="referensi" class="form-control border-0 bg-light px-4 @error('referensi') is-invalid @enderror" value="{{ $data->referensi }}" style="height: 55px;">
                                @error('referensi')
                                <span class="invalid-feedback" role="alert">
                                <strong style="float: left">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                                <input type="hidden" value="{{ $data->tapel }}" name="tapel">

                            <div class="col-md-3">
                                <label for="daftar"><p class="p-3">Bertanda (<span style="color: red">*</span>) Wajib diisi</p></label>
                            </div>
                            <div class="col-9">
                                <button class="btn btn-primary w-100 py-3" type="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
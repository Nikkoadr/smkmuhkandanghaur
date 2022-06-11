
                        <div class="row g-3">
                          @csrf
                          <input type="hidden" value="{{ Ramsey\Uuid\Uuid::uuid4()->toString() }}" name="id">
                          <input type="hidden" value="{{ rand(10, 5000) }}" name="code">
                            <div class="col-md-3">
                                <label for="nama"><p class="p-3">Nama Lengkap :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nama" id="nama" class="form-control border-0 bg-light px-4" placeholder="Nama Lengkap" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="kelamin"><p class="p-3">Jenis Kelamin :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="kelamin" type="text" name="jenis_kelamin" class="form-control border-0 bg-light px-4" placeholder="Jenis Kelamin" style="height: 55px;">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="ttl"><p class="p-3">Tempat, Tanggal Lahir :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-5">
                                <input id="ttl" type="text" name="tempat_lahir" class="form-control border-0 bg-light px-4" placeholder="Tempat Lahir" style="height: 55px;">
                            </div>                            
                            <div class="col-4">
                                <input type="date" type="text" name="tanggal_lahir" class="form-control border-0 bg-light px-4" placeholder="Tanggal Lahir" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="asal_sekolah"><p class="p-3">Asal Sekolah :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="asal_sekolah" type="text" name="asal_sekolah" class="form-control border-0 bg-light px-4" placeholder="Asal Sekolah" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp_siswa/siswi"><p class="p-3">Nomor Hp Siswa/Siswi :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_siswa/siswi" type="number" name="no_hp_siswa" class="form-control border-0 bg-light px-4" placeholder="Nomor HP Siswa/Siswi Baru" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp_wali"><p class="p-3">Nomor HP Wali :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_wali" type="number" name="no_hp_wali" class="form-control border-0 bg-light px-4" placeholder="Nomor HP Wali" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="alamat"><p class="p-3">Alamat :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <textarea id="alamat" name="alamat" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Alamat"></textarea>
                            </div>
                            <div class="col-md-3">
                                <label for="program_keahlian"><p class="p-3">Program Keahlian :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="program_keahlian" type="text" name="program_keahlian" class="form-control border-0 bg-light px-4" style="height: 55px;">
                                <option value="">Pilih Program Keahlian</option>
                                <option value="TPFL">TEKNIK PENGELASAN DAN FABRIKASI LOGAM ( TPFL )</option>
                                <option value="TKRO">TEKNIK KENDARAAN RINGAN OTOMOTIF( TKRO )</option>
                                <option value="TE">TEKNIK ELETRONIKA ( TE )</option>
                                <option value="TJKT">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI ( TJKT )</option>
                                <option value="TBSM">TEKNIK DAN BISNIS SEPEDA MOTOR ( TBSM )</option>
                                <option value="TF">TEKNOLOGI FARMASI ( TF )</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="referensi"><p class="p-3">Referensi :</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="referensi" type="text" name="referensi" class="form-control border-0 bg-light px-4" placeholder="Contoh : Sifulan X TKRO 6" style="height: 55px;">
                            </div>
                            <input type="hidden" value="{{ Illuminate\Support\Carbon::now('Y') }}" name="tapel">
                            <div class="col-md-3">
                                <label for="daftar"><p class="p-3">Bertanda (<span style="color: red">*</span>) Wajib diisi</p></label>
                            </div>
                            <div class="col-9">
                                <button class="btn btn-primary w-100 py-3" type="submit">Tambah</button>
                            </div>
                        </div>

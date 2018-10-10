<accordion name="collapse-certificate" collapse="in">
        <div slot="title" class="ll-head">
            BASIC INFORMATION
        </div>
        <frgroup>
            <label slot="label">
                No HM / HGB
            </label>
            <input type="text" name="no_hm_hgb" value="{{ old('no_hm_hgb') }}" class="form-control" placeholder="No HM / HGB" />
        </frgroup>
        <frgroup>
            <label slot="label">
                Nama Sertifikat
            </label>
            <input type="text" name="nama_sertifikat" value="{{ old('nama_sertifikat') }}" class="form-control" placeholder="Contoh: PT. Dirga Surya" />
        </frgroup>
        <frgroup>
            <label slot="label">
                Kepemilikan
            </label>
            <input type="text" name="kepemilikan" value="{{ old('kepemilikan') }}" class="form-control" placeholder="Kepemilikan" />
        </frgroup>
        <frgroup>
            <label slot="label">
                Tipe Sertifikat
            </label>
            <certificate-types></certificate-types>
        </frgroup>


        <frgroup w="2" wi="2">
            <label slot="label">
                Kelurahan
            </label>
            <input type="text" name="kelurahan"n value="{{ old('kelurahann') }}" class="form-control" placeholder="Kelurahan" />
        </frgroup>

        <frgroup wl="2" wi="2">
            <label slot="label">
                Kecamatan
            </label>
            <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" class="form-control" />
        </frgroup>

        <frgroup wl="2" wi="2">
            <label slot="label">
                Kota / Kabupaten
            </label>
            <input type="text" name="kota" value="{{ old('kota') }}" class="form-control" />
        </frgroup>
        
        <frgroup>
            <label slot="label">
                Alamat
            </label>
            <input type="text" name="addrees" value="{{ old('addrees') }}" class="form-control" />
        </frgroup>

        <frgroup>
            <label slot="label">
                Luas Sertifikat
            </label>
            <div class="input-group">
                    <input type="number" min="0" name="luas_sertifikat" value="{{ old('luas_sertifikat') }}" class="form-control" placeholder="Contoh: 1, 2, 3" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                </div>
        </frgroup>
        <frgroup>
            <label slot="label">
                Ajb Nominal
            </label>
            <input type="text" name="ajb_nominal" value="{{ old('ajb_nominal') }}" class="form-control" />
        </frgroup>
        <frgroup>
            <label slot="label">
                Ajb Date
            </label>
            <indate name="ajb_date" value="{{old('ajb_date') }}"></indate>
        </frgroup>



        
</accordion>

<accordion name="collapse-lease" collapse="in">

    <div slot="title" class="ll-head">
        LEASE
    </div>

    <frgroup>
        <label slot="label">
            Yang Menyewakan
        </label>
        <div>{{ $lease->lessor }}
        </div>
    </frgroup>

    <frgroup>
        <label slot="label">
            PKP Yang Menyewakan
        </label>
        <div class="input-group">
            <label class="radio-inline"><input type="radio" name="lessor_pkp" v-model="lessorPKP" :value="true">Ya</label>
            <label class="radio-inline"><input type="radio" name="lessor_pkp" v-model="lessorPKP" :value="false">Tidak</label>
            <label class="radio-inline text-muted">
                <i class="fa fa-info-circle"></i>
                <span v-if="lessorPKP">Termasuk PPN</span>
                <span v-else>Tanpa PPN</span>
            </label>
        </div>
    </frgroup>

    <frgroup>
        <label slot="label">
            Nama Penyewa
        </label>
        <div>{{ $lease->tenant }}
        </div>
    </frgroup>

    <frgroup>
        <label slot="label">
            Rent Assuransi
        </label>
        <div>{{ $lease->rent_assurance }}
        </div>
    </frgroup>

    <frgroup>
        <label slot="label">
           Keperluan Sewa
        </label>
        <div>{{ $lease->purpose }}
        </div>
    </frgroup>

    <frgroup>
        <label slot="label">
            PIC
        </label>
        <div>{{ $lease->pic }}
        </div>
    </frgroup>

    <!-- AGREEMENT -->
    @include('partials.forms.lease.show.agreement')

    <!-- GRACE PERIOD -->
    @include('partials.forms.lease.show.grace')

    <!-- LEASE PERIOD -->
    @include('partials.forms.lease.show.lease_period')

    <!-- LEASE PRICE -->
    @include('partials.forms.lease.show.lease_price')

    <!-- PAYMENT TERMS-->
    @include('partials.forms.lease.show.payment_term')

    <!-- INVOICE -->
    

    <!-- PAYMENT HISTORY -->
    @include('partials.forms.lease.show.payment_history')

    <!-- BROKER -->
    @include('partials.forms.lease.show.broker')

    <!-- OTHER -->
    @include('partials.forms.lease.show.other')

</div>

</accordion>
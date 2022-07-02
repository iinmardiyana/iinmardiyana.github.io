@foreach($paketkilos as $paketkilos)
<div class="col-md-3">
    <div class="form-group">
        <label>
            <input type="radio" name="jenis_paket" class="card-input-element jenis_paket" data-berat="{{ $paketkilos->min_berat_paket }}" data-nama="{{ $paketkilos->nama_paket }}" data-harga="{{ $paketkilos->harga_paket }}" data-antar="{{ $paketkilos->antar_jemput_paket }}" value="{{ $paketkilos->kd_paket }}">
            <div class="card card-line card-input">
              <div class="card-body">
                <h5>{{ $paketkilos->nama_paket }}</h5>
                <p>- Harga paket : Rp. {{ number_format($paketkilos->harga_paket,0,',','.') }}</p>
                <p style="margin-top: -15px;">- Lama Cuci : {{ $paketkilos->hari_paket . ' hari' }}</p>
                <p style="margin-top: -15px;">- Minimal Berat : {{ $paketkilos->min_berat_paket }} kg</p>
                @if($paketkilos->antar_jemput_paket == 1)
                <hr>
                <p style="margin-bottom: -5px;"><i class="icon-check text-success"></i> Gratis pengantaran</p>
                @endif
              </div>
            </div>
        </label>
    </div>
</div>
@endforeach
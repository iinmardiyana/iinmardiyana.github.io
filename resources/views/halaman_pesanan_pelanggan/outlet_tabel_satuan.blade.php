@foreach($paketsatus as $paketsatu)
<li class="list-group-item d-flex justify-content-between">
	<div class="nama_barang">
		<p class="font-weight-bold">{{ $paketsatu->nama_barang . ' - ' . $paketsatu->ket_barang }}</p>
	</div>
	<div class="harga_barang">
		<p class="text-dark font-weight-bold">Rp. {{ number_format($paketsatu->harga_barang,2,',','.') }}</p>
	</div>
</li>
@endforeach
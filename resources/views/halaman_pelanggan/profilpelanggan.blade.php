@extends('halaman_template')
@section('css')
<link href="{{ asset('plugins/sweetalert/css/sweetalert.css') }}" rel="stylesheet">
@if(auth()->user()->role == 'admin')
<style type="text/css">
    #table-pengunjung tr th, #table-pengunjung tr td{
        font-size: 12px;
    }
    #table-pemasukan tr th, #table-pemasukan tr td{
        font-size: 12px;
    }
    .form-control-xs {
        height: calc(1em + .375rem + 2px) !important;
        padding: .125rem .25rem !important;
        font-size: .75rem !important;
        line-height: 1.5;
    }
    .tabel-ket tr th{
        font-size: 12px;
        padding: 5px;
    }
</style>
@else
<style type="text/css">
    .laundry-gambar{
        object-fit: cover;
        width: 15rem;
        height: 15rem;
        position: absolute;
        margin-top: -50px;
    }
    .profil-pict{
        object-fit: cover;
        width: 7rem;
        height: 7rem;
    }
    .table_profil tr th, .table_profil tr td{
        padding: 5px;
        font-size: 12px;
    }
    .table_profil tr th{
        width: 100px;
    }
    .tabel-outlet tr th, .tabel-outlet tr td{
        padding: 5px;
        font-size: 12px;
    }
    .tabel-paket tr td{
        padding: 3px;
        font-size: 12px;
    }
    .foto{
        position: relative;
    }
    .upload-btn-wrapper button{
      position: absolute;
      background-color: #7571f9;
      color: #fff;
      top: 15%;
      left: 65%;
      transform: translate(-50%, -50%);
      border: 0px;
      border-radius: 50%;
      padding: 6px 0px;
      line-height: 1.42857;
      width: 25px;
      height: 25px;
      font-size: 10px;
    }
    .ubah_foto_input{
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
    }
</style>
@endif
@endsection
@section('konten')
{{-- <div class="col-lg-4"> --}}
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" class="form_edit_identitas" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex justify-content-between" style="margin-bottom: -10px;">
                                    <h4>Profil</h4>
                                    <div class="edit-profil-button" style="margin-top: -10px;">
                                        <button type="button" style="border: 0px; background-color: #fff;" class="btn text-primary edit_identitas_btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button type="submit" style="border: 0px; background-color: #fff;" class="btn text-primary update_identitas_btn" hidden=""><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <div class="foto">
                                        <img src="{{ asset('/pictures/' . auth()->user()->avatar) }}" class="profil-pict rounded-circle img-thumbnail">
                                        <div class="upload-btn-wrapper ubah_foto_file" hidden="">
                                            <button type="button" class="ubah_foto_btn btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <input type="file" name="ubah_foto_input" class="ubah_foto_input" hidden="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="btn btn-sm font-weight-bold mt-1" style="background-color: #6fd96f; color: #fff;">{{ auth()->user()->role }}</div>
                                </div>
                                <table class="table_profil mt-3" style="width: 100%;">
                                    <tr class="align-top">
                                        <th>Kode Pelanggan</th>
                                        <td>:</td>
                                        <td>{{ auth()->user()->kd_pengguna }}</td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td class="data_identitas">{{ auth()->user()->name }}</td>
                                        <td class="input_ubah" hidden=""><input required="" type="text" name="ubah_nama_pelanggan" value="{{ auth()->user()->name }}"></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Gender</th>
                                        <td>:</td>
                                        @php
                                        $gender = \App\Models\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        @endphp
                                        <td>
                                            @if($gender->jk_pelanggan == 'L')
                                            Laki-laki
                                            @else
                                            Perempuan
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Email</th>
                                        <td>:</td>
                                        @php
                                        $email = \App\Models\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        @endphp
                                        <td class="data_identitas">{{ $email->email_pelanggan }}</td>
                                        <td class="input_ubah" hidden=""><input required="" type="text" name="ubah_email_pelanggan" value="{{ $email->email_pelanggan }}"></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>No HP</th>
                                        <td>:</td>
                                        @php
                                        $no_hp = \App\Models\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        @endphp
                                        <td class="data_identitas">{{ $no_hp->no_hp_pelanggan }}</td>
                                        <td class="input_ubah" hidden=""><input required="" type="text" name="ubah_no_hp_pelanggan" class="number_input" value="{{ $no_hp->no_hp_pelanggan }}"></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Alamat</th>
                                        <td>:</td>
                                        @php
                                        $alamat = \App\Models\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        @endphp
                                        <td class="data_identitas">{{ $alamat->alamat_pelanggan }}</td>
                                        <td class="input_ubah" hidden="">
                                            <textarea rows="4" id="comment" name="ubah_alamat_pelanggan" style="font-size: 12px;" required="">{{ $alamat->alamat_pelanggan }}</textarea>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
@endsection
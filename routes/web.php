<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfilController;
Use App\Http\Controllers\SearchController;
use App\Http\Controllers\TransaksiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home1');
});

Route::get('/faq', function () {
    return view('faq');
});

// ========================================== LOGIN UNTUK SEMUA USER=========================================
// Route::post('/registrasi_awal', [LoginController::class, 'registrasiAwal']);
Route::post('/registrasi_awal', 'App\Http\Controllers\LoginController@registrasiAwal');
Route::get('/login', 'App\Http\Controllers\LoginController@halamanLogin')->name('login');
Route::post('/login_verifikasi', 'App\Http\Controllers\LoginController@verifikasiLogin')->name('login_verifikasi');
Route::get('/logout', 'App\Http\Controllers\LoginController@prosesLogout');

// =============================== AKSES ADMIN DAN PELANGGAN ===============================
Route::group(['middleware' => ['auth', 'ceklevel:admin,non_member,member']], function(){
// Fitur Cari Halaman
	Route::get('/cari_halaman/{kata}', 'App\Http\Controllers\SearchController@cariHalaman');
// Halaman Dashboard
	Route::get('/dashboard', 'App\Http\Controllers\DashboardController@halamanDashboard');
// Hubungan Transaksi
	Route::get('/pdf_transaksi/{id}', 'App\Http\Controllers\TransaksiController@pdfTransaksi');
	Route::get('/ubah_status_transaksi/{status}/{id}', 'App\Http\Controllers\TransaksiController@ubahStatusTransaksi');
});
// =================================================================================================

// ===================================== AKSES ADMIN =====================================
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
// Halaman Profil
	Route::get('/kelola_profil', 'App\Http\Controllers\ProfilController@halamanProfil');
	Route::post('/update_profil', 'App\Http\Controllers\ProfilController@updateProfil');
	Route::post('/ubah_password/{id}', 'App\Http\Controllers\ProfilController@ubahPassword');
// Halaman Pelanggan
	Route::get('/registrasi_pelanggan', 'App\Http\Controllers\PelangganController@registrasiPelanggan');
	Route::get('/kelola_transaksi', 'App\Http\Controllers\PelangganController@halamanTransaksi');
	Route::get('/kelola_pelanggan', 'App\Http\Controllers\PelangganController@halamanPelanggan');
	Route::get('/detail_pelanggan_member/{id}', 'App\Http\Controllers\PelangganController@detailPelangganMember');
	Route::get('/detail_pelanggan_non_member/{id}', 'App\Http\Controllers\PelangganController@detailPelangganNonMember');
	Route::get('/layanan_member/{id}', 'App\Http\Controllers\PelangganController@halamanLayananMember');
	Route::get('/sort_outlet_tabel_kiloan/{id}', 'App\Http\Controllers\PelangganController@sortOutletTabelKiloan');
	Route::get('/sort_outlet_tabel_satuan/{id}', 'App\Http\Controllers\PelangganController@sortOutletTabelSatuan');
	Route::post('/simpan_pelanggan', 'App\Http\Controllers\PelangganController@simpanPelanggan');
	Route::post('/simpan_pesanan', 'App\Http\Controllers\PelangganController@simpanPesanan');
	Route::get('/lihat_paket_kilo_member/{id}', 'App\Http\Controllers\PelangganController@lihatPaketKiloMember');
	Route::get('/lihat_paket_satu_member/{id}', 'App\Http\Controllers\PelangganController@lihatPaketSatuMember');
	Route::get('/update_status_transaksi/{id}/{status}', 'App\Http\Controllers\PelangganController@updateStatusTransaksi');
	Route::get('/hapus_pesanan_kilo/{id}', 'App\Http\Controllers\PelangganController@hapusPesananKilo');
	Route::get('/hapus_pesanan_satu/{id}', 'App\Http\Controllers\PelangganController@hapusPesananSatu');
	Route::get('/hapus_pelanggan/{id}', 'App\Http\Controllers\PelangganController@hapusPelanggan');
	Route::get('/pdf_pelanggan/{id}', 'App\Http\Controllers\PelangganController@pdfPelanggan');
// Halaman Pengguna
	Route::get('/kelola_pengguna', 'App\Http\Controllers\PenggunaController@halamanPengguna');
	Route::get('/tambah_pengguna', 'App\Http\Controllers\PenggunaController@tambahPengguna');
	Route::post('/simpan_pengguna', 'App\Http\Controllers\PenggunaController@simpanPengguna');
	Route::get('/lihat_pengguna/{id}', 'App\Http\Controllers\PenggunaController@lihatPengguna');
	Route::get('/edit_pengguna/{id}', 'App\Http\Controllers\PenggunaController@editPengguna');
	Route::post('/update_pengguna/{id}', 'App\Http\Controllers\PenggunaController@updatePengguna');
	Route::get('/hapus_pengguna/{id}', 'App\Http\Controllers\PenggunaController@hapusPengguna');
// Halaman Outlet
	Route::get('/kelola_outlet', 'App\Http\Controllers\OutletController@halamanOutlet');
	Route::get('/tambah_outlet', 'App\Http\Controllers\OutletController@tambahOutlet');
	Route::post('/simpan_outlet', 'App\Http\Controllers\OutletController@simpanOutlet');
	Route::get('/lihat_outlet/{id}', 'App\Http\Controllers\OutletController@lihatOutlet');
	Route::get('/edit_outlet/{id}', 'App\Http\Controllers\OutletController@editOutlet');
	Route::post('/update_outlet/{id}', 'App\Http\Controllers\OutletController@updateOutlet');
	Route::get('/hapus_outlet/{id}', 'OutletController@hapusOutlet');
// Halaman Paket
	Route::get('/kelola_paket', 'App\Http\Controllers\PaketController@halamanPaket');
	Route::get('/tambah_paket_kiloan', 'App\Http\Controllers\PaketController@tambahPaketKiloan');
	Route::get('/tambah_paket_satuan', 'App\Http\Controllers\PaketController@tambahPaketSatuan');
	Route::post('/simpan_paket_kiloan', 'App\Http\Controllers\PaketController@simpanPaketKiloan');
	Route::post('/simpan_paket_satuan', 'App\Http\Controllers\PaketController@simpanPaketSatuan');
	Route::get('/lihat_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@lihatPaketKiloan');
	Route::get('/lihat_paket_satuan/{id}', 'App\Http\Controllers\PaketController@lihatPaketSatuan');
	Route::get('/edit_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@editPaketKiloan');
	Route::get('/edit_paket_satuan/{id}', 'App\Http\Controllers\PaketController@editPaketSatuan');
	Route::post('/update_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@updatePaketKiloan');
	Route::post('/update_paket_satuan/{id}', 'App\Http\Controllers\PaketController@updatePaketSatuan');
	Route::get('/hapus_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@hapusPaketKiloan');
	Route::get('/hapus_paket_satuan/{id}', 'App\Http\Controllers\PaketController@hapusPaketSatuan');
// Halaman Outlet
	Route::get('/kelola_outlet', 'App\Http\Controllers\OutletController@halamanOutlet');
	Route::get('/tambah_outlet', 'App\Http\Controllers\OutletController@tambahOutlet');
	Route::post('/simpan_outlet', 'App\Http\Controllers\OutletController@simpanOutlet');
	Route::get('/lihat_outlet/{id}', 'App\Http\Controllers\OutletController@lihatOutlet');
	Route::get('/edit_outlet/{id}', 'App\Http\Controllers\OutletController@editOutlet');
	Route::post('/update_outlet/{id}', 'App\Http\Controllers\OutletController@updateOutlet');
	Route::get('/hapus_outlet/{id}', 'OutletController@hapusOutlet');
// // Halaman Paket
// 	Route::get('/kelola_paket', 'App\Http\Controllers\PaketController@halamanPaket');
// 	Route::get('/tambah_paket_kiloan', 'App\Http\Controllers\PaketController@tambahPaketKiloan');
// 	Route::get('/tambah_paket_satuan', 'App\Http\Controllers\PaketController@tambahPaketSatuan');
// 	Route::post('/simpan_paket_kiloan', 'App\Http\Controllers\PaketController@simpanPaketKiloan');
// 	Route::post('/simpan_paket_satuan', 'App\Http\Controllers\PaketController@simpanPaketSatuan');
// 	Route::get('/lihat_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@lihatPaketKiloan');
// 	Route::get('/lihat_paket_satuan/{id}', 'App\Http\Controllers\PaketController@lihatPaketSatuan');
// 	Route::get('/edit_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@editPaketKiloan');
// 	Route::get('/edit_paket_satuan/{id}', 'App\Http\Controllers\PaketController@editPaketSatuan');
// 	Route::post('/update_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@updatePaketKiloan');
// 	Route::post('/update_paket_satuan/{id}', 'App\Http\Controllers\PaketController@updatePaketSatuan');
// 	Route::get('/hapus_paket_kiloan/{id}', 'App\Http\Controllers\PaketController@hapusPaketKiloan');
// 	Route::get('/hapus_paket_satuan/{id}', 'App\Http\Controllers\PaketController@hapusPaketSatuan');
// // Halaman Pengguna
// 	Route::get('/kelola_pengguna', 'App\Http\Controllers\PenggunaController@halamanPengguna');
// 	Route::get('/tambah_pengguna', 'App\Http\Controllers\PenggunaController@tambahPengguna');
// 	Route::post('/simpan_pengguna', 'App\Http\Controllers\PenggunaController@simpanPengguna');
// 	Route::get('/lihat_pengguna/{id}', 'App\Http\Controllers\PenggunaController@lihatPengguna');
// 	Route::get('/edit_pengguna/{id}', 'App\Http\Controllers\PenggunaController@editPengguna');
// 	Route::post('/update_pengguna/{id}', 'App\Http\Controllers\PenggunaController@updatePengguna');
// 	Route::get('/hapus_pengguna/{id}', 'App\Http\Controllers\PenggunaController@hapusPengguna');
// => Halaman Transaksi
	Route::get('/lihat_transaksi_selesai/{id}', 'App\Http\Controllers\TransaksiController@lihatTransaksiSelesai');
	Route::get('/lihat_transaksi_diantar/{id}', 'App\Http\Controllers\TransaksiController@lihatTransaksiDiantar');
	Route::get('/lihat_transaksi_diambil/{id}', 'App\Http\Controllers\TransaksiController@lihatTransaksiDiambil');
	Route::post('/bayar_pesanan', 'App\Http\Controllers\TransaksiController@bayarPesanan');
// => Halaman Laporan
	Route::get('/laporan_transaksi', 'App\Http\Controllers\LaporanController@halamanLaporanTransaksi');
	Route::get('/laporan_pegawai', 'App\Http\Controllers\LaporanController@halamanLaporanPegawai');
	Route::get('/laporan_pegawai_riwayat/{id}', 'App\Http\Controllers\LaporanController@halamanLaporanPegawaiRiwayat');
	Route::post('/filter_laporan_transaksi', 'App\Http\Controllers\LaporanController@filterLaporanTransaksi');
	Route::post('/filter_laporan_pegawai/{id}', 'App\Http\Controllers\LaporanController@filterLaporanPegawai');
	// Route::post('/pdf_laporan_transaksi', 'App\Http\Controllers\LaporanController@pdfLaporanTransaksi');
	// Route::post('/pdf_laporan_pegawai/{id}', 'App\Http\Controllers\LaporanController@pdfLaporanPegawai');
});
// ======================================== AKSES PELANGGAN ========================================
Route::group(['middleware' => ['auth', 'ceklevel:member,non_member']], function(){
// => Dashboard Pelanggan
	// Route::get('/registrasi_pelanggan', 'App\Http\Controllers\PelangganController@registrasiPelanggan');	
	Route::get('/data_outlet_dashboard/{id}', 'App\Http\Controllers\DashboardController@dashboardPelanggan');
	Route::get('/outlet_tabel_kiloan/{id}', 'App\Http\Controllers\DashboardController@outletTabelKiloan');
	Route::get('/outlet_tabel_satuan/{id}', 'App\Http\Controllers\DashboardController@outletTabelSatuan');
	Route::post('/update_profil_pelanggan', 'App\Http\Controllers\DashboardController@updateProfilPelanggan');
	Route::get('/pp', 'App\Http\Controllers\DashboardController@pp');
	Route::get('/pesanan_saya', 'App\Http\Controllers\PesananController@halamanPesananPelanggan');
	Route::get('/lihat_pesanan_pelanggan/{id}', 'App\Http\Controllers\PesananController@lihatPesananPelanggan');
});
// =================================================================================================

// ====================================== Sistem Login Bawaan ======================================
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// =================================================================================================
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

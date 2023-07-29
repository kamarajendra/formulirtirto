<?php

use App\Http\Controllers\FormulirController;
use App\Livewire\KematianForm;
use App\Livewire\KelahiranForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::get('/', [FormulirController::class, 'index']);
Route::get('kelahiran', KelahiranForm::class);
Route::get('kematian', KematianForm::class);

Route::post('submit', [FormulirController::class, 'store']);


Route::get('render', function (Request $request) {
    $data = [
        'config' => [
            'nama_propinsi' => 'Sulawesi Tengah',
            'nama_kabupaten' => 'Donggala',
            'nama_kecamatan' => 'Tanantovea',
            'nama_desa' => 'Wombo Kalonggo',
            'kode_desa'  => '7203192008',
        ],
        'nationalityGeneral' => "WNI",
        'input' => [
            'nama_pelapor' => 'Della Maharni Ningsih',
            'nik_pelapor' => '7203192008',
            'warganegara_pelapor' => 'WNI',

            'nama_saksi1' => 'Hur Minah',
            'nik_saksi1' => '7203192008',
            'warganegara_saksi1' => 'WNI',

            'nama_saksi2' => 'Hur Minah',
            'nik_saksi2' => '7203192008',
            'warganegara_saksi2' => 'WNI',

            'nama_ayah' => 'Ayah',
            'nik_ayah' => '7203192008',
            'tempat_lahir_ayah' => 'Donggala',
            'tanggal_lahir_ayah' => '12-12-2020',
            'warganegara_ayah' => 'WNI',

            'nama_ibu' => 'Ibu',
            'nik_ibu' => '7203192008',
            'tempat_lahir_ibu' => 'Donggala',
            'tanggal_lahir_ibu' => '12-12-2020',
            'warganegara_ibu' => 'WNI',

            'nama_bayi' => 'Bayi',
            'sex' => '1',
            'tempat_dilahirkan' => '2',
            'tempatlahir' => 'Donggala',
            'hari' => 'Senin',
            'tanggallahir' => '12-12-2020',
            'waktu_lahir' => '12:00',
            'jenis_kelahiran' => '3',
            'kelahiran_anak_ke' => '1',
            'penolong_kelahiran' => '4',
            'berat_lahir' => '123',
            'panjang_lahir' => '123',

            'tanggal_lahir_pelapor' => '12-12-2020',
            'no_surat' => '17',
            'nama_pejabat' => 'Mahrup',
        ]
    ];
    $html2pdf = new Html2Pdf();
    $content = view('forms.ket_kelahiran', $data)->render();

    // return $content;
    return $html2pdf->writeHTML($content)->output();
    // return view('forms.ket_kelahiran', $data);
});

Route::get('render2', function (Request $request) {
    $data = [
        'config' => [
            'nama_propinsi' => 'Jawa Barat',
            'nama_kabupaten' => 'Bogor',
            'nama_kecamatan' => 'Tamansari',
            'nama_desa' => 'Sirnagalih',
            'kode_desa'  => '1337069420',
        ],
        'nationalityGeneral' => "WNI",
        'input' => [
            'nama_pelapor' => 'Della Maharni Ningsih',
            'nik_pelapor' => '7203192008',
            'warganegara_pelapor' => 'WNI',

            'nama_saksi1' => 'Hur Minah',
            'nik_saksi1' => '7203192008',
            'warganegara_saksi1' => 'WNI',

            'nama_saksi2' => 'Hur Minah',
            'nik_saksi2' => '7203192008',
            'warganegara_saksi2' => 'WNI',

            'nama_ayah' => 'Ayah',
            'nik_ayah' => '7203192008',
            'tempat_lahir_ayah' => 'Donggala',
            'tanggal_lahir_ayah' => '12-12-2020',
            'warganegara_ayah' => 'WNI',

            'nama_ibu' => 'Ibu',
            'nik_ibu' => '7203192008',
            'tempat_lahir_ibu' => 'Donggala',
            'tanggal_lahir_ibu' => '12-12-2020',
            'warganegara_ibu' => 'WNI',

            // 'nama_bayi' => 'Bayi',
            // 'sex' => '1',
            // 'tempat_dilahirkan' => '2',
            // 'tempatlahir' => 'Donggala',
            // 'hari' => 'Senin',
            // 'tanggallahir' => '12-12-2020',
            // 'waktu_lahir' => '12:00',
            // 'kelahiran_anak_ke' => '1',
            // 'penolong_kelahiran' => '4',
            // 'berat_lahir' => '123',
            // 'panjang_lahir' => '123',

            'nama' => 'Della Maharni Ningsih',
            'nik' => '7203192008',
            'tanggal_lahir_pelapor' => '12-12-2020',
            'jam' => '12:00',
            'sebab' => '1',
            'tanggal_mati' => '12-12-2020',
            'tempat_mati' => 'Donggala',
            'penolong_mati' => '2',

            'no_surat' => '17',
            'nama_pejabat' => 'Mahrup',
            'nama_pelapor' => 'Della Maharni Ningsih',

        ],
    ];
    $html2pdf = new Html2Pdf();
    $content = view('forms.ket_kematian', $data)->render();

    // return $content;
    return $html2pdf->writeHTML($content)->output();
    // return view('forms.ket_kelahiran', $data);
});

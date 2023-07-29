<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Spipu\Html2Pdf\Html2Pdf;

class KelahiranForm extends Component
{
    public $nama_pelapor = '';
    public $nik_pelapor = '';
    public $kk_pelapor = '';
    public $warganegara_pelapor = '';

    public $nama_saksi1 = '';
    public $nik_saksi1 = '';
    public $kk_saksi1 = '';
    public $warganegara_saksi1 = '';

    public $nama_saksi2 = '';
    public $nik_saksi2 = '';
    public $kk_saksi2 = '';
    public $warganegara_saksi2 = '';

    public $nama_ayah = '';
    public $nik_ayah = '';
    public $tempat_lahir_ayah = '';
    public $tanggal_lahir_ayah = '';
    public $warganegara_ayah = '';

    public $nama_ibu = '';
    public $nik_ibu = '';
    public $tempat_lahir_ibu = '';
    public $tanggal_lahir_ibu = '';
    public $warganegara_ibu = '';

    public $nama_bayi = '';
    public $sex = '';
    public $tempat_dilahirkan = '';
    public $tempatlahir = '';
    public $hari = '';
    public $tanggallahir = '';
    public $waktu_lahir = '';
    public $jenis_kelahiran = '';
    public $kelahiran_anak_ke = '';
    public $penolong_kelahiran = '';
    public $berat_lahir = '';
    public $panjang_lahir = '';

    public $no_surat = '17';
    public $nama_pejabat = 'Mahrup';

    public function save()
    {
        $html2pdf = new Html2Pdf();

        $config = [
            'nama_propinsi' => 'Sulawesi Tengah',
            'nama_kabupaten' => 'Donggala',
            'nama_kecamatan' => 'Tanantovea',
            'nama_desa' => 'Wombo Kalonggo',
            'kode_desa'  => '7203192008',
        ];
        $nationalityGeneral = "WNI";
        $input = collect($this->all())->map(function ($value) {
            return strtoupper($value);
        });

        $data = compact('config', 'nationalityGeneral', 'input');

        $content = view('forms.ket_kelahiran', $data)->render();

        return response()->streamDownload(function () use ($html2pdf, $content) {
            $html2pdf->writeHTML($content)->output();
        }, 'Surat Kelahiran.pdf');
    }

    #[Title('Formulir Surat Kelahiran')]
    public function render()
    {
        return view('livewire.kelahiran-form');
    }
}

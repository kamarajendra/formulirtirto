<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Support\Formulir\Text;
use App\Support\Formulir\TextInput;
use App\Support\Formulir\SelectInput;
use App\Support\Formulir\DateInput;
use App\Support\Formulir\DayInput;
use App\Support\Formulir\ClockInput;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


$forms = [
    Storage::path('form1.png') => [
        'A1' => new Text(
            text: 'John Doe Asmawarman',
            x: 370,
            y: 105,
            fontSize: 12
        ),
        'A2' => new Text(
            text: 'Tadika Mesra',
            x: 370,
            y: 124,
            fontSize: 12
        ),
        // Kode Wilayah
        'A3' => new TextInput(x: 369, y: 143, length: 9, text: '1337',),
        // Jenis Pelaporan Pencatatan Sipil
        'B1' => new SelectInput(
            x: 39,
            y: 199,
            width: 20,
            height: 16,
            options: [
                // Baris 1
                [
                    'id' => 'Kelahiran',
                    'y' => 199,
                ],
                [
                    'id' => 'Lahir Mati',
                    'y' => 215,
                ],
                [
                    'id' => 'Perkawinan',
                    'y' => 231,
                ],
                [
                    'id' => 'Pembatalan Perkawinan',
                    'y' => 247,
                ],
                [
                    'id' => 'Perceraian',
                    'y' => 263,
                ],
                [
                    'id' => 'Pembatalan Perceraian',
                    'y' => 279,
                ],
                [
                    'id' => 'Kematian',
                    'y' => 295,
                ],
                [
                    'id' => 'Pengangkatan Anak',
                    'y' => 311,
                ],
                // Baris 2
                [
                    'id' => 'Pengakuan Anak',
                    'x' => 341,
                    'y' => 199,
                ],
                [
                    'id' => 'Pengesahan Anak',
                    'x' => 341,
                    'y' => 215,
                ],
                [
                    'id' => 'Perubahan Nama',
                    'x' => 341,
                    'y' => 231,
                ],
                [
                    'id' => 'Perubahan Status Kewarganegaraan',
                    'x' => 341,
                    'y' => 247,
                ],
                [
                    'id' => 'Pencatatan Peristiwa Penting Lainnya',
                    'x' => 341,
                    'y' => 263,
                ],
                [
                    'id' => 'Pembetulan Akta',
                    'x' => 341,
                    'y' => 279,
                ],
                [
                    'id' => 'Pembatalan Akta',
                    'x' => 341,
                    'y' => 295,
                ],
                [
                    'id' => 'Pelaporan Pencatatan Sipil dari Luar Wilayah',
                    'x' => 341,
                    'y' => 311,
                ],
            ],
            selectedOption: 8
        ),
        /*
        *  [SECTION] DATA PELAPOR
        * */
        // Nama
        'C1' => new TextInput(x: 369, y: 352, length: 26, text: 'John Doe Asmawarman',),
        // NIK
        'C2' => new TextInput(x: 369, y: 370, length: 16, text: '01234567123891',),
        // Nomor Dokumen Perjalanan *
        'C3' => new TextInput(x: 369, y: 388, length: 16, text: '01234567123891',),
        // Nomor Kartu Keluarga
        'C4' => new TextInput(x: 369, y: 406, length: 16, text: '01234567123891',),
        // Kewaganegaraan
        'C5' => new TextInput(x: 369, y: 424, length: 26, text: 'Indonesia',),

        /*
        *  [SECTION] DATA SUBJEK AKTA KESATU
        * */
        // Nama
        'D1' => new TextInput(x: 369, y: 468, length: 26, text: 'John Doe Asmawarman',),
        // NIK
        'D2' => new TextInput(x: 369, y: 486, length: 16, text: '01234567123891',),
        // Nomor Dokumen Perjalanan *
        'D3' => new TextInput(x: 369, y: 504, length: 16, text: '01234567123891',),
        // Nomor Kartu Keluarga
        'D4' => new TextInput(x: 369, y: 522, length: 16, text: '01234567123891',),
        // Kewaganegaraan
        'D5' => new TextInput(x: 369, y: 540, length: 26, text: 'Indonesia'),

        /*
        *  [SECTION] DATA SUBJEK AKTA KEDUA (JIKA ADA)
        * */
        // Nama
        'E1' => new TextInput(x: 369, y: 583, length: 26, text: 'John Doe Asmawarman',),
        // NIK
        'E2' => new TextInput(x: 369, y: 601, length: 16, text: '01234567123891',),
        // Nomor Dokumen Perjalanan *
        'E3' => new TextInput(x: 369, y: 619, length: 16, text: '01234567123891',),
        // Nomor Kartu Keluarga
        'E4' => new TextInput(x: 369, y: 637, length: 16, text: '01234567123891',),
        // Kewaganegaraan
        'E5' => new TextInput(x: 369, y: 655, length: 26, text: 'Indonesia'),

        /*
        *  [SECTION] DATA SAKSI 1
        * */
        // Nama
        'F1' => new TextInput(x: 369, y: 699, length: 26, text: 'John Doe Asmawarman',),
        // NIK
        'F2' => new TextInput(x: 369, y: 717, length: 16, text: '01234567123891',),
        // Nomor Dokumen Perjalanan *
        'F3' => new TextInput(x: 369, y: 735, length: 16, text: '01234567123891',),
        // Nomor Kartu Keluarga
        'F4' => new TextInput(x: 369, y: 753, length: 16, text: '01234567123891',),
        // Kewaganegaraan
        'F5' => new TextInput(x: 369, y: 771, length: 26, text: 'Indonesia'),

        /*
        *  [SECTION] DATA SAKSI 2
        * */
        // Nama
        'G1' => new TextInput(x: 369, y: 815, length: 26, text: 'John Doe Asmawarman',),
        // NIK
        'G2' => new TextInput(x: 369, y: 831, length: 16, text: '01234567123891',),
        // Nomor Dokumen Perjalanan *
        'G3' => new TextInput(x: 369, y: 847, length: 16, text: '01234567123891',),
        // Nomor Kartu Keluarga
        'G4' => new TextInput(x: 369, y: 863, length: 16, text: '01234567123891',),
        // Kewaganegaraan
        'G5' => new TextInput(x: 369, y: 879, length: 26, text: 'Indonesia'),

        /*
        *  DATA ORANG TUA
        * */
        // Nama Ayah
        'H1' => new TextInput(x: 369, y: 920, length: 26, text: 'John Doe Asmawarman',),
        // NIK Ayah
        'H2' => new TextInput(x: 369, y: 938, length: 16, text: '01234567123891',),
        // Tempat Lahir Ayah
        'H3' => new TextInput(x: 369, y: 956, length: 16, text: '01234567123891',),
        // Tanggal Lahir Ayah
        'H4' => new DateInput(x: 369, y: 974, date: Carbon::parse('1970-04-09'),),
        // Kewarganegaraan
        'H5' => new TextInput(x: 369, y: 992, length: 26, text: 'Indonesia',),
        // =====================
        // Nama Ibu
        'H6' => new TextInput(x: 369, y: 1011, length: 16, text: 'John Doe Asmawarman',),
        // NIK Ibu
        'H7' => new TextInput(x: 369, y: 1029, length: 16, text: '01234567123891',),
        // Tempat Lahir Ibu
        'H8' => new TextInput(x: 369, y: 1047, length: 16, text: '01234567123891',),
        // Tanggal Lahir Ibu
        'H9' => new DateInput(x: 369, y: 1065, date: Carbon::parse('1970-04-09'),),
        // Kewarganegaraan
        'H10' => new TextInput(x: 369, y: 1083, length: 26, text: 'Indonesia',),

        /*
        *  DATA ANAK
        * */
        // Nama
        'I1' => new TextInput(x: 369, y: 1126, length: 52, text: 'John Doe Asmawarman Scott Weber',),
        // Jenis Kelamin
        'I2' => new SelectInput(
            x: 369,
            y: 1163,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Laki Laki',
                    'x' => 369,
                ],
                [
                    'id' => '2. Perempuan',
                    'x' => 505,
                ],
            ],
            selectedOption: 0
        ),
        // Tempat Dilahirkan
        'I3' => new SelectInput(
            x: 369,
            y: 1181,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. RS/RB',
                    'x' => 369,
                ],
                [
                    'id' => '2. Puskesmas',
                    'x' => 505,
                ],
                [
                    'id' => '3. Polindes',
                    'x' => 662,
                ],
                [
                    'id' => '4. Rumah',
                    'x' => 798,
                ],
                [
                    'id' => '5. Lainnya',
                    'x' => 888,
                ],
            ],
            selectedOption: 2
        ),
        // Tempat Lahir
        'I4' => new Text(x: 369, y: 1200, text: 'Surabaya', fontSize: 12, kerning: 0.5),
        // Hari dan tanggal lahir
        'I5' => new DayInput(x: 369, y: 1217, length: 16, date: Carbon::parse('1970-04-09'),),
        // Pukul
        'I6' => new Text(x: 369, y: 1235, text: '16:49', fontSize: 12),
        // Jenis Kelahiran
        'I7' => new SelectInput(
            x: 369,
            y: 1253,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Tunggal',
                    'x' => 369,
                ],
                [
                    'id' => '2. Kembar 2',
                    'x' => 482,
                ],
                [
                    'id' => '3. Kembar 3',
                    'x' => 617,
                ],
                [
                    'id' => '4. Kembar 4',
                    'x' => 753,
                ],
                [
                    'id' => '5. Lainnya',
                    'x' => 888,
                ],
            ],
            selectedOption: 1
        ),
        // Kelahiran ke
        'I8' => new Text(x: 369, y: 1272, text: '2', fontSize: 12),
        // Penolong kelahiran
        'I9' => new SelectInput(
            x: 369,
            y: 1289,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Dokter',
                    'x' => 369,
                ],
                [
                    'id' => '2. Bidan/Perawat',
                    'x' => 482,
                ],
                [
                    'id' => '3. Dukun',
                    'x' => 617,
                ],
                [
                    'id' => '4. Lainnya',
                    'x' => 753,
                ],
            ],
            selectedOption: 3
        ),
        // Berat bayi
        'I10' => new Text(x: 372, y: 1308, text: '69', fontSize: 12),
        // Panjang bayi
        'I11' => new Text(x: 372, y: 1326, text: '420', fontSize: 12),

        /*
        *  YANG LAHIR MATI
        * */
        // Lamanya dalam kandungan
        'J1' => new TextInput(x: 369, y: 1392, length: 2, text: '10',),
        // Jenis Kelamin
        'J2' => new SelectInput(
            x: 369,
            y: 1410,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Laki-laki',
                    'x' => 369,
                ],
                [
                    'id' => '2. Perempuan',
                    'x' => 527,
                ],
            ],
            selectedOption: 0
        ),
        // Tanggal Lahir mati
        'J3' => new DateInput(x: 369, y: 1428, date: Carbon::parse('1970-04-09'), monthOffset: 527, yearOffset: 640),
        // Jenis Kelahiran
        'J4' => new SelectInput(
            x: 369,
            y: 1447,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Dokter',
                    'x' => 369,
                ],
                [
                    'id' => '2. Bidan/Perawat',
                    'x' => 482,
                ],
                [
                    'id' => '3. Dukun',
                    'x' => 775,
                ],
                [
                    'id' => '4. Lainnya',
                    'x' => 888,
                ],
            ],
            selectedOption: 3
        ),
        // Anak ke
        'J5' => new Text(x: 369, y: 1466, text: '3', fontSize: 12),
        // Tempat dilahirkan
        'J6' => new SelectInput(
            x: 369,
            y: 1483,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. RS/RB',
                    'x' => 369,
                ],
                [
                    'id' => '2. Puskesmas',
                    'x' => 482,
                ],
                [
                    'id' => '3. Polindes',
                    'x' => 640,
                ],
                [
                    'id' => '4. Rumah',
                    'x' => 775,
                ],
                [
                    'id' => '5. Lainnya',
                    'x' => 888,
                ],
            ],
            selectedOption: 1
        ),
        // Penolong kelahiran
        'J7' => new SelectInput(
            x: 369,
            y: 1501,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Dokter',
                    'x' => 369,
                ],
                [
                    'id' => '2. Bidan/Perawat',
                    'x' => 482,
                ],
                [
                    'id' => '3. Dukun',
                    'x' => 640,
                ],
                [
                    'id' => '4. Lainnya',
                    'x' => 775,
                ],
            ],
            selectedOption: 0
        ),
        // Sebab lahir mati
        'J8' => new Text(x: 369, y: 1521, text: 'Keguguran', fontSize: 12),
    ],
    Storage::path('form2.png') => [
        // NIK Ayah Kandung
        'J9' => new TextInput(x: 369, y: 63, length: 18, text: '          ABCDEFGH'),
        // Kewarganegaraan
        'J10' => new TextInput(x: 369, y: 81, length: 16, text: fake()->country),
        // Nama Ibu ANgkat
        'J11' => new TextInput(x: 369, y: 99, length: 26, text: fake()->name),
        // NIK Ibu Angkat
        'J12' => new TextInput(x: 369, y: 117, length: 18, text: fake()->numerify('##########')),
        // Nomor Passpr
        'J13' => new TextInput(x: 369, y: 135, length: 16, text: fake()->numerify('##########')),
        // Nama ayah angkat
        'J14' => new TextInput(x: 369, y: 154, length: 26, text: fake()->numerify('##########')),
        // Nama ayah angkat
        'J15' => new TextInput(x: 369, y: 172, length: 18, text: fake()->numerify('##########')),
        // NIK Ayah Angkat
        'J16' => new TextInput(x: 369, y: 190, length: 16, text: fake()->numerify('##########')),
        // Nomor Passpor
        'J17' => new TextInput(x: 369, y: 208, length: 19, text: fake()->numerify('##########')),
        // Nama Pengadilan
        'J18' => new DateInput(x: 369, y: 226, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Penetapan Pengadilan Pengadilan
        'J19' => new TextInput(x: 369, y: 245, length: 26, text: fake()->name),
        // Nama lembaga penetapan Pengadilan
        'J20' => new TextInput(x: 369, y: 262, length: 18, text: fake()->name),
        // Tempat lembaga penetapan pengadilan
        'J21' => new TextInput(x: 369, y: 280, length: 16, text: fake()->name),

        /*
        * [SECTION] PENGAKUAN ANAK
        */
        // Nomor Akta Kelahiran
        'K1' => new TextInput(x: 369, y: 314, length: 18, text: fake()->name),
        // Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran
        'K2' => new DateInput(x: 369, y: 332, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Dinas Kab/Kota yang menerbitan Akta Kelahiran
        'K3' => new TextInput(x: 369, y: 350, length: 18, text: fake()->name),
        // Tanggal/Bulan/Tahun Kelahiran Anak
        'K4' => new DateInput(x: 369, y: 369, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tanggal/Bulan/Tahun Perkawinan Agama
        'K5' => new DateInput(x: 369, y: 386, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Ibu Kandung
        'K6' => new TextInput(x: 369, y: 405, length: 26, text: fake()->name),
        // NIK Ibu Kandung
        'K7' => new TextInput(x: 369, y: 423, length: 18, text: fake()->name),
        // Kewarganegaraan Ibu Kandung
        'K8' => new TextInput(x: 369, y: 441, length: 21, text: fake()->name),
        // Nama Ayah Kandung
        'K9' => new TextInput(x: 369, y: 459, length: 26, text: fake()->name),
        // NIK Ayah Kandung
        'K10' => new TextInput(x: 369, y: 477, length: 18, text: fake()->name),
        // Kewarganegaraan Ayah Kandung 
        'K11' => new TextInput(x: 369, y: 495, length: 21, text: fake()->name),
        // Tanggal penetapan Pengadilan
        'K12' => new DateInput(x: 369, y: 514, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Penetepan Pengadilan
        'K13' => new TextInput(x: 369, y: 532, length: 26, text: fake()->name),
        // Nama Lembaga Pengadilan
        'K14' => new TextInput(x: 369, y: 550, length: 18, text: fake()->name),

        /*
        * [SECTION] PENGESAHAN ANAK
        */
        // Nomor Akta Kelahiran
        'L1' => new TextInput(x: 369, y: 584, length: 18, text: fake()->name),
        // Tanggal/Bular/Tahun Penerbitan Akta Kelahiran
        'L2' => new DateInput(x: 369, y: 603, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Dinas Kab/Kota yang menerbitan Akta Kelahiran
        'L3' => new TextInput(x: 369, y: 620, length: 26, text: fake()->name),
        // Tanggal/Bulan/Tahun Kelahiran Anak
        'L4' => new DateInput(x: 369, y: 639, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tanggal/Bulan/Tahun Perkawinan Agama
        'L5' => new DateInput(x: 369, y: 657, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Tanggal Bulan/Tahun/Akta Perkawinan/ 
        // Buku Nikah
        'L6' => new TextInput(x: 369, y: 675, length: 17, text: fake()->name),
        'L7' => new DateInput(x: 369, y: 693, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Ibu Kandung
        'L8' => new TextInput(x: 369, y: 711, length: 26, text: fake()->name),
        // NIX Ibu Kandung
        'L9' => new TextInput(x: 369, y: 729, length: 17, text: fake()->name),
        // Kewarganegaraan Ibu Kandung
        'L10' => new TextInput(x: 369, y: 747, length: 17, text: fake()->name),
        // Nama Ayah Kandung
        'L11' => new TextInput(x: 369, y: 765, length: 26, text: fake()->name),
        // NIK Ayah Kandung
        'L12' => new TextInput(x: 369, y: 784, length: 17, text: fake()->name),
        // Kewarganegaraan Ayah Kandung
        'L13' => new TextInput(x: 369, y: 802, length: 17, text: fake()->name),
        // Tanggal penetapan Pengadilan
        'L13' => new TextInput(x: 369, y: 820, length: 19, text: fake()->name),
        // Nomor Penetapan Pengadilan
        'L15' => new DateInput(x: 369, y: 838, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Lembaga Pengadilan
        'L16' => new TextInput(x: 369, y: 855, length: 22, text: fake()->name),

        /*
         * [SECTION] PERUBAHAN NAMA
         */
        // Nama Lama
        'M1' => new TextInput(x: 369, y: 891, length: 26, text: fake()->name),
        // Nama Baru
        'M2' => new TextInput(x: 369, y: 909, length: 26, text: fake()->name),
        // Nomor Akta Kelahiran 
        'M3' => new TextInput(x: 369, y: 926, length: 17, text: fake()->name),
        // Nama Ayah/lbu/Wal (bagi yang di bawah umur)
        'M4' => new TextInput(x: 369, y: 945, length: 26, text: fake()->name),
        // NIK Nama Ayah/bu/Wali
        'M5' => new TextInput(x: 369, y: 963, length: 17, text: fake()->name),
        // Kewarganegaraan
        'M6' => new TextInput(x: 369, y: 981, length: 26, text: fake()->name),
        // Nomor Penetapan Pengadilan
        'M7' => new TextInput(x: 369, y: 999, length: 17, text: fake()->name),
        // Tanggal Penetpan Pengadilan
        'M8' => new DateInput(x: 369, y: 1017, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama lembaga Pengadilan
        'M9' => new TextInput(x: 369, y: 1035, length: 23, text: fake()->name),

        /*
        * [SECTION] PERUBAHAN STATUS KEWARGANEGARAAN
        */
        // Kewarganegaraan Baru
        'N1' => new TextInput(x: 369, y: 1072, length: 19, text: fake()->name),
        // Nomor Akta Kelahiran
        'N2' => new TextInput(x: 369, y: 1090, length: 18, text: fake()->name),
        // Nomor Akta Perkawinan
        'N3' => new TextInput(x: 369, y: 1108, length: 26, text: fake()->name),
        // Nama Suami atau Istri
        'N4' => new TextInput(x: 369, y: 1126, length: 19, text: fake()->name),
        // NIK Suami atau Istri
        'N5' => new TextInput(x: 369, y: 1144, length: 19, text: fake()->name),
        // Nomor Paspor
        'N6' => new TextInput(x: 369, y: 1162, length: 19, text: fake()->name),
        // Nomor Afidavit
        'N7' => new TextInput(x: 369, y: 1180, length: 18, text: fake()->name),
        // Nomor Keputusan Presiden
        'N8' => new TextInput(x: 369, y: 1198, length: 18, text: fake()->name),
        // Tanggal/Bulan/Tahun
        'N9' => new DateInput(x: 369, y: 1217, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Berita Acara Sumpah/Janji Setia
        'N10' => new TextInput(x: 369, y: 1235, length: 17, text: fake()->name),
        // Nama Jabatan yang menerbitkan BAS/Janji Setia
        'N11' => new TextInput(x: 369, y: 1253, length: 26, text: fake()->name),
        // Tanggal/Bulan/Tahun
        'N12' => new DateInput(x: 369, y: 1289, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Keputusan Menteri (Bidang Kewarganegaraan)
        'N13' => new TextInput(x: 369, y: 1307, length: 17, text: fake()->name),
        // Tanggal/Bulan/Tahun
        'N14' => new DateInput(x: 369, y: 1344, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),

        /*
        * [SECTION] PERUBAHAN PERISTIWA PENTING LAINNYA
        */
        // Nomor Akta Kelahiran
        'O1' => new TextInput(x: 369, y: 1398, length: 17, text: fake()->name),
        // Jenis Kelamin Lama
        'O2' => new SelectInput(
            x: 369,
            y: 1417,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Laki-laki',
                    'x' => 369,
                ],
                [
                    'id' => '2. Perempuan',
                    'x' => 527,
                ],
            ],
            selectedOption: 0
        ),
        // Jenis Kelamin Baru
        'O3' => new SelectInput(
            x: 369,
            y: 1435,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Laki-laki',
                    'x' => 369,
                ],
                [
                    'id' => '2. Perempuan',
                    'x' => 527,
                ],
            ],
            selectedOption: 1
        ),
        // Nomor Penetapan Pengadilan
        'O4' => new TextInput(x: 369, y: 1453, length: 17, text: fake()->name),
        // Tanggal Penetapan Pengadilan
        'O5' => new DateInput(x: 369, y: 1471, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Lembaga Pengadilan
        'O6' => new TextInput(x: 369, y: 1489, length: 17, text: fake()->name),
    ],
    Storage::path('form3.png') => [
        // Yang menentukan
        'O7' => new SelectInput(
            x: 369,
            y: 63,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Dokter',
                    'x' => 369,
                ],
                [
                    'id' => '2. Bidan/Perawat',
                    'x' => 482,
                ],
                [
                    'id' => '3. Tenaga Kes',
                    'x' => 640,
                ],
                [
                    'id' => '4. Kepolisian',
                    'x' => 775,
                ],
                [
                    'id' => '5. Lainnya',
                    'x' => 888,
                ]
            ],
            selectedOption: 4
        ),
        // Tempat kelahiran
        'O8' => new Text(x: 369, y: 84, fontSize: 12, text: fake()->name),

        /*
        * [SECTION] PERKAWINAN ATAU PEMBATALAN PERKAWINAN
        */
        // NIK Ayah dari Suami
        'P1' => new TextInput(x: 369, y: 123, length: 16, text: fake()->name),
        // Nama Ayah dari Suami
        'P2' => new TextInput(x: 369, y: 141, length: 26, text: fake()->name),
        // NIK Ibu dari Suami 
        'P3' => new TextInput(x: 369, y: 159, length: 16, text: fake()->name),
        // Nama Ibu dari Suami
        'P4' => new TextInput(x: 369, y: 177, length: 26, text: fake()->name),
        // NIK Ayah dari Istri
        'P5' => new TextInput(x: 369, y: 195, length: 16, text: fake()->name),
        // Nama Ayah dari Istri
        'P6' => new TextInput(x: 369, y: 213, length: 26, text: fake()->name),
        // NIK ibu dari Istri 
        'P7' => new TextInput(x: 369, y: 231, length: 16, text: fake()->name),
        // Nama ibu dari Istri
        'P8' => new TextInput(x: 369, y: 249, length: 26, text: fake()->name),
        // Status Perkawinan Sebelum Kawin
        'P9' => new SelectInput(
            x: 369,
            y: 268,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => 'Kawin',
                    'x' => 369,
                ],
                [
                    'id' => 'Belum Kawin',
                    'x' => 505,
                ],
                [
                    'id' => 'Cerai Hidup',
                    'x' => 662,
                ],
                [
                    'id' => 'Cerai Mati',
                    'x' => 820,
                ],

            ],
            selectedOption: 1
        ),
        // Perkawinan yang Ke
        'P10' => new TextInput(x: 369, y: 286, length: 1, text: "1"),
        // Istri yang ke (bagi yang poligami)
        'P11' => new TextInput(x: 369, y: 304, length: 1, text: "1"),
        // Tanggal Pemberkatan Perkawinan
        'P12' => new DateInput(x: 369, y: 322, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tanggal Melapor
        'P13' => new DateInput(x: 369, y: 340, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Jam Pelaporan 
        'P14' => new ClockInput(x: 369, y: 358, time: Carbon::parse(fake()->time)),
        // Agama
        'P15' => new SelectInput(
            x: 369,
            y: 376,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Islam',
                    'x' => 369,
                ],
                [
                    'id' => '2. Kristen',
                    'x' => 459,
                ],
                [
                    'id' => '3. Katolik',
                    'x' => 550,
                ],
                [
                    'id' => '4. Hindu',
                    'x' => 640,
                ],
                [
                    'id' => '5. Budha',
                    'x' => 730,
                ],
                [
                    'id' => '6. Konghuchu',
                    'x' => 820,
                ],

            ],
            selectedOption: 0
        ),
        // Kepercayaan 
        'P16' => new TextInput(x: 369, y: 394, length: 1, text: "1"),
        // Nama Organisasi Kepercayaan
        'P17' => new TextInput(x: 369, y: 412, length: 26, text: "1"),
        // Nama Pengadilan
        'P18' => new TextInput(x: 369, y: 430, length: 16, text: "1234567890123456"),
        // Nomor Penetapan Pengadilan
        'P19' => new TextInput(x: 369, y: 448, length: 16, text: "1234567890123456"),
        // Tanggal Penetapan Pengadilan
        'P20' => new DateInput(x: 369, y: 467, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Pemuka Agama/ Kepercayaan
        'P21' => new TextInput(x: 369, y: 485, length: 16, text: "1234567890123456"),
        // Nomor Surat Izin dan Perwakilan
        'P22' => new TextInput(x: 369, y: 503, length: 16, text: "1234567890123456"),
        // Nomor Pasport
        'P23' => new TextInput(x: 369, y: 521, length: 16, text: "1234567890123456"),
        // Perjanjian Perkawinan Dibuat oleh Notaris
        'P24' => new TextInput(x: 369, y: 539, length: 16, text: "1234567890123456"),
        // Nomor Akta Notari 
        'P25' => new TextInput(x: 369, y: 557, length: 16, text: "1234567890123456"),
        // Tanggal Akta Notaris
        'P26' => new TextInput(x: 369, y: 575, length: 16, text: "1234567890123456"),
        // Jumlah Anak (jika ada agar mengisi Formulir tambahan nama anak dan akta kelahiran anak)
        'P27' => new TextInput(x: 369, y: 593, length: 16, text: "1234567890123456"),

        /*
        * [SECTION] Bagi Pemohon Pembatalan Perkawinan Harap Mengisi Data di bawah ini:
        */
        // Tanggal Perkawinan
        'Q1' => new DateInput(x: 369, y: 653, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Akta Perkawinan
        'Q2' => new TextInput(x: 369, y: 672, length: 18, text: "1234567890123456"),
        // Tanggal Akta Perkawinan
        'Q3' => new DateInput(x: 369, y: 690, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Pengadilan
        'Q4' => new TextInput(x: 369, y: 708, length: 18, text: "1234567890123456"),
        // Nomor Putusan Pengadilan
        'Q5' => new TextInput(x: 369, y: 726, length: 18, text: "1234567890123456"),
        // Tanggal Putusan Pengadilan
        'Q6' => new DateInput(x: 369, y: 744, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tanggal Pelaporan Perkawinan di Luar Neger
        'Q7' => new DateInput(x: 369, y: 762, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),

        /*
        * [SECTION] PERCERAIAN ATAU PEMBATALAN PERCERAIAN Yang mengajukan perceraian/pembatalan perceraian ***
        */
        // Nomor akta perkawinan
        'R1' => new TextInput(x: 369, y: 820, length: 18, text: "1234567890123456"),
        // Tanggal Akta Perkawinan
        'R2' => new DateInput(x: 369, y: 838, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tempat Pencatatan perkawinan
        'R3' => new TextInput(x: 369, y: 856, length: 18, text: "1234567890123456"),
        // Nama Pengadilan
        'R4' => new TextInput(x: 369, y: 874, length: 18, text: "1234567890123456"),
        // Tanggal Putusan Pengadilan 
        'R5' => new DateInput(x: 369, y: 892, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nomor Putusan Pengadilan
        'R6' => new TextInput(x: 369, y: 911, length: 18, text: "1234567890123456"),
        // Nomor Surat Keterangan Panitera Pengadilan
        'R7' => new TextInput(x: 369, y: 929, length: 18, text: "1234567890123456"),
        // Tanggal surat Keterangan Panitera Pengadilan
        'R8' => new DateInput(x: 369, y: 947, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tanggal Melapor
        'R9' => new DateInput(x: 369, y: 965, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),

        // Bagi Pemohon Pembatalan Perceraian Harap Mengisi Data di bawah ini:
        // Nomor Akta Perceraian
        'S1' => new TextInput(x: 369, y: 1006, length: 18, text: "1234567890123456"),
        // Tanggal Akta Perceraian 
        'S2' => new DateInput(x: 369, y: 1025, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Tanggal Pelaporan Perceraian dari luar Negeri
        'S3' => new DateInput(x: 369, y: 1043, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),

        /*
        * [SECTION] KEMATIAN
        */
        // NIK
        'T1' => new TextInput(x: 369, y: 1224, length: 18, text: "1234567890123456"),
        // Nama Lengkap
        'T2' => new TextInput(x: 369, y: 1242, length: 26, text: "1234567890123456"),
        // Tanggal kematian
        'T3' => new DateInput(x: 369, y: 1260, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Pukul
        'T4' => new ClockInput(x: 369, y: 1278, time: Carbon::parse(fake()->time)),
        // Sebab Kematian
        'T5' => new SelectInput(
            x: 369,
            y: 1296,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Sakit biasa / tua',
                    'x' => 369,
                ],
                [
                    'id' => '2. Wabah Penyakit',
                    'x' => 572,
                ],
                [
                    'id' => '3. Kecelakaan',
                    'x' => 753,
                ],
                [
                    'id' => '4. Kriminalitas',
                    'x' => 369,
                    'y' => 1314,
                ],
                [
                    'id' => '5. Bunuh Diri',
                    'x' => 572,
                    'y' => 1314,
                ],
                [
                    'id' => '6. Lainnya',
                    'x' => 753,
                    'y' => 1314,
                ],

            ],
            selectedOption: 3
        ),
        // Tempat Kematian
        'T6' => new TextInput(x: 369, y: 1333, length: 18, text: "1234567890123456"),
        // Yang menerangkan
        'T7' => new SelectInput(
            x: 359,
            y: 1352,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Dokter',
                    'x' => 364,
                ],
                [
                    'id' => '2. Tenaga Kesehatan',
                    'x' => 476,
                ],
                [
                    'id' => '3. Kepolisian',
                    'x' => 657,
                ],
                [
                    'id' => '4. Lainnya',
                    'x' => 769,
                ],
            ],
            selectedOption: 3,
            symbol: 'O',
            fontSize: 20
        ),

        /*
        * [SECTION] PENGANGKATAN ANAK
        */
        // Nama anak angkat
        'U1' => new TextInput(x: 369, y: 1385, length: 26, text: "1234567890123456"),
        // Nomor Akta Kelahiran
        'U2' => new TextInput(x: 369, y: 1403, length: 18, text: "1234567890123456"),
        // Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran
        'U3' => new DateInput(x: 369, y: 1422, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Dinas Kab/Kota yang menerbitkan Akta Kelahiran
        'U4' => new TextInput(x: 369, y: 1440, length: 26, text: "1234567890123456"),
        // Nama ibu Kandung
        'U5' => new TextInput(x: 369, y: 1458, length: 26, text: "1234567890123456"),
        // NIK Ibu Kandung
        'U6' => new TextInput(x: 369, y: 1476, length: 18, text: "1234567890123456"),
        // Kewarganegaraan
        'U7' => new TextInput(x: 369, y: 1494, length: 16, text: "1234567890123456"),
        // Nama Ayah
        'U8' => new TextInput(x: 369, y: 1512, length: 26, text: "1234567890123456"),
    ],
    Storage::path('form4.png') => [
        /*
        * [SECTION] PEMBETULAN AKTA
        */
        // Nomor Akta yang akan dibetulkan/ditarik
        'V1' => new TextInput(x: 369, y: 79, length: 18, text: "1234567890123456"),
        // Nama Ayah/lbu/Wall (yang di bawah umur)
        'V2' => new TextInput(x: 369, y: 95, length: 26, text: "1234567890123456"),
        // NIK Ayah/lbu/Wal
        'V3' => new TextInput(x: 369, y: 111, length: 18, text: "1234567890123456"),

        /*
        * [SECTION] PEMBATALAN AKTA
        */
        // Akta yang dibatalkan
        'W1' => new TextInput(x: 369, y: 162, length: 26, text: "1234567890123456"),
        // Nomor akta yang dibatalkan
        'W2' => new TextInput(x: 369, y: 177, length: 26, text: "1234567890123456"),
        // Nomor Putusan Pengadilan
        'W3' => new TextInput(x: 369, y: 194, length: 26, text: "1234567890123456"),
        // Tanggal Putusan Pengadilan
        'W4' => new DateInput(x: 369, y: 210, date: Carbon::parse(fake()->date), monthOffset: 527, yearOffset: 640),
        // Nama Lembaga Pengadilan
        'W5' => new TextInput(x: 369, y: 226, length: 26, text: "1234567890123456"),

        /*
        * [SECTION] PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI
        */
        // Jenis Peristiwa penting
        'X1' => new SelectInput(
            x: 369,
            y: 276,
            width: 20,
            height: 16,
            options: [
                [
                    'id' => '1. Kelahiran',
                    'x' => 369,
                ],
                [
                    'id' => '2. Parkawinan',
                    'x' => 459,
                ],
                [
                    'id' => '3. Perceraian',
                    'x' => 550,
                ],
                [
                    'id' => '4. Kematian',
                    'x' => 640,
                ],
                [
                    'id' => '5. Pengangkatan',
                    'x' => 730,
                ],
                [
                    'id' => '6. Pelapasan Kewarganegaraan RI',
                    'x' => 820,
                ],

            ],
            selectedOption: 0
        ),
        // Nomor Surat Keterangan Pelaporan Pencatatan Sipil dan Perwakilan RI
        'X2' => new TextInput(x: 369, y: 308, length: 52, text: "1234567890123456789101231232131"),
        // Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari Perwakilan RI
        'X3' => new TextInput(x: 369, y: 340, length: 52, text: "1234567890123456123123123123123123"),
        // Kantor Perwakilan yang melakukan pencatatan 
        'X4' => new TextInput(x: 369, y: 372, length: 26, text: "1234567890123456"),
        // Nomor Bukti Pencatatan Sipil dari Negara Setempat
        'X5' => new TextInput(x: 369, y: 389, length: 26, text: "1234567890123456"),
        // Tanggal Penerbitan dari Negara Setempat
        'X6' => new TextInput(x: 369, y: 421, length: 26, text: "1234567890123456"),
    ]
];


Artisan::command('print', function () use ($forms) {
    
})->purpose('Print an image');

<style type="text/css">
	table.disdukcapil {
		width: 100%;
		border: solid 1px #000000;
		/*border-collapse: collapse;*/
	}

	table.disdukcapil td {
		padding: 1px 1px 1px 3px;
		margin: 0px;
	}

	table.disdukcapil td.padat {
		padding: 0px;
		margin: 0px;
	}

	table.disdukcapil td.anggota {
		border-left: solid 1px #000000;
		border-right: solid 1px #000000;
		border-top: dashed 1px #000000;
		border-bottom: dashed 1px #000000;
	}

	table.disdukcapil td.judul {
		border-left: solid 1px #000000;
		border-right: solid 1px #000000;
		border-top: double 1px #000000;
		border-bottom: double 1px #000000;
	}

	table.disdukcapil td.bawah {
		border-bottom: solid 1px #000000;
	}

	table.disdukcapil td.atas {
		border-top: solid 1px #000000;
	}

	table.disdukcapil td.tengah_blank {
		border-left: solid 1px #000000;
		border-right: solid 1px #000000;
	}

	table.disdukcapil td.pinggir_kiri {
		border-left: solid 1px #000000;
	}

	table.disdukcapil td.pinggir_kanan {
		border-right: solid 1px #000000;
	}

	table.disdukcapil td.kotak {
		border: solid 1px #000000;
	}

	table.disdukcapil td.abu {
		background-color: lightgrey;
	}

	table.disdukcapil td.kode {
		background-color: lightgrey;
	}

	table.disdukcapil td.kode div {
		margin: 0px 15px 0px 15px;
		border: solid 1px black;
		background-color: white;
		text-align: center;
	}

	table.disdukcapil td.pakai-padding {
		padding-left: 20px;
		padding-right: 2px;
	}

	table.disdukcapil td.kiri {
		text-align: left;
	}

	table.disdukcapil td.kanan {
		text-align: right;
	}

	table.disdukcapil td.tengah {
		text-align: center;
	}

	table#kop {
		margin-top: -5px;
		margin-bottom: 0px;
		padding: 0px;
		border: 0px;
		border-collapse: collapse;
	}

	table#kop td {
		padding: 0px;
		margin: 0px;
	}

	table#kop tr {
		padding: 0px;
		margin: 0px;
	}

	table#kode {
		padding: 2px 10px;
		border: solid 1px black;
		margin-top: 0px;
		margin-bottom: 0px;
		font-size: 11pt;
	}
</style>
<!-- Variables -->
<?php
function index($var, $i)
{
	if (isset($var[$i])) {
		return $var[$i];
	} else {
		return '';
	}
}
?>
<!-- End Varables -->
<page orientation="portrait" format="215x330" style="font-size: 7pt">
	<table id="kode" align="right">
		<tr>
			<td><strong>F2.01</strong></td>
		</tr>
	</table>

	<table id="kop" class="disdukcapil">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Provinsi</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_propinsi']; ?></td>
		</tr>
		<tr>
			<td colspan="10">Kabupaten/Kota</td>
			<td>:</td>
			<td colspan="7"><?= $config['nama_kabupaten']; ?></td>
		</tr>
		<tr>
			<td colspan="10">Kecamatan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_kecamatan']; ?></td>
		</tr>
		<tr>
			<td colspan="10">Desa/Kelurahan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_desa']; ?></td>
		</tr>
		<tr>
			<td colspan="10">Kode Wilayah</td>
			<td>:</td>
			<?php for ($i = 0; $i < 10; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($config['kode_desa'][$i])) : ?>
						<?= $config['kode_desa'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 48; $i++) : ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>


	<!-- START OF HEADER -->
	<table class="disdukcapil data-subjek-akta-kesatu" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48 align=center style="font-size: 9pt"><strong>FORMULIR PELAPORAN PENCATATAN SIPIL DI DALAM WILAYAH NKRI</strong></td>
		</tr>
		<tr>
			<td colspan=48><strong>Jenis Pelaporan Pencatatan Sipil</strong></td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Kelahiran</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pengakuan Anak</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Lahir Mati</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pengesahan Anak</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Perkawinan</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Perubahan Nama</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pembatalan Perkawinan</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Perubahan Status Kewarganegaraan</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Perceraian</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pencatatan Peristiwa Penting Lainnya</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pembatalan Perceraian</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pembetulan Akta</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					X
				</td>
			<?php endfor; ?>
			<td colspan=15>Kematian</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pembatalan Akta</td>
		</tr>
		<tr>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pengangkatan Anak</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=15>Pelaporan Pencatatan Sipil dari Luar Wilayah</td>
		</tr>
	</table>

	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA PELAPOR</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_pelapor'][$i])) : ?>
						<?= $input['nama_pelapor'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_pelapor'][$i])) : ?>
						<?= $input['nik_pelapor'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Dokumen Perjalanan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_pelapor'][$i])) : ?>
						<?= $input['warganegara_pelapor'][$i]; ?>
					<?php else : ?>
						<?= index($nationalityGeneral, $i) ?>
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-akta-kesatu" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA SUBJEK AKTA KESATU</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Dokumen Perjalanan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-akta-kedua" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA SUBJEK AKTA KEDUA (Jika ADA)</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Dokumen Perjalanan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-saksi-1" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA SAKSI I</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_saksi1'][$i])) : ?>
						<?= $input['nama_saksi1'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi1'][$i])) : ?>
						<?= $input['nik_saksi1'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Dokumen Perjalanan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_saksi1'][$i])) : ?>
						<?= $input['warganegara_saksi1'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-saksi-2" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA SAKSI II</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_saksi2'][$i])) : ?>
						<?= $input['nama_saksi2'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi2'][$i])) : ?>
						<?= $input['nik_saksi2'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Dokumen Perjalanan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_saksi2'][$i])) : ?>
						<?= $input['warganegara_saksi2'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-data-ortu" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA ORANG TUA **(<span style="font-style:italic;">hanya diisi untuk keperluan pencatatan kelahiran, lahir mati dan kematian</span>)</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama Ayah</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ayah'][$i])) : ?>
						<?= $input['nama_ayah'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK Ayah</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])) : ?>
						<?= $input['nik_ayah'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Tempat Lahir Ayah</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])) : ?>
						<?= $input['nik_ayah'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Tanggal Lahir Ayah</td>
			<td>:</td>
			<?php if (!empty($input['tanggal_lahir_ayah'])) :
				$tgl = date('dd', strtotime($input['tanggal_lahir_ayah']));
				$bln = date('mm', strtotime($input['tanggal_lahir_ayah']));
				$thn = date('Y', strtotime($input['tanggal_lahir_ayah']));
			else :
				unset($tgl);
				unset($bln);
				unset($thn);
			endif;
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])) : ?>
						<?= $tgl[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])) : ?>
						<?= $bln[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])) : ?>
						<?= $thn[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan Ayah</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_ayah'][$i])) : ?>
						<?= $input['warganegara_ayah'][$i]; ?>
					<?php else : ?>
						<?= index($nationalityGeneral, $i) ?>
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Nama Ibu</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ibu'][$i])) : ?>
						<?= $input['nama_ibu'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">NIK Ibu</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ibu'][$i])) : ?>
						<?= $input['nik_ibu'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Tempat Lahir Ibu</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])) : ?>
						<?= $input['nik_ayah'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Tanggal Lahir Ibu</td>
			<td>:</td>
			<?php if (!empty($input['tanggal_lahir_ayah'])) :
				$tgl = date('dd', strtotime($input['tanggal_lahir_ayah']));
				$bln = date('mm', strtotime($input['tanggal_lahir_ayah']));
				$thn = date('Y', strtotime($input['tanggal_lahir_ayah']));
			else :
				unset($tgl);
				unset($bln);
				unset($thn);
			endif;
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])) : ?>
						<?= $tgl[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])) : ?>
						<?= $bln[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])) : ?>
						<?= $thn[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">Kewarganegaraan Ibu</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_ibu'][$i])) : ?>
						<?= $input['warganegara_ibu'][$i]; ?>
					<?php else : ?>
						<?= index($nationalityGeneral, $i) ?>
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-data-anak" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>DATA ANAK</strong></td>
		</tr>
		<tr>
			<td colspan="16">Nama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Jenis Kelamin </td>
			<td>:</td>
			<td class="kotak padat tengah">
			</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">Tempat Dilahirkan </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. RS/SB</td>
			<td colspan=6>2. Puskesmas </td>
			<td colspan=6>3. Polindes</td>
			<td colspan=5>4. Rumah </td>
			<td colspan=7>5. Lainnya &nbsp; </td>
		</tr>
		<tr>
			<td colspan="16">Tempat Kelahiran </td>
			<td>:</td>
			<td colspan="23" class="kotak">&nbsp;</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">Hari dan Tanggal Lahir </td>
			<td>:</td>
			<td colspan="3">Hari : </td>
			<td colspan=4 class="kotak">&nbsp;</td>
			<td colspan="4" class="kanan">Tgl : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Pukul </td>
			<td>:</td>
			<?php for ($i = 0; $i < 4; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">Jenis Kelahiran </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Tunggal</td>
			<td colspan=6>2. Kembar 2 </td>
			<td colspan=6>3. Kembar 3 </td>
			<td colspan=5>4. Kembar 4 </td>
			<td colspan=4>5. Lainnya </td>
		</tr>
		<tr>
			<td colspan="16">Kelahiran ke </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">Penolong Kelahiran </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=6>2. Bidan/Perawat </td>
			<td colspan=6>3. Dukun </td>
			<td colspan=5>4. Lainnya </td>
		</tr>
		<tr>
			<td colspan="16">Berat Bayi</td>
			<td>:</td>
			<td colspan="2" class="kotak">&nbsp;</td>
			<td> kg</td>
		</tr>
		<tr>
			<td colspan="16">Panjang Bayi</td>
			<td>:</td>
			<td colspan="2" class="kotak">&nbsp;</td>
			<td> cm</td>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-lahir-mati" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>YANG LAHIR MATI</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;Lamanya dalam kandungan</td>
			<td>:</td>
			<td colspan=4 class="kotak">&nbsp;</td>
			<td colspan="3">Bulan</td>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;Jenis Kelamin </td>
			<td>:</td>
			<td class="kotak padat tengah">
				&nbsp;
			</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;Tanggal Lahir Mati</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_lahir_pelapor']));
			$bln = date('mm', strtotime($input['tanggal_lahir_pelapor']));
			$thn = date('Y', strtotime($input['tanggal_lahir_pelapor']));
			?>
			<td colspan="4">Tgl :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;Jenis Kelahiran </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Tunggal</td>
			<td colspan=6>2. Kembar 2 </td>
			<td colspan=6>3. Kembar 3 </td>
			<td colspan=5>4. Kembar 4 </td>
			<td colspan=7>5. Lainnya &nbsp; </td>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;Anak Ke </td>
			<td>:</td>
			<td colspan="1" class="kotak">&nbsp;</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;Tempat Dilahirkan </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. RS/SB</td>
			<td colspan=6>2. Puskesmas </td>
			<td colspan=6>3. Polindes</td>
			<td colspan=5>4. Rumah </td>
			<td colspan=7>5. Lainnya &nbsp; </td>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;Penolong Kelahiran </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=6>2. Bidan/Perawat </td>
			<td colspan=6>3. Dukun </td>
			<td colspan=5>4. Lainnya </td>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;Sebab Lahir Mati</td>
			<td>:</td>
			<td colspan="23" class="kotak">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;Yang menentukan </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=6>2. Bidan/Perawat </td>
			<td colspan=6>3. Tenaga Kes </td>
			<td colspan=5>4. Kepolisian</td>
			<td colspan=5>5. Lainnya </td>
		</tr>
		<tr>
			<td colspan="16">10. &nbsp;Tempat Kelahiran</td>
			<td>:</td>
			<td colspan="23" class="kotak">&nbsp;</td>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-data-perkawinan" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PERKAWINAN ATAU PEMBATALAN PERKAWINAN</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;NIK Ayah dari Suami</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;Nama Ayah dari Suami</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;NIK Ibu dari Suami</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;Nama Ibu dari Suami</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;NIK Ayah dari Istri</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;Nama Ayah dari Istri</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;NIK Ibu dari Istri</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;Nama Ibu dari Istri</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;Status Perkawinan Sebelum Kawin</td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=4>Kawin</td>
			<td colspan=6>Belum Kawin</td>
			<td colspan=6>Cerai Hidup</td>
			<td colspan=5>Cerai Mati</td>
		</tr>
		<tr>
			<td colspan="16">10. &nbsp;Perkawinan yang Ke-</td>
			<td>:</td>
			<td colspan="1" class="kotak">&nbsp;</td>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">11. &nbsp;Istri yang ke (bagi yang poligami)</td>
			<td>:</td>
			<td colspan="1" class="kotak">&nbsp;</td>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">12. &nbsp;Tanggal Pemberkatan Perkawinan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">13. &nbsp;Tanggal Melapor</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">14. &nbsp;Jam Pelaporan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 5; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">15. &nbsp;Agama </td>
			<td>:</td>
			<td colspan=4>1. Islam</td>
			<td colspan=6>2. Kristen </td>
			<td colspan=5>3. Katolik </td>
			<td colspan=5>4. Hindu </td>
			<td colspan=5>5. Budha </td>
			<td colspan=5>6. Lainnya </td>
		</tr>
		<tr>
			<td colspan="16">16. &nbsp;Kepercayaan</td>
			<td>:</td>
			<td colspan="1" class="kotak"> &nbsp;</td>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16">17. &nbsp;Nama Organisasi Kepercayaan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">18. &nbsp;Nama Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">19. &nbsp;Nomor Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">20. &nbsp;Tanggal Penetapan Pengadilan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">21. &nbsp;Nama Pemuka Agama/ Kepercayaan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">22. &nbsp;Nomor Surat Izin dari Perwakilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">23. &nbsp;Nomor Pasport</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">24. &nbsp;Perjanjian Perkawinan Dibuat oleh Notaris</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">25. &nbsp;Nomor Akta Notari</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">26. &nbsp;Tanggal Akta Notaris</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">27. &nbsp;Jumlah Anak (jika ada agar mengisi Formulir</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tambahan nama anak dan akta kelahiran anak)</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan=48><strong>Bagi Pemohon Pembatalan Perceraian Harap Mengisi Data di bawah ini:</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Tanggal Perkawinan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nomor Akta Perkawinan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Tanggal Akta Perkawinan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Nama Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Nomor Putusan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Tanggal Putusan Pengadilan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Tanggal Pelaporan Perkawinan di Luar Negeri</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PERCERAIAN ATAU PEMBATALAN PERCERAIAN</strong></td>
		</tr>
		<tr>
			<td colspan=48><strong>Yang mengajukan perceraian/pembatalan perceraian ***</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nomor akta perkawinan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Tanggal Akta Perkawinan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Tempat Pencatatan Perkawinan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Nama Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Tanggal Putusan Pengadilan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Nomor Putusan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Nomor Surat Keterangan Panitera Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;&nbsp;Tanggal Surat Keterangan Panitera Pengadilan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;&nbsp;Tanggal Melapor</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan=48><strong>Bagi Pemohon Pembatalan Perceraian Harap Mengisi Data di bawah ini:</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nomor Akta Perkawinan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Tanggal Akta Perkawinan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Tanggal Pelaporan Perceraian dari Luar Negeri</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-data-kematian" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>KEMATIAN</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik'][$i])) : ?>
						<?= $input['nik'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama'][$i])) : ?>
						<?= $input['nama'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Tanggal Kematian </td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])) : ?>
						<?= $tgl[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])) : ?>
						<?= $bln[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])) : ?>
						<?= $thn[$j]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Pukul </td>
			<td>:</td>
			<?php for ($i = 0; $i < 5; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['jam'][$i])) : ?>
						<?= $input['jam'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Sebab Kematian </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['sebab'][$i])) : ?>
						<?= $input['sebab'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=6>1. Sakit biasa / tua</td>
			<td colspan=6>2. Wabah Penyakit </td>
			<td colspan=6>3. Kecelakaan </td>
		</tr>
		<tr>
			<td colspan="18">&nbsp;</td>
			<td colspan=6>4. Kriminalitas </td>
			<td colspan=6>5. Bunuh Diri </td>
			<td colspan=6>6. Lainnya </td>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Tempat Kematian </td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_mati'][$i])) : ?>
						<?= $input['tempat_mati'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Yang menerangkan </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['penolong_mati'][$i])) : ?>
						<?= $input['penolong_mati'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=8>2. Tenaga Kesehatan </td>
			<td colspan=6>3. Kepolisian </td>
			<td colspan=5>4. Lainnya </td>
		</tr>
	</table>


	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PENGANGKATAN ANAK</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nama Anak Angkat</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nomor Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran </td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Dinas Kab/Kota yang menerbitkan Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Nama Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;NIK Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Kewarganegaraan Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;&nbsp;Nama Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;&nbsp;NIK Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">10. &nbsp;&nbsp;Kewarganegaraan Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">11. &nbsp;&nbsp;Nama Ibu Angkat</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">12. &nbsp;&nbsp;NIK Ibu Angkat</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">13. &nbsp;&nbsp;Nomor Paspor</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">14. &nbsp;&nbsp;Nama Ayah Angkat</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">15. &nbsp;&nbsp;NIK Ayah Angkat</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">16. &nbsp;&nbsp;Nomor Paspor</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">17. &nbsp;&nbsp;Nama Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">18. &nbsp;&nbsp;Tanggal Penetapan Pengadilan</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">19. &nbsp;&nbsp;Nomor Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">20. &nbsp;&nbsp;Nama Lembaga Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">21. &nbsp;&nbsp;Tempat Lembaga Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PENGAKUAN ANAK</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nomor Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran </td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Dinas Kab/Kota yang menerbitkan Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Tanggal/Bulan/Tahun Kelahiran Anak</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Tanggal/Bulan/Tahun Perkawinan Agama</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>			
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Nama Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;NIK Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;&nbsp;Kewarganegaraan Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;&nbsp;Nama Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">10. &nbsp;&nbsp;NIK Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">11. &nbsp;&nbsp;Kewarganegaraan Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">12. &nbsp;&nbsp;Tanggal Penetapan Pengadilan</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">13. &nbsp;&nbsp;Nomor Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">14. &nbsp;&nbsp;Nama Lembaga Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PENGESAHAN ANAK</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nomor Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Tanggal/Bulan/Tahun Penerbitan Akta Kelahiran </td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Dinas Kab/Kota yang menerbitkan Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Tanggal/Bulan/Tahun Kelahiran Anak</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Tanggal/Bulan/Tahun Perkawinan Agama</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Dinas Kab/Kota yang menerbitkan Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 17; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buku Nikah</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Nama Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;&nbsp;NIK Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;&nbsp;Kewarganegaraan Ibu Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">10. &nbsp;&nbsp;Nama Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">11. &nbsp;&nbsp;NIK Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">12. &nbsp;&nbsp;Kewarganegaraan Ayah Kandung</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">13. &nbsp;&nbsp;Tanggal Penetapan Pengadilan</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">14. &nbsp;&nbsp;Nomor Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">15. &nbsp;&nbsp;Nama Lembaga Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- START OF PERUBAHAN NAMA -->
	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PERUBAHAN NAMA</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nama Lama</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nama Baru</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp; Nomor akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Nama Ayah/Ibu/Wali (bbagi yang di bawah umur)</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;NIK Nama Ayah/Ibu/Wali</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Kewarganegaraan Ayah/Ibu/Wali</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Nomor Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;&nbsp;Tanggal Penetapan Pengadilan</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;&nbsp;Nama Lembaga Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 22; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- START OF PERUBAHAN STATUS KEWARGANEGARAAN -->
	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PERUBAHAN STATUS KEWARGANEGARAAN</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Kewarganegaraan Baru</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nomor Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Nomor Akta Perkawinan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Nama Suami atau Istri</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;NIK Suami atau Istri</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Nomor Paspor</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">7. &nbsp;&nbsp;Nomor Afidavit</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">8. &nbsp;&nbsp;Nomor Keputusan Presiden</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">9. &nbsp;&nbsp;Tanggal/Bulan/Tahun</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">10. &nbsp;&nbsp;Nomor Berita Acara Sumpah/Janji Setia</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">11. &nbsp;&nbsp;Nama Jabatan yang menertibkan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAS/Janji Setia</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="16">12. &nbsp;&nbsp;Tanggal/Bulan/Tahun</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">13. &nbsp;&nbsp;Nomor Keputusan Mentri (Bidang</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan)</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="16">14. &nbsp;&nbsp;Tanggal/Bulan/Tahun</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- START OF PERUBAHAN PERISTIWA PENTING LAINNYA -->
	<table class="disdukcapil data-pelapor" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PERUBAHAN PERISTIWA PENTING LAINNYA</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nomor Akta Kelahiran</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Jenis Kelamin Lama</td>
			<td>:</td>
			<td class="kotak padat tengah">
				&nbsp;
			</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Jenis Kelamin Baru</td>
			<td>:</td>
			<td class="kotak padat tengah">
				&nbsp;
			</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Nomor Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 19; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Tanggal Penetapan Pengadilan</td>
			<td>:</td>
			<?php $tgl = date('dd', strtotime($input['tanggal_mati']));
			$bln = date('mm', strtotime($input['tanggal_mati']));
			$thn = date('Y', strtotime($input['tanggal_mati']));
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Nama Lembaga Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- START OF PEMBETULAN AKTA -->
	<table class="disdukcapil data-subjek-akta-kesatu" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PEMBETULAN AKTA</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Nomor Akta yang akan dibetulkan/ditarik</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nama Ayah/Ibu/Wali (yang dibawah umur)</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;NIK Ayah/Ibu/Wali</td>
			<td>:</td>
			<?php for ($i = 0; $i < 18; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- START OF PEMBATALAN AKTA -->
	<table class="disdukcapil data-subjek-akta-kesatu" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PEMBATALAN AKTA</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Akta yang dibatalkan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nomor akta yang dibatalkan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Nomor Putusan Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Tanggal Putusan Pengadilan</td>
			<td>:</td>
			<td colspan="4">Tanggal :</td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j = 0; $j < 2; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j = 0; $j < 4; $j++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Nama Lembaga Pengadilan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>
	<!-- START OF PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI -->
	<table class="disdukcapil data-subjek-akta-kesatu" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI</strong></td>
		</tr>
		<tr>
			<td colspan="16">1. &nbsp;&nbsp;Jenis Peristiwa Penting </td>
			<td>:</td>
			<?php for ($i = 0; $i < 1; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan=7>1. Kelahiran</td>
			<td colspan=7>2. Perkawinan</td>
			<td colspan=7>3. Perceraian</td>
			<td colspan=7>4. Kematian</td>
		</tr>
		<tr>
			<td colspan="18">&nbsp;</td>
			<td colspan=7>5. Pengangkatan Anak </td>
			<td colspan=10>6. Pelepasan Kewarganegaraan RI </td>
		</tr>
		<tr>
			<td colspan="16">2. &nbsp;&nbsp;Nomor Surat Keterangan Pelaporan Pencatatan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sipil dari Perwakilan RI</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">3. &nbsp;&nbsp;Tanggal Surat Keterangan Pelaporan Pencatatan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sipil dari Perwakilan RI</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">4. &nbsp;&nbsp;Kantor Perwakilan yang melakukan pencatatan</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">5. &nbsp;&nbsp;Nomor Bukti Pencatatan Sipil</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dari Negara Setempat</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="16">6. &nbsp;&nbsp;Tanggal Penerbitan dari Negara Setempat</td>
			<td>:</td>
			<?php for ($i = 0; $i < 26; $i++) : ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<table class="disdukcapil data-subjek-ttd" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="48">No. Reg : <?= $input['no_surat']; ?></td>
		</tr>
		<tr>
			<td colspan="20" style="text-align:center"><strong>Mengetahui : </strong></td>
			<td colspan="28" style="text-align:center">&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td colspan="20" style="text-align:center"><strong>Pejabat Dukcapil yang membidangi / Kepala Desa / Lurah</strong></td>
			<td colspan="28" style="text-align:center"><strong>&nbsp;&nbsp;<?= $config['nama_desa']; ?>, <?= now()->locale('id')->translatedFormat('d F Y'); ?></strong></td>
		</tr>
		<tr>
			<td colspan="12"><strong>&nbsp;</strong></td>
		</tr>
		<tr>
			<td colspan="12"><strong>&nbsp;</strong></td>
		</tr>
		<tr>
			<td colspan="12"><strong>&nbsp;</strong></td>
		</tr>
		<tr colspan="12">
			<td colspan="20" style="text-align:center">&nbsp;&nbsp;( <?= $input['nama_pejabat']; ?>)</td>
			<td colspan="28" style="text-align:center">(&nbsp;<?= $input['nama_pelapor']; ?>&nbsp;)</td>
		</tr>
	</table>
</page>
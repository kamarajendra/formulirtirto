<div class="w-full p-8 mx-auto max-w-7xl">
    <div class="text-2xl font-bold">
        FORMULIR PELAPORAN KELAHIRAN
    </div>
    <form class="grid w-full gap-4" wire:submit="save">
        <h3 class="pt-6 text-lg font-bold text-red-700">DATA ANAK</h3>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nama
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nama_bayi">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Jenis Kelamin
            </label>
            <select class="flex-1 w-full" wire:model="sex">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="1">1. Laki-laki</option>
                <option value="2">2. Perempuan</option>
            </select>
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Tempat Dilahirkan
            </label>
            <input type="text" class="flex-1 w-full" wire:model="tempat_dilahirkan">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Tempat Kelahiran
            </label>
            <input type="text" class="flex-1 w-full" wire:model="tempatlahir">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Hari dan Tanggal Lahir
            </label>
            <input type="date" class="flex-1 w-full" wire:model="tanggallahir">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Pukul
            </label>
            <input type="time" class="flex-1 w-full" wire:model="waktu_lahir">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Kelahiran ke
            </label>
            <input type="number" class="flex-1 w-full" wire:model="kelahiran_anak_ke">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Penolong Kelahiran
            </label>
            <select class="flex-1 w-full" wire:model="penolong_kelahiran">
                <option value="">Pilih Penolong Kelahiran</option>
                <option value="1">1. Dokter</option>
                <option value="2">2. Bidan/Perawan</option>
                <option value="3">3. Dukun</option>
                <option value="4">4. Lainnya</option>
            </select>
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Berat Bayi
            </label>
            <input type="number" class="flex-1 w-full" wire:model="berat_lahir">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Panjang Bayi
            </label>
            <input type="number" class="flex-1 w-full" wire:model="panjang_lahir">
        </div>

        <h3 class="pt-6 text-lg font-bold text-red-700">DATA AYAH</h3>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nama Ayah
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nama_ayah">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                NIK Ayah
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nik_ayah">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Tempat Lahir Ayah
            </label>
            <input type="text" class="flex-1 w-full" wire:model="tempat_lahir_ayah">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Tanggal Lahir Ayah
            </label>
            <input type="date" class="flex-1 w-full" wire:model="tanggal_lahir_ayah">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Kewarganegaraan Ayah
            </label>
            <input type="text" class="flex-1 w-full" wire:model="warganegara_ayah">
        </div>

        <div class="pt-4"></div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nama Ibu
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nama_ibu">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                NIK Ibu
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nik_ibu">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Tempat Lahir Ibu
            </label>
            <input type="text" class="flex-1 w-full" wire:model="tempat_lahir_ibu">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Tanggal Lahir Ibu
            </label>
            <input type="date" class="flex-1 w-full" wire:model="tanggal_lahir_ibu">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Kewarganegaraan Ibu
            </label>
            <input type="text" class="flex-1 w-full" wire:model="warganegara_ibu">
        </div>

        <h3 class="pt-6 text-lg font-bold text-red-700">PELAPOR</h3>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nama
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nama_pelapor">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                NIK
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nik_pelapor">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nomor Kartu Keluarga
            </label>
            <input type="text" class="flex-1 w-full" wire:model="kk_pelapor">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Kewarganegaraan
            </label>
            <input type="text" class="flex-1 w-full" wire:model="warganegara_pelapor">
        </div>

        <h3 class="pt-6 text-lg font-bold text-red-700">DATA SAKSI 1</h3>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nama
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nama_saksi1">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                NIK
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nik_saksi1">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nomor Kartu Keluarga
            </label>
            <input type="text" class="flex-1 w-full" wire:model="kk_saksi1">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Kewarganegaraan
            </label>
            <input type="text" class="flex-1 w-full" wire:model="warganegara_saksi1">
        </div>

        <h3 class="pt-6 text-lg font-bold text-red-700">DATA SAKSI 2</h3>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nama
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nama_saksi2">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                NIK
            </label>
            <input type="text" class="flex-1 w-full" wire:model="nik_saksi2">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Nomor Kartu Keluarga
            </label>
            <input type="text" class="flex-1 w-full" wire:model="kk_saksi2">
        </div>
        <div class="flex gap-4">
            <label class="block w-1/3 pt-2 font-semibold">
                Kewarganegaraan
            </label>
            <input type="text" class="flex-1 w-full" wire:model="warganegara_saksi2">
        </div>

        <div class="flex justify-end w-full pt-8">
            <button type="submit" class="flex items-center self-end h-10 px-6 text-white bg-blue-600 rounded-md disabled:bg-opacity-60" wire:loading.attr="disabled">
                <div wire:loading>
                    <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
                Print
            </button>
        </div>
    </form>
</div>
<div class="w-full md:w-4/12 space-y-6">
    <div class="p-4 sm:p-8 bg-white shadow-sm rounded-lg ring-1 ring-gray-200">
        <div class="max-w-xl">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Tambah Data Pegawai') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                </p>
            </header>

            <form action="{{ route('pegawai.store') }}" class="mt-4" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="kode_pegawai" class="block mb-2 text-sm font-medium text-gray-900">Kode Pegawai</label>
                        <input type="number" name="kode_pegawai" id="kode_pegawai" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Kode pegawai" required="" pattern="[0-9]{1,12}" max="999999999999">
                    </div>
                    <div class="w-full">
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama lengkap" required="">
                    </div>
                    <div class="w-full">
                        <label for="nick_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Panggilan</label>
                        <input type="text" name="nick_name" id="nick_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama panggilan" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Posisi</label>
                        <select id="jabatan" name="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option selected>Pilih</option>
                            @foreach ($jabatan as $jb)
                            <option value="{{ $jb->id }}">
                                {{ $jb->nama_jabatan }}
                            </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="w-full">
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
                        <input
                            type="tel"
                            id="no_telp"
                            name="no_telp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan nomor telepon"
                            required
                            pattern="[0-9]{10,13}"
                            title="Nomor telepon harus terdiri dari 10 hingga 13 digit">
                    </div>

                    <div class="relative max-w-sm">
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <div class="absolute inset-y-0 start-0 top-7 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="tgl_lahir" id="datepicker-format" datepicker datepicker-format="yyyy-mm-dd" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan alamat lengkap"
                            required></textarea>
                    </div>
                </div>
                <div class="flex items-center">
                    <button type="submit" class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Submit
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
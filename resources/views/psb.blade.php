<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            PENERIMAAN SANTRI BARU
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Penerimaan Santri Baru
        </p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4 relative" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('img/ornamen4.png') }}"
            class="absolute top-15 left-15 transform -translate-x-1/2 -translate-y-1/2" alt="">
        <img src="{{ asset('img/ornamen2.png') }}"
            class="absolute bottom-0 right-15 transform -translate-x-1/2 -translate-y-1/2" alt="">
        <div class="w-full px-4 py-10">
            <div class="bg-sky-500/10 shadow-md rounded-lg p-6 mb-4">
                <h3 class="text-xl font-semibold text-center mb-4">Informasi Penerimaan Santri Baru</h3>
                <div class="mb-4">
                    <h4 class="font-semibold text-primary mb-2">Waktu Pendaftaran</h4>
                    <ul class="list-disc list-inside text-gray-700">
                        <li><span class="font-medium">Gelombang ke 1:</span> 1 Oktober 2024 – 22 November 2024</li>
                        <li><span class="font-medium">Gelombang ke 2:</span> 24 November 2024 – 24 Januari 2025</li>
                        <li><span class="font-medium">Gelombang ke 3:</span> 26 Januari 2025 – 25 April 2025</li>
                        <li><span class="font-medium">Gelombang ke 4:</span> 27 April 2025 – 6 Juni 2025</li>
                    </ul>
                    <p class="text-sm text-red-600 mt-2">*Pendaftaran akan ditutup sewaktu-waktu apabila kuota sudah
                        terpenuhi</p>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold text-primary mb-2">Kuota Penerimaan Santri</h4>
                    <ul class="list-disc list-inside text-gray-700">
                        <li><span class="font-medium">SMP:</span> 70 orang</li>
                        <li><span class="font-medium">SMA:</span> 30 orang</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-primary mb-2">Materi Tes</h4>
                    <ol class="list-decimal list-inside text-gray-700 space-y-1">
                        <li>Membaca al Qur’an</li>
                        <li>PAI</li>
                        <li>Matematika</li>
                        <li>Wawancara Orang Tua dan Calon Santri</li>
                        <li>Tahfidz al Qur’an bagi calon penerima beasiswa</li>
                    </ol>
                </div>
            </div>
        </div>


        <div class="w-full px-4" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-white shadow rounded-lg p-6 mb-8">
                <h3 class="text-lg font-bold mb-4 text-primary text-center">Alur Pendaftaran Santri Baru</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Online Registration Flow -->
                    <div>
                        <h4 class="font-semibold text-sky-700 mb-4 flex items-center gap-2">
                            <span class="inline-block align-middle">
                                <!-- Globe Icon -->
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" />
                                    <ellipse cx="12" cy="12" rx="6" ry="10"
                                        stroke="currentColor" />
                                    <line x1="2" y1="12" x2="22" y2="12"
                                        stroke="currentColor" />
                                </svg>
                            </span>
                            Pendaftaran <span class="text-primary">Online</span>
                        </h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <!-- Mouse Pointer Click Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 9l10.5 10.5M9 9V3m0 6H3m6 0l7.5 7.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>Kunjungi website resmi kami dan klik menu <a
                                        href="https://bit.ly/PPDB_PMKHALIFAH_TP2025-2026"
                                        class="text-sky-500 hover:underline">Pendaftaran Online</a>.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Document Text Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="4" y="4" width="16" height="16" rx="2"
                                        stroke="currentColor" />
                                    <line x1="8" y1="8" x2="16" y2="8"
                                        stroke="currentColor" />
                                    <line x1="8" y1="12" x2="16" y2="12"
                                        stroke="currentColor" />
                                    <line x1="8" y1="16" x2="12" y2="16"
                                        stroke="currentColor" />
                                </svg>
                                <span>Isi formulir pendaftaran dengan data yang lengkap dan benar.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Upload Cloud Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M16 16v-4a4 4 0 00-8 0v4" stroke-linecap="round" stroke-linejoin="round" />
                                    <polyline points="12 12 12 21 9 18" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <polyline points="15 18 12 21 9 18" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>Unggah dokumen persyaratan yang diminta (scan KK, Akta, dll).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Credit Card Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="2" y="6" width="20" height="12" rx="2"
                                        stroke="currentColor" />
                                    <line x1="2" y1="10" x2="22" y2="10"
                                        stroke="currentColor" />
                                </svg>
                                <span>Lakukan pembayaran biaya pendaftaran sesuai petunjuk.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Check Circle Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" />
                                    <path d="M9 12l2 2l4-4" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>Konfirmasi pembayaran melalui sistem atau kontak yang tersedia.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Mail Open Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="3" y="8" width="18" height="13" rx="2"
                                        stroke="currentColor" />
                                    <polyline points="3 8 12 3 21 8" stroke="currentColor" />
                                    <line x1="3" y1="8" x2="12" y2="13"
                                        stroke="currentColor" />
                                    <line x1="21" y1="8" x2="12" y2="13"
                                        stroke="currentColor" />
                                </svg>
                                <span>Tunggu verifikasi dari panitia. Informasi hasil seleksi akan diumumkan melalui
                                    website atau email.</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Offline Registration Flow -->
                    <div>
                        <h4 class="font-semibold text-sky-700 mb-4 flex items-center gap-2">
                            <span class="inline-block align-middle">
                                <!-- Building Icon -->
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="3" y="7" width="18" height="13" rx="2"
                                        stroke="currentColor" />
                                    <rect x="7" y="11" width="2" height="2" stroke="currentColor" />
                                    <rect x="15" y="11" width="2" height="2" stroke="currentColor" />
                                    <rect x="11" y="15" width="2" height="2" stroke="currentColor" />
                                </svg>
                            </span>
                            Pendaftaran <span class="text-primary">Offline</span>
                        </h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <!-- Map Pin Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 21s-6-5.686-6-10a6 6 0 1112 0c0 4.314-6 10-6 10z"
                                        stroke="currentColor" />
                                    <circle cx="12" cy="11" r="2" stroke="currentColor" />
                                </svg>
                                <span>Datang langsung ke kantor pendaftaran di lokasi pondok pesantren.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Clipboard List Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="7" y="4" width="10" height="16" rx="2"
                                        stroke="currentColor" />
                                    <line x1="9" y1="8" x2="15" y2="8"
                                        stroke="currentColor" />
                                    <line x1="9" y1="12" x2="15" y2="12"
                                        stroke="currentColor" />
                                    <line x1="9" y1="16" x2="13" y2="16"
                                        stroke="currentColor" />
                                </svg>
                                <span>Ambil dan isi formulir pendaftaran yang disediakan oleh panitia.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Folder Open Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M3 7h5l2 3h11v9a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" stroke="currentColor" />
                                </svg>
                                <span>Serahkan dokumen persyaratan (fotokopi KK, Akta, dll) kepada panitia.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Cash Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="2" y="7" width="20" height="10" rx="2"
                                        stroke="currentColor" />
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" />
                                </svg>
                                <span>Lakukan pembayaran biaya pendaftaran di tempat.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Shield Check Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 3l7 4v5c0 5.25-3.5 9.74-7 11-3.5-1.26-7-5.75-7-11V7l7-4z"
                                        stroke="currentColor" />
                                    <path d="M9 12l2 2l4-4" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>Panitia akan melakukan verifikasi data dan dokumen.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <!-- Phone Call Icon -->
                                <svg class="w-6 h-6 text-sky-500 mt-1" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M22 16.92V21a2 2 0 01-2.18 2A19.72 19.72 0 013 5.18 2 2 0 015 3h4.09a2 2 0 012 1.72c.13 1.13.37 2.23.72 3.28a2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006.29 6.29l1.27-1.27a2 2 0 012.11-.45c1.05.35 2.15.59 3.28.72a2 2 0 011.72 2z"
                                        stroke="currentColor" />
                                </svg>
                                <span>Informasi hasil seleksi akan diberikan secara langsung atau melalui kontak
                                    yang didaftarkan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        {{-- standar mutu --}}
        {{-- <div class="w-full md:w-1/4 px-4">
            <x-text-header>Category</x-text-header>
            <div x-data @notify.window="alert($event.detail.message)">
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Akademik & Bahasa' })">
                Akademik & Bahasa
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Teknologi & Keterampilan' })">
                      Teknologi & Keterampilan
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Keislaman & Seni Islami' })">
                      Keislaman & Seni Islami
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Olahraga & Kesehatan Jasmani' })">
                      Olahraga & Kesehatan Jasmani
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
            </div>
            
          </div> --}}
    </div>

</x-app-layout>

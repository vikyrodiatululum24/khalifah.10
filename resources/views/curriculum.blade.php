<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-center text-3xl md:text-6xl uppercase text-gray-800 leading-tight">
            CURRICULUM
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Curriculum</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10 pb-20">
        <div class="md:flex">
            <div class="w-full md:w-3/4 px-4">
                <x-text-header>Kurikulum Pesantren Modern Khalifah – Pendidikan Terpadu untuk Generasi Unggul</x-text-header>
                <p class="mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Pesantren Modern Khalifah menerapkan kurikulum terpadu yang mengombinasikan pendidikan formal (SMP & SMA) dengan pendidikan diniyah. Santri tidak hanya mendapatkan ilmu akademik, tetapi juga pemahaman agama yang mendalam serta keterampilan hidup untuk menghadapi tantangan masa depan.</p>
                <x-text-header>Kurikulum yang Kami Terapkan</x-text-header>
                <p class="mb-4 font-bold intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Kurikulum Diniyah (Keislaman) – Membentuk Akhlak Mulia</p>
                <ul class="mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <li>✅ Tahfidz Al-Qur’an – Program hafalan dengan target minimal 5-30 juz.</li>
                    <li>✅ Fiqih & Akidah Akhlak – Pemahaman Islam dalam kehidupan sehari-hari.</li>
                    <li>✅ Tafsir & Hadits – Memahami makna Al-Qur’an dan Sunnah.</li>
                    <li>✅ Kajian Kitab Kuning – Studi literatur klasik Islam untuk pemahaman yang mendalam.</li>
                    <li>✅ Bahasa Arab – Meningkatkan kemampuan santri dalam membaca dan memahami teks Arab.</li>
                </ul>
                <p class="mb-4 font-bold intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Kurikulum Nasional (Akademik) – Mempersiapkan Masa Depan Santri</p>
                <ul class="mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <li>✅ Mengikuti Kurikulum Nasional dari Kemendikbud untuk jenjang SMP dan SMA.</li>
                    <li>✅ Mata pelajaran umum seperti Matematika, IPA, IPS, Bahasa Indonesia, dan Bahasa Inggris.</li>
                    <li>✅ Pelatihan Ujian Nasional & SNBT – Mempersiapkan santri untuk melanjutkan ke jenjang perguruan tinggi terbaik.</li>
                </ul>
                <p class="mb-4 font-bold intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Kurikulum Nasional (Akademik) – Mempersiapkan Masa Depan Santri</p>
                <ul class="mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <li>✅ Teknologi & Digitalisasi – Pemanfaatan teknologi dalam pembelajaran dan coding dasar.</li>
                    <li>✅ Kewirausahaan Santri – Membentuk jiwa entrepreneur sejak dini.</li>
                    <li>✅ Public Speaking & Kepemimpinan – Meningkatkan rasa percaya diri santri.</li>
                    <li>✅ Olahraga & Kesehatan – Menjaga kebugaran fisik dan mental santri.</li>
                </ul>

                <p class="mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">💡 Dengan kurikulum ini, santri tidak hanya unggul secara akademik tetapi juga siap menjadi pemimpin yang berakhlak dan berdaya saing global!</p>
            </div>

            {{-- standar mutu --}}
            <div class="w-full md:w-1/4 px-4">
                <x-text-header>Standar Mutu Khalifah Boarding School</x-text-header>
                <div x-data="{ open: 1 }" class="space-y-4">
                    <div class="border border-gray-800 rounded-md shadow-md intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                        <button @click="open === 1 ? open = null : open = 1" class="w-full text-left bg-primary rounded-md shadow-md flex justify-between px-4 py-2 font-bold">
                            Kriteria Kenaikan Kelas
                            <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 1 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div x-show="open === 1" x-collapse class="bg-gray-100 px-4 py-2">
                            <ul class="list-decimal p-2 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                                <li>Memenuhi nilai minimal pada semua mata pelajaran.</li>
                                <li>Kehadiran minimal 90% selama satu tahun ajaran.</li>
                                <li>Tidak memiliki catatan pelanggaran berat tata tertib.</li>
                                <li>Aktif dalam kegiatan ekstrakurikuler dan program pesantren.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-gray-800 rounded-md shadow-md intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-right">
                        <button @click="open === 2 ? open = null : open = 2" class="w-full text-left bg-primary rounded-md shadow-md flex justify-between px-4 py-2 font-bold">
                            Standar Kelulusan
                            <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 2 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div x-show="open === 2" x-collapse class="bg-gray-100 px-4 py-2">
                            <ul class="list-decimal p-2 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                                <li>Lulus ujian nasional dan ujian pesantren.</li>
                                <li>Hafalan Al-Qur’an minimal 5 juz.</li>
                                <li>Memiliki nilai akhlak dan kepribadian yang baik.</li>
                                <li>Menyelesaikan program pembelajaran diniyah dan akademik.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-gray-800 rounded-md shadow-md intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                        <button @click="open === 3 ? open = null : open = 3" class="w-full text-left bg-primary rounded-md shadow-md flex justify-between px-4 py-2 font-bold">
                            Kriteria Siswa Terbaik
                            <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 3 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div x-show="open === 3" x-collapse class="bg-gray-100 px-4 py-2">
                            <ul class="list-decimal p-2 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                                <li>Memiliki prestasi akademik tertinggi di kelas.</li>
                                <li>Aktif dalam kegiatan ekstrakurikuler dan organisasi.</li>
                                <li>Menunjukkan sikap disiplin dan tanggung jawab.</li>
                                <li>Menjadi teladan bagi teman-teman sekelas.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-gray-800 rounded-md shadow-md intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-right">
                        <button @click="open === 4 ? open = null : open = 4" class="w-full text-left bg-primary rounded-md shadow-md flex justify-between px-4 py-2 font-bold">
                            Kriteria Siswa Teladan
                            <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 4 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div x-show="open === 4" x-collapse class="bg-gray-100 px-4 py-2">
                            <ul class="list-decimal p-2 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                                <li>Memiliki akhlak mulia dan sikap yang baik terhadap guru dan teman.</li>
                                <li>Aktif dalam kegiatan sosial dan keagamaan.</li>
                                <li>Menunjukkan kepemimpinan yang baik.</li>
                                <li>Konsisten dalam menjaga nilai akademik dan non-akademik.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Calender Pendidikan --}}
        <div class="mt-10 w-full md:w-3/4 px-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-top">
            <x-text-header>Kalender Pendidikan</x-text-header>
            <img src="{{ asset('img/Calendar.jpeg') }}" alt="kalender pendidikan" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>

</x-app-layout>

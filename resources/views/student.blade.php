<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            Student
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Student</p>
    </x-slot>

    <div style="background-image: url('{{ asset('img/Container.png') }}');" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="md:gap-8">
                <div class="w-full px-4">
                    <div class="w-full mb-6">
                        <img src="{{ asset('img/student.jpg') }}" alt="eskul"
                            class="w-full h-auto rounded-xl shadow-lg object-cover">
                    </div>
                    <x-text-header class="text-2xl md:text-3xl font-bold mb-2">Santri Pesantren Modern
                        Khalifah</x-text-header>
                    <p class="font-bold mb-4 italic text-primary text-lg">Menginspirasi, Berprestasi, dan Berakhlak Mulia
                    </p>
                    <p class="mb-6 text-justify text-gray-700 leading-relaxed">
                        Di Pesantren Modern Khalifah, santri tidak hanya dididik untuk unggul dalam akademik, tetapi juga
                        dibina secara utuh melalui pendekatan ruhiyah, aqliyah, dan jasadiyah. Santri kami dibekali dengan
                        ilmu, karakter, keterampilan hidup, dan semangat kepemimpinan untuk menjadi generasi masa depan yang
                        siap bersaing secara global, namun tetap kokoh dalam nilai-nilai Islam.
                    </p>
                    <div class="mb-8 rounded-xl shadow p-6 bg-white/50">
                        <div class="text-center mb-10">
                            <x-text-header class="text-xl font-semibold mb-4 ">Profil Santri Khalifah</x-text-header>
                        </div>
                        <div class="md:flex gap-6 items-start">
                            <div class="w-full md:w-1/2 mb-4 md:mb-10" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ asset('img/image1.png') }}" alt="eskul"
                                    class="w-full h-auto shadow-md object-cover">
                            </div>
                            <div class="w-full md:w-1/2 mb-4 md:mb-10">
                                <p class="mb-2 text-justify text-gray-700 leading-relaxed">
                                    Santri Pesantren Modern Khalifah adalah generasi muda Islam yang dibina untuk memiliki kepribadian islami yang utuh—berakidah lurus, berakhlak mulia, berpengetahuan luas, serta siap menjadi pemimpin masa depan. Mereka ditempa dalam lingkungan yang penuh kedisiplinan, kasih sayang, dan nilai-nilai Islam yang aplikatif dalam kehidupan sehari-hari.
                                </p>
                                <ul class="mb-0 space-y-2 text-gray-800 text-base">
                                    <li>✅ Hafal dan cinta Al-Qur’an</li>
                                    <li>✅ Aktif dalam kegiatan akademik dan ekstrakurikuler</li>
                                    <li>✅ Disiplin, jujur, dan bertanggung jawab</li>
                                    <li>✅ Mandiri dan mampu bekerjasama dalam tim</li>
                                    <li>✅ Mampu berbahasa asing (Arab & Inggris)</li>
                                    <li>✅ Melek teknologi dan berpikir kritis</li>
                                    <li>✅ Memiliki semangat kepedulian sosial dan kepemimpinan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mb-8 bg-white/50 rounded-xl shadow p-6">
                        <div class="text-center">
                            <x-text-header class="text-xl font-semibold mb-4">Kehidupan Santri Sehari-Hari</x-text-header>
                        </div>
                        <div class="md:flex gap-6 items-start ">
                            <div class="w-full md:w-1/2 mb-4 md:mb-10" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ asset('img/image2.png') }}" alt="eskul"
                                    class="w-full h-auto rounded-lg shadow-md object-cover">
                            </div>
                            <div class="w-full md:w-1/2 mb-4 md:mb-10 p-2">
                                <p class="mb-4 text-justify text-gray-700 leading-relaxed">
                                    Setiap hari, santri Pesantren Modern Khalifah menjalani aktivitas yang terstruktur dan penuh makna. Mulai dari ibadah, pembelajaran, hingga kegiatan pengembangan diri, seluruh rangkaian aktivitas dirancang untuk membentuk karakter, pengetahuan, dan keterampilan santri secara seimbang.
                                </p>
                                <ul class="list-disc space-y-2 p-2 text-gray-700 ">
                                    <li>Shalat berjamaah dan tahfidz</li>
                                    <li>Belajar formal SMP/SMA</li>
                                    <li>Ekstrakurikuler dan pengembangan diri</li>
                                    <li>Kegiatan sosial, kepemimpinan, dan kebersamaan</li>
                                    <li>Evaluasi harian dan motivasi malam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mb-8 bg-white/50 rounded-xl shadow p-6">
                        <x-text-header class="text-xl font-semibold mb-4">🏆 Prestasi Santri</x-text-header>
                        <p class="mb-2 text-justify text-gray-700 leading-relaxed">
                            Santri Khalifah telah menorehkan berbagai prestasi baik di bidang akademik, tahfidz, bahasa,
                            hingga teknologi dan olahraga, baik di tingkat lokal maupun nasional.
                        </p>
                        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                            <!-- Prestasi 1 -->
                            <div class="bg-white md:rounded-lg md:shadow-md md:p-4 flex md:flex-col items-start md:items-center gap-2.5">
                                <img src="{{ asset('img/prestasi1.jpg') }}" alt="Santri 1" class="w-15 h-15 md:w-24 md:h-24 rounded-full object-cover mb-3 border-4 border-primary">
                                <div class="flex-grow">
                                    <h3 class="font-bold md:text-center text-lg text-primary mb-1">Ahmad Fauzan</h3>
                                    <p class="text-gray-700 md:text-center text-sm">Juara 1 Lomba Tahfidz Al-Qur’an Tingkat Nasional 2023</p>
                                </div>
                            </div>
                            <!-- Prestasi 2 -->
                            <div class="bg-white md:rounded-lg md:shadow-md md:p-4 flex md:flex-col items-start md:items-center gap-2.5">
                                <img src="{{ asset('img/prestasi2.jpg') }}" alt="Santri 2" class="w-15 h-15 md:w-24 md:h-24 rounded-full object-cover mb-3 border-4 border-primary">
                                <div class="flex-grow">
                                    <h3 class="font-bold md:text-center text-lg text-primary mb-1">Siti Nurhaliza</h3>
                                    <p class="text-gray-700 md:text-center text-sm">Juara 2 Olimpiade Sains Provinsi 2023</p>
                                </div>
                            </div>
                            <!-- Prestasi 3 -->
                            <div class="bg-white md:rounded-lg md:shadow-md md:p-4 flex md:flex-col items-start md:items-center gap-2.5">
                                <img src="{{ asset('img/prestasi3.jpg') }}" alt="Santri 3" class="w-15 h-15 md:w-24 md:h-24 rounded-full object-cover mb-3 border-4 border-primary">
                                <div class="flex-grow">
                                    <h3 class="font-bold md:text-center text-lg text-primary mb-1">Muhammad Rizki</h3>
                                    <p class="text-gray-700 md:text-center text-sm">Juara 1 Lomba Pidato Bahasa Arab Tingkat Kabupaten 2023</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

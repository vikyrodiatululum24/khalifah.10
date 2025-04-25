<x-app-layout>
    <div class="bg-gradient-to-r from-cyan-200 to-blue-400 w-full h-screen py-10">
        <div class="max-w-7xl flex items-center mx-auto sm:px-6 lg:px-8">
            <div class="md:flex justify-between items-center gap-4">
                <div class="p-6 text-secondary w-1/2 sm:px-6 lg:px-8 ">
                    <h2 class="text-6xl leading-tight mb-4">
                        Memujudkan <span class="font-bold">Pemimpin</span> Masa Depan Yang <span
                            class="font-bold">Berkarakter Islami</span>
                    </h2>
                    <x-primary-button>
                        {{ __('Daftar Sekarang') }}
                    </x-primary-button>
                </div>
                <div class="flex px-4 sm:px-6 lg:px-8 w-1/2 items-center mx-auto gap-2 justify-center">
                    <img src="https://picsum.photos/240/400" alt="Hero" class="object-cover">
                    <img src="https://picsum.photos/250/400" alt="Hero" class="object-cover pt-20">
                </div>
            </div>
        </div>
    </div>

    {{-- Video --}}
    <div class="w-full relative">
        <img src="{{ asset('img/bg-education.jpg') }}" alt="bg-education" class="w-full">
        <iframe
            class="rounded-lg absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 shadow-md w-3/4 max-w-4xl aspect-video"
            src="https://www.youtube.com/embed/IgdF_UJHtXA?si=YVLyr_ss4jTzVoGW" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
    </div>

    {{-- Quote --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-center text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins">
                يَا أَيُّهَا الَّذِينَ آمَنُوا إِذَا قِيلَ لَكُمْ تَفَسَّحُوا فِي الْمَجَالِسِ فَافْسَحُوا يَفْسَحِ
                اللَّهُ لَكُمْ ۖ وَإِذَا قِيلَ انْشُزُوا فَانْشُزُوا يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ
                وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ ۚ وَاللَّهُ بِمَا تَعْمَلُونَ خَبِيرٌ
            </h2>
            <p class="text-center font-semibold text-accent mb-4 font-poppins">QS: Al-Mujadilah Ayat 11</p>
            <p class="text-center text-accent font-sora">
                Hai orang-orang beriman apabila dikatakan kepadamu: “Berlapang-lapanglah dalam majlis”, maka
                lapangkanlah niscaya Allah akan memberi kelapangan untukmu. Dan apabila dikatakan: “Berdirilah kamu”,
                maka berdirilah, niscaya Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang
                yang diberi ilmu pengetahuan beberapa derajat. Dan Allah Maha Mengetahui apa yang kamu kerjakan.
            </p>
        </div>
    </div>
    {{-- About Us --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 md:flex justify-between items-center gap-4">
            <div class="flex items-center justify-center mx-auto gap-2 mb-5 w-1/2">
                <div class="items-center">
                    <img src="https://picsum.photos/200/400" alt="random image" class="object-cover">
                </div>
                <div class="items-center">
                    <img src="https://picsum.photos/150/150" alt="random image" class="object-cover mb-2">
                    <img src="https://picsum.photos/250/350" alt="random image">
                </div>
            </div>
            <div class="text-secondary sm:px-6 lg:px-8 w-1/2">
                <h2 class="text-2xl md:text-4xl leading-tight mb-4 font-poppins">
                    Pesantren Modern <Span class="text-primary">Khalifah</Span> Boarding School
                </h2>
                <p class="text-secondary font-sora">
                    Pondok Pesantren Al-Mujadilah adalah lembaga pendidikan Islam yang berdiri sejak tahun 2000. Kami
                    berkomitmen untuk mencetak generasi pemimpin masa depan yang berkarakter Islami.
                </p>
                <div class="flex justify-between font-sora">
                    <div class="mt-4">
                        <p class="text-secondary font-bold">
                            Visi :
                        </p>
                        <p class="text-accent">
                            Mendidik pemimpin yang cinta Al-Qur'an, berakhlak, berilmu, jujur, bertanggung jawab dan
                            didukung dengan fasilitas pendidikan yang berkualitas.
                        </p>
                    </div>
                    <div class="mt-4">
                        <p class="text-secondary font-bold">
                            Misi :
                        </p>
                        <p class="text-accent">
                            Mewujudkan Calon Pemimpin Masa Depan Yang Berkarakter Islami.
                        </p>
                    </div>
                </div>
                <x-primary-button class="mt-4" onclick="window.location.href='{{ route('about') }}'">
                    {{ __('Selengkapnya') }}
                </x-primary-button>
            </div>
        </div>
    </div>

    {{-- Curriculum --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-center text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins">
                Mendidik Pemimpin Masa Depan
            </h2>
            <p class="font-sora text accent text-center max-w-5xl mx-auto">
                Pesantren Modern Khalifah menghadirkan pendidikan terpadu yang menggabungkan kurikulum nasional dengan
                kurikulum ke-khasan Khalifah Boarding School.
            </p>
            <div class="flex flex-wrap justify-center gap-4 my-6">
                <div class="card sm:max-w-md bg-sky-500 text-white relative">
                    <img src="{{ asset('img/shape.png') }}" alt="shape" class="absolute top-0 right-0 object-cover">
                    <div class="flex justify-between">
                        <div class="p-2 md:p-4 lg:p-6">
                            <h5 class="mb-2.5 font-poppins">SMP Khalifah Boarding School</h5>
                            <p class="mb-4 font-sora">Membentuk karakter islami sejak dini dengan pendidikan berbasis
                                akhlak, akademik, dan keterampilan.</p>
                            <div class="card-actions">
                                <x-primary-button onclick="window.location.href='{{ route('about') }}'">
                                    Daftar Sekarang
                                </x-primary-button>
                            </div>
                        </div>
                        <div class="flex items-end pr-2">
                            <img src="https://picsum.photos/350/500" alt="random image" class="object-cover">
                        </div>
                    </div>
                </div>
                <div class="card sm:max-w-md bg-blue-800 text-white relative">
                    <img src="{{ asset('img/shape.png') }}" alt="shape" class="absolute top-0 right-0 object-cover">
                    <div class="flex justify-between">
                        <div class="p-2 md:p-4 lg:p-6">
                            <h5 class="mb-2.5 font-poppins">SMA Khalifah Boarding School</h5>
                            <p class="mb-4 font-sora">Mempersiapkan santri menjadi generasi unggul dengan pemahaman
                                agama yang kuat serta daya saing global.</p>
                            <div class="card-actions">
                                <x-primary-button onclick="window.location.href='{{ route('about') }}'">
                                    Daftar Sekarang
                                </x-primary-button>
                            </div>
                        </div>
                        <div class="flex items-end pr-2">
                            <img src="https://picsum.photos/350/500" alt="random image" class="object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- program andalan --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins">
                Pesantren Modern Khalifah memiliki program unggulan yang mendukung pembentukan karakter santri.
            </h2>
            <div class="my-10">
                <div id="draggable"
                    data-carousel='{ "loadingClasses": "opacity-0","dotsItemClasses": "carousel-dot", "slidesQty": { "xs": 1, "lg": 3 }, "isDraggable": true }'
                    class="relative w-full">
                    <div class="carousel h-full">
                        <div
                            class="carousel-body h-full carousel-dragging:transition-none carousel-dragging:cursor-grabbing cursor-grab opacity-0">
                            <!-- Slide 1 -->
                            <div class="carousel-slide">
                                <div class="sm:max-w-sm p-2 sm:p-4 lg:p-6 rounded-sm">
                                    <img src="https://picsum.photos/600/400" alt="" class="object-cover rounded-t-sm mb-2.5">
                                    <h5 class="font-poppins text-lg mb-2.5 text-secondary">Program Tahfidz</h5>
                                    <p class="font-sora mb-4">Program tahfidz Al-Qur'an yang dilaksanakan setiap hari
                                        untuk membentuk hafalan Al-Qur'an santri.</p>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-slide">
                                <div class="sm:max-w-sm p-2 sm:p-4 lg:p-6 rounded-sm">
                                    <img src="https://picsum.photos/600/402" alt="" class="object-cover rounded-t-sm mb-2.5">
                                    <h5 class="font-poppins text-lg mb-2.5 text-secondary">Program Akademik dan Keterampilan</h5>
                                    <p class="font-sora mb-4">Pesantren Modern Khalifah membentuk santri yang memiliki jiwa kepemimpinan Islami, berintegritas, serta mampu menjadi pemimpin yang bertanggung jawab.</p>
                                </div>
                            </div>

                            {{-- slide 3 --}}
                            <div class="carousel-slide">
                                <div class="sm:max-w-sm p-2 sm:p-4 lg:p-6 rounded-sm">
                                    <img src="https://picsum.photos/600/401" alt="" class="object-cover rounded-t-sm mb-2.5">
                                    <h5 class="font-poppins text-lg mb-2.5 text-secondary">Program kepemimpinan dan sosial</h5>
                                    <p class="font-sora mb-4">Santri dididik untuk memiliki kepedulian sosial yang tinggi dan aktif berkontribusi dalam kehidupan bermasyarakat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-pagination absolute bottom-3 end-0 start-0 flex justify-center gap-3"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fasilitas --}}
    <div class="bg-texture bg-cover bg-center h-96 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins">
                Dukungan sarana dan prasarana lengkap untuk pendidikan berkualitas.
            </h2>

        </div>
    </div>
    {{-- khalifah update --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center gap-4">
                <h2 class="text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins">
                    PM kHalifah Update
                </h2>
                <x-primary-button onclick="window.location.href=#">All Blog Post</x-primary-button>
            </div>

        </div>
    </div>
</x-app-layout>

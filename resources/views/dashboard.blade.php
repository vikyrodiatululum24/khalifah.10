<x-app-layout>
    <div class="bg-gradient-to-r from-cyan-200 to-blue-400 w-full py-20">
        <div class="max-w-7xl flex items-center mx-auto sm:px-6 lg:px-8 ">
            <div class="sm:flex justify-between items-center gap-4">
                <div
                    class="p-6 text-secondary sm:w-1/2 sm:px-6 lg:px-8 intersect:motion-scale-in-0 intersect:motion-opacity-in-0 origin-top">
                    <h2 class="text-2xl md:text-4xl leading-tight mb-4">
                        Mewujudkan <span class="font-bold">Pemimpin</span> Masa Depan Yang <span
                            class="font-bold">Berkarakter Islami</span>
                    </h2>
                    <x-primary-button class="mt-4" onclick="window.location.href='{{ route('psb') }}'">
                        {{ __('Daftar Sekarang') }}
                    </x-primary-button>
                </div>
                <div class="flex px-4 sm:px-6 lg:px-8 sm:w-1/2 items-center mx-auto gap-2 justify-center">
                    <img src="{{ asset('img/hero.png') }}" alt="Hero"
                        class="object-cover w-80 intersect:motion-scale-in-0 intersect:motion-opacity-in-0 origin-top">
                </div>
            </div>
        </div>
    </div>

    {{-- Video --}}
    <div class="w-full"
        style='background-image: url("{{ asset('img/bg-education.jpg') }}"); background-size: cover; background-position: center;'>
        <div class="flex justify-center items-center max-w-7xl mx-auto py-20">
            <iframe class="rounded-lg shadow-md w-3/4 max-w-4xl aspect-video" data-aos="zoom-in-up" data-aos-delay="300"
                src="https://www.youtube.com/embed/IgdF_UJHtXA?si=YVLyr_ss4jTzVoGW" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </div>

    {{-- Quote --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto text-sm md:text-xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-center text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins"
                data-aos="zoom-in">
                يَا أَيُّهَا الَّذِينَ آمَنُوا إِذَا قِيلَ لَكُمْ تَفَسَّحُوا فِي الْمَجَالِسِ فَافْسَحُوا يَفْسَحِ
                اللَّهُ لَكُمْ ۖ وَإِذَا قِيلَ انْشُزُوا فَانْشُزُوا يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ
                وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ ۚ وَاللَّهُ بِمَا تَعْمَلُونَ خَبِيرٌ
            </h2>
            <p class="text-center font-semibold text-accent mb-4 font-poppins">QS: Al-Mujadilah Ayat 11</p>
            <p class="text-center text-accent font-sora" data-aos="zoom-in">
                Hai orang-orang beriman apabila dikatakan kepadamu: “Berlapang-lapanglah dalam majlis”, maka
                lapangkanlah niscaya Allah akan memberi kelapangan untukmu. Dan apabila dikatakan: “Berdirilah kamu”,
                maka berdirilah, niscaya Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang
                yang diberi ilmu pengetahuan beberapa derajat. Dan Allah Maha Mengetahui apa yang kamu kerjakan.
            </p>
        </div>
    </div>
    {{-- About Us --}}
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 md:flex justify-between items-center gap-4">
            <div
                class="flex items-center justify-center mx-auto gap-2 mb-5 sm:w-1/2 intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier">
                <div class="items-center">
                    <img src="{{ asset('img/about1.png') }}" alt="random image" class="object-cover">
                </div>
                <div class="items-center">
                    <img src="{{ asset('img/about2.png') }}" alt="random image" class="object-cover mb-2">
                    <img src="{{ asset('img/about3.png') }}" alt="random image" class="object-cover mb-2 w-20 md:w-32">
                </div>
            </div>
            <div
                class="text-secondary sm:px-6 lg:px-8 sm:w-1/2 intersect:motion-preset-slide-left intersect:motion-ease-spring-bouncier">
                <h2 class="text-2xl md:text-4xl leading-tight mb-4 font-poppins">
                    Pesantren Modern <Span class="text-primary">Khalifah</Span> Boarding School
                </h2>
                <p class="text-secondary font-sora text-sm md:text-xl">
                    Pondok Pesantren Al-Mujadilah adalah lembaga pendidikan Islam yang berdiri sejak tahun 2000. Kami
                    berkomitmen untuk mencetak generasi pemimpin masa depan yang berkarakter Islami.
                </p>
                <div class="flex justify-between text-sm md:text-xl font-sora text-accent gap-4">
                    <div class="mt-4 w-1/2">
                        <p class="text-secondary font-bold">
                            Visi :
                        </p>
                        <p class="text-accent">
                            Mendidik pemimpin yang cinta Al-Qur'an, berakhlak, berilmu, jujur, bertanggung jawab dan
                            didukung dengan fasilitas pendidikan yang berkualitas.
                        </p>
                    </div>
                    <div class="mt-4 w-1/2">
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
            <p class="font-sora text-sm md:text-xl text-accent text-center max-w-5xl mx-auto">
                Pesantren Modern Khalifah menghadirkan pendidikan terpadu yang menggabungkan kurikulum nasional dengan
                kurikulum ke-khasan Khalifah Boarding School.
            </p>
            <div class="sm:flex justify-center gap-4 my-6 text-sm md:text-xl">
                <div
                    class="card rounded-md shadow-lg sm:max-w-md bg-sky-500 text-white relative mb-4 intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/shape.png') }}" alt="shape" class="absolute top-0 right-0 object-cover">
                    <div class="flex justify-between h-full">
                        <div class="p-2 md:p-4 lg:p-6 mb-10 sm:mb-6">
                            <h5 class="mb-2.5 font-poppins">SMP Khalifah Boarding School</h5>
                            <p class="mb-4 font-sora">Membentuk karakter islami sejak dini dengan pendidikan berbasis
                                akhlak, akademik, dan keterampilan.</p>
                            <div class="absolute bottom-0 left-0 right-0 p-2">
                                <x-primary-button onclick="window.location.href='{{ route('psb') }}'">
                                    Daftar Sekarang
                                </x-primary-button>
                            </div>
                        </div>
                        <div class="flex items-end pr-2">
                            <img src="{{ asset('img/curriculum1.png') }}" alt="random image" class="object-cover">
                        </div>
                    </div>
                </div>
                <div
                    class="card rounded-md shadow-lg sm:max-w-md bg-blue-800 text-white relative mb-4 intersect:motion-preset-slide-left intersect:motion-ease-spring-bouncier transition-transform duration-300 hover:scale-105"
                    <img src="{{ asset('img/shape.png') }}" alt="shape" class="absolute top-0 right-0 object-cover">
                    <div class="flex justify-between h-full">
                        <div class="p-2 md:p-4 lg:p-6 mb-10 sm:mb-6">
                            <h5 class="mb-2.5 font-poppins">SMA Khalifah Boarding School</h5>
                            <p class="mb-4 font-sora">Mempersiapkan santri menjadi generasi unggul dengan pemahaman
                                agama yang kuat serta daya saing global.</p>
                            <div class="absolute bottom-0 left-0 right-0 p-2">
                                <x-primary-button onclick="window.location.href='{{ route('psb') }}'">
                                    Daftar Sekarang
                                </x-primary-button>
                            </div>
                        </div>
                        <div class="flex items-end pr-2">
                            <img src="{{ asset('img/curriculum2.png') }}" alt="random image" class="object-cover">
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
                <div id="multi-slide"
                    data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "lg": 3 } }'
                    class="relative w-full">
                    <div class="carousel h-full">
                        <div class="carousel-body h-full opacity-0 text-sm md:text-xl">
                            <!-- Slide 1 -->
                            <div class="carousel-slide px-1" data-aos="fade-left">
                                <div class="bg-base-200/50 flex h-full justify-center p-6">
                                    <div class="p-2 sm:p-4 lg:p-6 rounded-md">
                                        <img src="{{ asset('img/image1.png') }}" alt=""
                                            class="object-cover rounded-md mb-2.5">
                                        <h5 class="font-poppins text-lg mb-2.5 text-secondary">Program Tahfidz</h5>
                                        <p class="font-sora mb-4">Program tahfidz Al-Qur'an yang dilaksanakan setiap
                                            hari
                                            untuk membentuk hafalan Al-Qur'an santri.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-slide px-1" data-aos="fade-up">
                                <div class="bg-base-200 flex h-full justify-center p-6">
                                    <div class="p-2 sm:p-4 lg:p-6 rounded-md">
                                        <img src="{{ asset('img/image2.png') }}" alt=""
                                            class="object-cover rounded-md mb-2.5">
                                        <h5 class="font-poppins text-lg mb-2.5 text-secondary">Program Akademik dan
                                            Keterampilan</h5>
                                        <p class="font-sora mb-4">Pesantren Modern Khalifah membentuk santri yang
                                            memiliki
                                            jiwa kepemimpinan Islami, berintegritas, serta mampu menjadi pemimpin yang
                                            bertanggung jawab.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="carousel-slide px-1" data-aos="fade-right">
                                <div class="bg-base-200 flex h-full justify-center p-6">
                                    <div class="p-2 sm:p-4 lg:p-6 rounded-md">
                                        <img src="{{ asset('img/image3.png') }}" alt=""
                                            class="object-cover rounded-md mb-2.5">
                                        <h5 class="font-poppins text-lg mb-2.5 text-secondary">Program kepemimpinan dan
                                            sosial</h5>
                                        <p class="font-sora mb-4">Santri dididik untuk memiliki kepedulian sosial yang
                                            tinggi dan aktif berkontribusi dalam kehidupan bermasyarakat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Previous Slide -->
                    <button type="button" class="carousel-prev">
                        <span
                            class="size-9.5 bg-gray-100 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 cursor-pointer rtl:rotate-180"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button" class="carousel-next">
                        <span class="sr-only">Next</span>
                        <span
                            class="size-9.5 bg-gray-100 flex items-center justify-center rounded-full shadow-base-300/20 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 cursor-pointer rtl:rotate-180"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Fasilitas --}}
    <div class="w-full bg-fasilitas" style="background-image: url('img/bg-fasilitas.png');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <h2
                class="text-secondary text-2xl md:text-4xl leading-tight mb-4 font-poppins text-center intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier">
                Dukungan sarana dan prasarana lengkap untuk pendidikan berkualitas.
            </h2>

            <div class="my-10 data-aos='fade-up' data-aos-duration='1000'>">
                <div class="flex flex-wrap stat">
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 intersect:motion-scale-in-0 intersect:motion-opacity-in-0 origin-top">
                        <img src="{{ asset('img/icon/gedung.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Gedung Milik Sendiri</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[250ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/kelas.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Ruang Kelas 20 Siswa</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[500ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/mesjid.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Masjid</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[750ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/asrama.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Asrama</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[1000ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/aula.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Mini Aula</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[1250ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/lapang.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Lapangan Olahraga</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[1500ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/cctv.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">CCTV 24 Jam</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[1750ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/wifi.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Wifi area Proteksi internet Sehat</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[2000ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/kantin.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Kantin</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[2250ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/perpus.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Perpustakaan</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[2500ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/dapur.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Dapur</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[2750ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/lab alam.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Lab Alam</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[3000ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/farm.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Farming Area</p>
                    </div>
                    <div
                        class="w-28 flex flex-col items-center mx-auto mb-4 origin-to intersect:motion-delay-[3250ms] bg-base-100 intersect:motion-scale-in-0 intersect:motion-opacity-in-0">
                        <img src="{{ asset('img/icon/subel.png') }}" alt="fasilitas"
                            class="object-cover mb-2 w-10 md:w-15">
                        <p class="text-xs font-bold text-center">Pusat Sumber Belajar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- khalifah update --}}
    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center gap-4">
                <h2
                    class="text-secondary text-2xl md:text-4xl leading-tight mt-8 mb-4 font-poppins intersect:motion-preset-slide-right intersect:motion-ease-spring-bouncier">
                    PM kHalifah Update
                </h2>
                <x-primary-button onclick="window.location.href='{{ route('posts') }}' "
                    class="intersect:motion-preset-slide-left intersect:motion-ease-spring-bouncier">All Blog
                    Post</x-primary-button>
            </div>
            <div id="draggable"
                data-carousel='{ "loadingClasses": "opacity-0","dotsItemClasses": "carousel-dot carousel-active:bg-primary", "slidesQty": { "xs": 1, "lg": 3 }, "isDraggable": true }'
                class="relative w-full rounded-md bg-gray-300 intersect:motion-scale-in-0 intersect:motion-opacity-in-0 origin-top">
                <div class="carousel h-full">
                    <div
                        class="carousel-body h-full carousel-dragging:transition-none carousel-dragging:cursor-grabbing cursor-grab opacity-0">
                        <!-- Slide 1 -->
                        @foreach ($posts as $post)
                            <div class="carousel-slide">
                                <div class="bg-base-200/50 flex h-full justify-center p-6">
                                    <div class="sm:max-w-sm p-2 sm:p-4 lg:p-6 rounded-sm bg-white">
                                        @if (!empty($post->image))
                                            @foreach ($post->image as $img)
                                                <img src="{{ asset('storage/' . $img) }}" alt=""
                                                    class="object-cover mb-2.5 rounded-lg">
                                            @endforeach
                                        @else
                                            <img src="https://picsum.photos/600/402" alt=""
                                                class="object-cover mb-2.5 rounded-lg">
                                        @endif
                                        <div class="flex justify-between">
                                            <p class="text-xs">
                                                <span>
                                                    <i class="ph ph-calendar-dots text-primary"></i>
                                                </span>
                                                {{ $post->created_at->format('d') }}
                                                {{ \Illuminate\Support\Carbon::parse($post->created_at)->translatedFormat('F') }}
                                                {{ $post->created_at->format('Y') }}
                                            </p></span>
                                            <p class="text-xs"><span><i class="ph ph-chats text-primary"></i>
                                                    Comment({{ $post->comments->count() }}) </p>
                                        </div>
                                        <a href="{{ route('post.show', $post->slug) }}">
                                            <h5 class="font-poppins text-lg mb-2.5 text-secondary">{{ $post->title }}
                                            </h5>
                                        </a>
                                        <p class="mb-2.5 text-sm sm:text-lg">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($post->body), 120, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-pagination absolute bottom-3 end-0 start-0 flex justify-center gap-3"></div>
            </div>
        </div>
    </div>
</x-app-layout>

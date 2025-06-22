<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            ekstrakurikuler
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Ekstrakurikuler</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="md:flex">
            <div class="w-full md:w-3/4 px-4">
                <x-text-header>Ekstrakurikuler Pesantren Modern Khalifah</x-text-header>
                <p
                    class="font-bold mb-4 italic intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    Menumbuhkan Bakat, Mengasah Potensi, Membangun Karakter</p>
                <p
                    class="mb-4 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    Di Pesantren Modern Khalifah, kami percaya bahwa pendidikan terbaik tidak hanya terjadi di ruang
                    kelas. Karena itu, kami menghadirkan berbagai program ekstrakurikuler yang mendukung pengembangan
                    bakat, minat, dan karakter santri secara menyeluruh – mulai dari bidang akademik, bahasa, seni,
                    olahraga, hingga kepemimpinan dan sosial.</p>
                <div class="w-full flex mb-4">
                    <div
                        class="w-full md:w-1/2 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                        <img src="https://picsum.photos/201/100" alt="eskul"
                            class="w-full h-auto rounded-lg shadow-md">
                    </div>
                    <div
                        class="w-1/2 px-4 hidden md:block intersect:motion-delay-[300] intersect:motion-ease-spring-smooth intersect-half origin-left">
                        <img src="https://picsum.photos/200/100" alt="eskul"
                            class="w-full h-auto rounded-lg shadow-md">
                    </div>
                </div>
                @foreach ($categories as $cat)
                    @if ($cat->eskul->isNotEmpty())
                        <h2 class="text-2xl md:text-4xl font-bold mb-2" id="cat-{{ $cat->id }}">{{ $cat->name }}</h2>
                        @foreach ($cat->eskul as $eskul)
                            <div class="mb-2 md:flex gap-2 items-start">
                                <img src="{{ asset('img/image1.png') }}" class="md:max-w-40 w-full" alt="">
                                <div>
                                    <p
                                        class="mb-4 font-bold intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                                        {{ $eskul->name }}</p>
                                    <p
                                        class="mb-4 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                                        {{ $eskul->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>

            {{-- standar mutu --}}
            <div class="w-full md:w-1/4 px-4 hidden md:block ">
                <x-text-header>Category</x-text-header>
                @foreach ($categories as $cat)
                    <div class="mb-4 flex justify-between gap-2">
                        <a href="#cat-{{ $cat->id }}"
                            class="p-2 bg-primary rounded-md w-full text-white hover:shadow-md">{{ $cat->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>

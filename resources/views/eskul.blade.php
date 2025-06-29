<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            ekstrakurikuler
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Ekstrakurikuler</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="w-full px-4">
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
            <div class="w-full flex mb-10">
                <div
                    class="w-full md:w-1/2 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <img src="{{ asset('img/about1.png') }}" alt="eskul"
                        class="w-full h-68 rounded-lg shadow-md object-cover object-center">
                </div>
                <div
                    class="w-1/2 px-4 hidden md:block intersect:motion-delay-[300] intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <img src="{{ asset('img/about2.png') }}" alt="eskul"
                        class="w-full h-68 rounded-lg shadow-md object-cover object-center">
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 w-full my-10">
                @foreach ($eskuls as $eskul)
                    @php
                        $bgColors = [
                            'bg-red-200/20',
                            'bg-blue-200/20',
                            'bg-green-200/20',
                            'bg-yellow-200/20',
                            'bg-purple-200/20',
                            'bg-pink-200/20',
                            'bg-orange-200/20',
                            'bg-teal-200/20',
                        ];
                        $bgClass = $bgColors[$loop->index % count($bgColors)];
                    @endphp
                    <div class="rounded-md flex gap-2 items-center {{ $bgClass }} p-2 relative group">
                        <img src="{{ asset('storage/' . $eskul->image) }}" alt="{{ $eskul->name }}"
                            class="w-16 h-16 rounded-full object-cover mb-2">
                        <h3 class="text-md md:text-lg font-semibold text-primary">{{ $eskul->name }}</h3>
                        <div
                            class="absolute left-0 top-full mt-2 w-40 sm:w-64 md:w-96 bg-white border border-gray-200 rounded shadow-lg p-3 text-gray-600 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity duration-300 z-10">
                            {{ $eskul->description }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>

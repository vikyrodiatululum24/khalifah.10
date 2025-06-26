<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            Gallery
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Gallery</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10 flex flex-wrap justify-center gap-4">
        @foreach ($posts as $post)
            <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-md"
                data-aos="fade-up" data-aos-delay="100">
                <div class="h-96 w-72">
                    @if (!empty($post->image))
                        @foreach ($post->image as $img)
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('storage/' . $img) }}" alt="" />
                        @endforeach
                    @else
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="https://picsum.photos/201/100" alt="" />
                    @endif
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="font-dmserif text-3xl font-bold text-white">{{ $post->title }}</h1>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        {{ \Illuminate\Support\Str::limit($post->body, 100) }}
                    </p>
                </div>
            </div>
        @endforeach
        <div class="mt-4 mb-8 flex w-full justify-between items-center">
            {{ $posts->links() }}
        </div>
    </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            Khalifah Update
        </h1>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Update</p>
    </x-slot>

    <div class="max-w-7xl p-2 mx-auto sm:px-6 lg:px-8 py-10 md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <div
                class="card group hover:shadow-sm sm:max-w-sm rounded-md shadow-sm mb-4" data-aos="fade-up">
                @if (!empty($post->image))
                    @foreach ($post->image as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="" class="object-cover mb-2.5 rounded-lg">
                    @endforeach
                @else
                    <img src="https://picsum.photos/600/402" alt="" class="object-cover mb-2.5 rounded-lg">
                @endif
                <div class="flex justify-between px-6 py-2">
                    <p class="text-xs"><span><i class="ph ph-calendar-dots text-primary"></i></span> 24 Juni
                        2025 </p>
                    <p class="text-xs"><span><i class="ph ph-chats text-primary"></i>
                            Comment(06) </p>
                </div>
                <div class="px-2 md:px-4">
                    <a href="{{ route('post.show', $post->slug) }}">
                        <h5 class="card-title mb-2.5">{{ $post->title }}</h5>
                    </a>
                    <p>{{ Str::limit($post->body, 100, '...') }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mx-auto max-w-7xl mb-8 flex w-full justify-between items-center">
        {{ $posts->links() }}
    </div>
</x-app-layout>

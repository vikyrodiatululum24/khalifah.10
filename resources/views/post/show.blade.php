<x-app-layout>
    <x-slot name="header">
        <h1 class="font-extrabold text-center text-3xl md:text-6xl uppercase text-primary text-shadow-lg leading-tight">
            Khalifah Update
        </h1>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Update</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-20">
        <div class="md:flex">
            <div class="w-full md:w-3/4 px-4">
                <div
                    class="w-full intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <img src="https://picsum.photos/201/100" alt="eskul" class="w-full h-auto rounded-lg shadow-md">
                    <div class="flex py-2 gap-6">
                        <p class="text-sm"><span>
                                <i class="ph ph-calendar-dots text-primary"></i>
                            </span>
                            {{ $post->created_at->format('d') }}
                            {{ \Illuminate\Support\Carbon::parse($post->created_at)->translatedFormat('F') }}
                            {{ $post->created_at->format('Y') }}
                            </span></p>
                        <p class="text-sm"><span><i class="ph ph-chats text-primary"></i>
                                Comment({{ $post->comments->count() }}) </p>
                    </div>
                </div>
                <x-text-header>{{ $post->title }}</x-text-header>
                <p
                    class="mb-4 text-sm md:text-xl text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left font-sora">
                    {{ $post->body }}</p>

                <div class="w-full flex justify-between mb-4">
                    <div class="flex gap-4">
                        <p class="font-bold text-sm font-sora">Publisher :</p>
                        <p class="text-sm font-sora"><span><i class="ph ph-user text-primary"></i></span>
                            {{ $post->user->name }}</p>
                    </div>
                    <div class="flex gap-4 mb-6">
                        <p class="font-bold text-sm font-sora">Share : </p>
                        <p class="text-xl font-bold"><span><i class="ph ph-instagram-logo text-primary"></i></span> </p>
                        <p class="text-xl font-bold"><span><i class="ph ph-facebook-logo text-primary"></i></span> </p>
                        <p class="text-xl font-bold"><span><i class="ph ph-twitter-logo text-primary"></i></span> </p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 px-4 mb-4">
                                <h2 class="mb-2 text-lg md:text-3xl font-bold text-secondary ">Relate Post</h2>
                <hr class="mb-2">
                <div class="flex md:flex-col md:max-h-100 gap-2 overflow-auto mb-2">
                    @foreach ($relatePost as $relate)
                        <div class="mb-1">
                            <a href="{{ route('post.show', $relate->slug) }}" class="sm:flex gap-2.5">
                                <div class="w-30 h-auto rounded-md">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/card/image-4.png"
                                        alt="" class="w-30 object-contain shadow-md rounded-md">
                                </div>
                                <div >
                                    <h2 class="font-semibold text-sm">{{ $relate->title }}</h2>
                                    <p class="text-xs md:text-lg">{{ \Illuminate\Support\Str::limit($relate->body, 20) }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <h2 class="mb-2 text-lg md:text-3xl font-bold text-secondary ">Recent Post</h2>
                <hr class="mb-2">
                <div class="flex md:flex-col md:max-h-100 gap-2 overflow-auto ">
                    @foreach ($lastPost as $last)
                        <div class="mb-1">
                            <a href="{{ route('post.show', $last->slug) }}" class="sm:flex gap-2.5">
                                <div class="w-30 h-auto rounded-md">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/card/image-4.png"
                                        alt="" class="w-30 object-contain shadow-md rounded-md">
                                </div>
                                <div >
                                    <h2 class="font-semibold text-sm">{{ $last->title }}</h2>
                                    <p class="text-xs md:text-lg">{{ \Illuminate\Support\Str::limit($last->body, 20) }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- komentars --}}
        @foreach ($post->comments()->whereNull('parent_id')->get() as $comment)
            <div class="w-full border-t border-gray-300 mb-4 p-2 md:p-4">
                <div class="flex gap-4 mb-4 w-full items-start">
                    <div class="avatar avatar-placeholder">
                        <div class="bg-neutral text-neutral-content w-16 rounded-full">
                            <span class="size-10 text-4xl"><i class="ph ph-user"></i></span>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex w-full justify-between">
                            <p class="text-sm font-sora">
                                {{ $comment->created_at->format('d') }}
                                {{ \Illuminate\Support\Carbon::parse($comment->created_at)->translatedFormat('F') }}
                                {{ $comment->created_at->format('Y') }}
                                - 20:00</p>
                            <button
                                class="rounded-md border-1 btn text-primary hover:bg-primary hover:text-white hover:shadow-primary border-primary px-2"
                                onclick="document.getElementById('reply-form-{{ $comment->id }}').classList.toggle('hidden')"
                                type="button">Reply</button>
                        </div>
                        <p class="font-bold text-xl mb-2.5 font-poppins">{{ $comment->user->name }}</p>
                        <p class="text-sm font-sora">{{ $comment->body }}</p>

                        {{-- Loop balasan --}}
                        @foreach ($comment->children as $reply)
                            <div class="w-full mb-4 pt-4">
                                <div class="flex gap-4 mb-4 w-full">
                                    <div class="avatar avatar-placeholder">
                                        <div class="bg-neutral text-neutral-content w-12 rounded-full">
                                            <span class="size-8 text-2xl"><i class="ph ph-user"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex w-full justify-between">
                                            <p class="text-xs font-sora">
                                                {{ $reply->created_at->format('d') }}
                                                {{ \Illuminate\Support\Carbon::parse($reply->created_at)->translatedFormat('F') }}
                                                {{ $reply->created_at->format('Y') }}
                                                - 20:00</p>
                                        </div>
                                        <p class="font-bold text-base mb-2 font-poppins">
                                            {{ $reply->user->name }}</p>
                                        <p class="text-xs font-sora">{{ $reply->body }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- Reply form --}}
                        <form action="{{ route('posts.comments.store', $post->id) }}" method="POST"
                            class="mt-2 hidden" id="reply-form-{{ $comment->id }}">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div class="mb-2">
                                <textarea name="body" rows="2" placeholder="Your Reply"
                                    class="textarea w-full rounded-md shadow-md focus:border-primary" required></textarea>
                            </div>
                            <button type="submit"
                                class="rounded-md border-1 btn bg-primary text-white hover:shadow-primary hover:shadow-md border-white px-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- comment --}}
        <div class="w-full rounded-md bg-gray-100 p-6">
            <h2 class="mb-4 text-xl md:text-3xl font-bold text-secondary font-poppins">Leave a Comment</h2>
            <p class="mb-4 text-sm font-sora">Your email address will not be published. Required fields are
                marked *</p>
            <form action="{{ route('posts.comments.store', $post->id) }}" method="POST" class="space-y-4">
                @csrf
                <div class="w-full mb-4">
                    <textarea placeholder="Comment" id="comment" rows="4" name="body"
                        class="textarea w-full rounded-md shadow-md focus:border-primary" aria-label="Textarea"></textarea>
                </div>

                <div>
                    <button type="submit"
                        class="w-full inline-flex justify-center rounded-md border border-transparent bg-primary py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Comment..
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

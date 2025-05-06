<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-center text-6xl uppercase text-gray-800 leading-tight">
            Blog
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Blog</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-20">
        <div class="md:flex">
            <div class="w-full md:w-3/4 px-4">
                <div
                    class="w-full mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                    <img src="https://picsum.photos/201/100" alt="eskul"
                        class="w-full h-auto rounded-lg shadow-md mb-2">
                    <div class="flex px-6 py-2 gap-6">
                        <p class="text-sm"><span><i class="ph ph-calendar-dots text-primary"></i></span> 24 Juni
                            2025 </p>
                        <p class="text-sm"><span><i class="ph ph-chats text-primary"></i>
                                Comment(06) </p>

                    </div>
                </div>
                <x-text-header>Lorem ipsum dolor sit amet consectetur.</x-text-header>
                <p
                    class="mb-4 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left font-sora">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur eum vel quasi veritatis veniam
                    autem voluptatem aliquid adipisci, odit pariatur saepe aspernatur et, nam consequatur. Delectus
                    voluptates repellat quia iure, commodi temporibus facilis voluptatum odio autem enim, doloremque
                    voluptatem possimus quidem minus? Autem cupiditate iure impedit nemo corporis facere consectetur
                    doloribus laboriosam quidem, fuga optio non vitae et! Nemo neque ea eos quis odit cumque quo fugiat
                    voluptatum sit temporibus accusantium ducimus eligendi id odio qui unde aspernatur totam veniam ad
                    eius, amet suscipit laboriosam nihil? Consequuntur vitae perspiciatis deserunt reiciendis quisquam
                    quis, nemo nulla et temporibus obcaecati repudiandae libero amet accusantium soluta. Quisquam magnam
                    optio autem obcaecati. Quisquam in expedita eveniet, possimus minus a? Odit temporibus
                    exercitationem numquam incidunt libero excepturi explicabo nostrum. Aliquam, accusamus suscipit qui
                    eaque nemo impedit cupiditate necessitatibus laborum quaerat quisquam neque. Facere, fugiat! Numquam
                    incidunt soluta doloremque quod harum exercitationem, error quam quo nihil distinctio laboriosam
                    natus voluptas labore consequatur, iusto, expedita minima rem excepturi earum quas totam. At optio
                    dolores voluptatem numquam facilis, quidem et enim? Veniam maxime quod esse totam quae enim delectus
                    praesentium ipsa excepturi? Tempora ratione corrupti consequuntur? A ullam eaque minima delectus
                    asperiores mollitia ipsa, aut alias itaque soluta omnis inventore, repellat necessitatibus
                    perspiciatis obcaecati possimus labore vero eos amet ipsum, aspernatur culpa? Tempora obcaecati
                    dolorum magnam vero. At possimus adipisci, impedit doloribus repudiandae cupiditate rem earum
                    necessitatibus. Molestiae ut ducimus nam placeat voluptatum libero autem voluptatem, saepe harum ad
                    eveniet ipsum totam, aperiam minus repellat consequuntur pariatur explicabo.</p>

                <div class="w-full flex justify-between mb-4">
                    <div class="flex gap-4">
                        <p class="font-bold text-sm font-sora">Publisher : </p>
                        <p class="text-sm font-sora"><span><i class="ph ph-user text-primary"></i></span> Jhone Doe</p>
                    </div>
                    <div class="flex gap-4 mb-6">
                        <p class="font-bold text-sm font-sora">Share : </p>
                        <p class="text-xl font-bold"><span><i class="ph ph-instagram-logo text-primary"></i></span> </p>
                        <p class="text-xl font-bold"><span><i class="ph ph-facebook-logo text-primary"></i></span> </p>
                        <p class="text-xl font-bold"><span><i class="ph ph-twitter-logo text-primary"></i></span> </p>
                    </div>
                </div>
                <div class="w-full border-t border-gray-300 mb-4 pt-4">
                    <div class="flex gap-4 mb-4">
                      <div class="avatar avatar-placeholder">
                        <div class="bg-neutral text-neutral-content w-16 rounded-full">
                          <span class="size-10 text-4xl"><i class="ph ph-user"></i></span>
                        </div>
                      </div>
                        <div>
                          <div class="flex w-full justify-between">
                            <p class="text-sm font-sora">24 Juni 2025 - 20:00</p>
                            <button class="rounded-md border-1 btn text-primary hover:shadow-lg hover:shadow-primary border-primary px-2">Reply</button>
                          </div>
                            <p class="font-bold text-xl mb-2.5 font-poppins">Jhone Doe</p>
                            <p class="text-sm font-sora">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, voluptates animi corrupti officia corporis dolorum aspernatur fugiat, veritatis consequuntur porro dolorem.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-md bg-gray-100 p-6">
                    <h2 class="mb-4 text-xl md:text-3xl font-bold text-secondary font-poppins">Leave a Comment</h2>
                    <p class="mb-4 text-sm font-sora">Your email address will not be published. Required fields are marked *</p>
                  <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="flex gap-4">
                      <div class="w-full mb-4">
                        <input type="text" placeholder="Masukan Nama" class="input rounded-md shadow-md"/>
                      </div>
                      <div class="w-full mb-4">
                        <input type="text" placeholder="Masukan Email" class="input rounded-md shadow-md"/>
                      </div>
                    </div>
                    <div class="w-full mb-4">
                      <textarea placeholder="Comment" id="comment" rows="4" class="textarea w-full rounded-md shadow-md focus:border-primary" aria-label="Textarea"></textarea>
                    </div>
                    
                    <div>
                      <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent bg-primary py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
            </div>


            <div class="w-full md:w-1/4 px-4">
                <div class="input input-lg flex max-w-sm rounded-md border border-gray-300 mb-4">
                    <input type="search" class="grow" placeholder="Search" id="kbdInput" />
                    <label class="sr-only" for="kbdInput">Search</label>
                </div>
                <h2 class="mb-4 text-xl md:text-3xl font-bold text-secondary ">Recent Post</h2>
                <hr>
                <div class="flex my-4 gap-2.5">
                    <a href="{{ route('blog') }}" class="flex my-4 gap-2.5">
                        <div class="w-30 h-auto rounded-md">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-4.png" alt=""
                                class="w-30 object-contain shadow-md rounded-md">
                        </div>
                        <h2 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    </a>
                </div>
                <div class="flex my-4 gap-2.5">
                    <a href="{{ route('blog') }}" class="flex my-4 gap-2.5">
                        <div class="w-30 h-auto rounded-md">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png" alt=""
                                class="w-30 object-contain shadow-md rounded-md">
                        </div>
                        <h2 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    </a>
                </div>
                <div class="flex my-4 gap-2.5">
                    <a href="{{ route('blog') }}" class="flex my-4 gap-2.5">
                        <div class="w-30 h-auto rounded-md">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-6.png" alt=""
                                class="w-30 object-contain shadow-md rounded-md">
                        </div>
                        <h2 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    </a>
                </div>
                <div class="flex my-4 gap-2.5">
                    <a href="{{ route('blog') }}" class="flex my-4 gap-2.5">
                        <div class="w-30 h-auto rounded-md">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-1.png" alt=""
                                class="w-30 object-contain shadow-md rounded-md">
                        </div>
                        <h2 class="font-semibold text-sm font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-bold text-center text-3xl md:text-6xl uppercase text-gray-800 leading-tight">
          PENERIMAAN SANTRI BARU
      </h2>
      <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Penerimaan Santri Baru</p>
  </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
      <div class="md:flex">
          <div class="w-full md:w-3/4 px-4">
            
            <x-text-header>Ekstrakurikuler Pesantren Modern Khalifah</x-text-header>
            <p class="font-bold mb-4 italic intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Menumbuhkan Bakat, Mengasah Potensi, Membangun Karakter</p>
            <p class="mb-4 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Di Pesantren Modern Khalifah, kami percaya bahwa pendidikan terbaik tidak hanya terjadi di ruang kelas. Karena itu, kami menghadirkan berbagai program ekstrakurikuler yang mendukung pengembangan bakat, minat, dan karakter santri secara menyeluruh – mulai dari bidang akademik, bahasa, seni, olahraga, hingga kepemimpinan dan sosial.</p>
            <div class="w-full flex mb-4">
              <div class="w-full md:w-1/2 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">
                <img src="https://picsum.photos/201/100" alt="eskul" class="w-full h-auto rounded-lg shadow-md">
              </div>
              <div class="w-1/2 px-4 hidden md:block intersect:motion-delay-[300] intersect:motion-ease-spring-smooth intersect-half origin-left">
                <img src="https://picsum.photos/200/100" alt="eskul" class="w-full h-auto rounded-lg shadow-md">
              </div>
            </div>
              <x-text-header>Ekstrakurikuler Akademik & Bahasa</x-text-header>
              <p class="mb-4 intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Santri dibimbing untuk menjadi pribadi yang cerdas dan siap bersaing di tingkat global.</p>
              <p class="mb-4 font-bold intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">English Club</p>
              <p class="mb-4 text-justify intersect:motion-scale-in-0 intersect:motion-ease-spring-smooth intersect-half origin-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor facilis accusamus enim voluptatem voluptate quod, praesentium ipsum dolores, optio quaerat unde beatae obcaecati eum tempora eos expedita laboriosam est? Odit quod quibusdam quam dignissimos non, totam voluptates optio harum debitis ratione rem corrupti ipsam alias natus sed labore eum iure.</p>
          </div>

          {{-- standar mutu --}}
          <div class="w-full md:w-1/4 px-4">
            <div class="input input-lg flex max-w-sm rounded-md border border-gray-300 mb-4">
                <input type="search" class="grow" placeholder="Search" id="kbdInput" />
                <label class="sr-only" for="kbdInput">Search</label>
              </div>
            <x-text-header>Category</x-text-header>
            <div x-data @notify.window="alert($event.detail.message)">
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Akademik & Bahasa' })">
                Akademik & Bahasa
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Teknologi & Keterampilan' })">
                      Teknologi & Keterampilan
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Keislaman & Seni Islami' })">
                      Keislaman & Seni Islami
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
              <button class="btn btn-primary rounded-md w-full justify-between mb-2"
                      @click="$dispatch('notify', { message: 'Olahraga & Kesehatan Jasmani' })">
                      Olahraga & Kesehatan Jasmani
                <svg class="fill-current h-4 w-4 transform transition-transform duration-200 -rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
              </button>
            </div>
            
          </div>
          
      </div>
  </div>

</x-app-layout>

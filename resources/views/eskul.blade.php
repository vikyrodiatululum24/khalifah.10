<x-app-layout>
  <x-slot name="header">
      <h2 class="font-bold text-center text-3xl md:text-6xl uppercase text-gray-800 leading-tight">
          ekstrakurikuler
      </h2>
      <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> Ekstrakurikuler</p>
  </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
      <div class="md:flex">
          <div class="w-full md:w-3/4 px-4 text-justify">
            
            <x-text-header>Ekstrakurikuler Pesantren Modern Khalifah</x-text-header>
            <p class="font-bold mb-4 italic">Menumbuhkan Bakat, Mengasah Potensi, Membangun Karakter</p>
            <p class="mb-4">Di Pesantren Modern Khalifah, kami percaya bahwa pendidikan terbaik tidak hanya terjadi di ruang kelas. Karena itu, kami menghadirkan berbagai program ekstrakurikuler yang mendukung pengembangan bakat, minat, dan karakter santri secara menyeluruh – mulai dari bidang akademik, bahasa, seni, olahraga, hingga kepemimpinan dan sosial.</p>
            <div class="w-full flex mb-4">
              <div class="w-1/2">
                <img src="https://picsum.photos/201/100" alt="eskul" class="w-full h-auto rounded-lg shadow-md">
              </div>
              <div class="w-1/2 px-4 hidden md:block">
                <img src="https://picsum.photos/200/100" alt="eskul" class="w-full h-auto rounded-lg shadow-md">
              </div>
            </div>
              <x-text-header>Ekstrakurikuler Akademik & Bahasa</x-text-header>
              <p class="mb-4">Santri dibimbing untuk menjadi pribadi yang cerdas dan siap bersaing di tingkat global.</p>
              <p class="mb-4 font-bold">English Club</p>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor facilis accusamus enim voluptatem voluptate quod, praesentium ipsum dolores, optio quaerat unde beatae obcaecati eum tempora eos expedita laboriosam est? Odit quod quibusdam quam dignissimos non, totam voluptates optio harum debitis ratione rem corrupti ipsam alias natus sed labore eum iure.</p>
          </div>

          {{-- standar mutu --}}
          <div class="w-full md:w-1/4 px-4">
              <x-text-header>Category</x-text-header>
              <div x-data="{ open: 1 }" class="space-y-4">
                  <div>
                      <button @click="open === 1 ? open = null : open = 1" class="w-full text-left bg-primary rounded-md shadow-md border-1 border-gray-800 flex justify-between px-4 py-2 font-bold">
                          Kriteria Kenaikan Kelas
                          <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 1 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                          </svg>
                      </button>
                      <div x-show="open === 1" x-collapse class="bg-gray-100 px-4 py-2">
                          <ul class="list-decimal p-2 text-justify">
                              <li>Memenuhi nilai minimal pada semua mata pelajaran.</li>
                              <li>Kehadiran minimal 90% selama satu tahun ajaran.</li>
                              <li>Tidak memiliki catatan pelanggaran berat tata tertib.</li>
                              <li>Aktif dalam kegiatan ekstrakurikuler dan program pesantren.</li>
                          </ul>
                      </div>
                  </div>
                  <div>
                      <button @click="open === 2 ? open = null : open = 2" class="w-full text-left bg-primary rounded-md shadow-md border-1 border-gray-800 flex justify-between px-4 py-2 font-bold">
                          Standar Kelulusan
                          <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 2 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                          </svg>
                      </button>
                      <div x-show="open === 2" x-collapse class="bg-gray-100 px-4 py-2">
                          <ul class="list-decimal p-2 text-justify">
                              <li>Lulus ujian nasional dan ujian pesantren.</li>
                              <li>Hafalan Al-Qur’an minimal 5 juz.</li>
                              <li>Memiliki nilai akhlak dan kepribadian yang baik.</li>
                              <li>Menyelesaikan program pembelajaran diniyah dan akademik.</li>
                          </ul>
                      </div>
                  </div>
                  <div>
                      <button @click="open === 3 ? open = null : open = 3" class="w-full text-left bg-primary rounded-md shadow-md border-1 border-gray-800 flex justify-between px-4 py-2 font-bold">
                          Kriteria Siswa Terbaik
                          <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 3 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                          </svg>
                      </button>
                      <div x-show="open === 3" x-collapse class="bg-gray-100 px-4 py-2">
                          <ul class="list-decimal p-2 text-justify">
                              <li>Memiliki prestasi akademik tertinggi di kelas.</li>
                              <li>Aktif dalam kegiatan ekstrakurikuler dan organisasi.</li>
                              <li>Menunjukkan sikap disiplin dan tanggung jawab.</li>
                              <li>Menjadi teladan bagi teman-teman sekelas.</li>
                          </ul>
                      </div>
                  </div>
                  <div>
                      <button @click="open === 4 ? open = null : open = 4" class="w-full text-left bg-primary rounded-md shadow-md border-1 border-gray-800 flex justify-between px-4 py-2 font-bold">
                          Kriteria Siswa Teladan
                          <svg class="fill-current h-4 w-4 transform transition-transform duration-200" :class="open === 4 ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                          </svg>
                      </button>
                      <div x-show="open === 4" x-collapse class="bg-gray-100 px-4 py-2">
                          <ul class="list-decimal p-2 text-justify">
                              <li>Memiliki akhlak mulia dan sikap yang baik terhadap guru dan teman.</li>
                              <li>Aktif dalam kegiatan sosial dan keagamaan.</li>
                              <li>Menunjukkan kepemimpinan yang baik.</li>
                              <li>Konsisten dalam menjaga nilai akademik dan non-akademik.</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-center text-6xl uppercase text-gray-800 leading-tight">
            About Us
        </h2>
        <p class="text-center text-gray-600 mt-4 text-lg">Home <span class="text-primary">//</span> About Us</p>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-20 pb-20">
        <div class="md:flex">
            <div class="w-full sm:w-1/2 md:1/3 p-6">
                <img src="{{ asset('img/selayang pandang.png') }}" alt="about"
                    class="w-full h-full object-cover rounded-lg shadow-lg">
            </div>
            <div class="w-full sm:1/2 p-6">
                <div class="p-1 bg-primary opacity-50 rounded-md w-20 text-center mb-4">
                    <p class="text-xs">About Us</p>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">SELAYANG PANDANG</h2>
                <p class="text-gray-600 mt-4 text-sm text-justify">Pesantren Modern Khalifah berdiri pada tahun 2012
                    berada dibawah
                    naungan yayasan wakaf khalifah. Pada tahun ini PM. Khalifah memiliki Lembaga formal dibawah naungan
                    KEMENAG dan kemendiknas yaitu SMP Khalifah Boarding  School dan SMA Khalifah Boarding School. PM.
                    Khalifah didirikan pada tahun 2012, dengan idealisme dari para pendiri dan para wakif yang memiliki
                    perhatian khusus pada dunia pendidikan. Berawal dari kekhawatiran pada perkembangan generasi muda
                    ditengah era globalisasi dan liberalisasi ini, maka para pengusaha muda berhimpun dan bertekad
                    menyatukan visi kami dalam rangka membangun sebuah lembaga pendidikan Islam yang menitikberatkan
                    pada pembentukan karakter yang Islami.Sistem pembinaan 24 jam dengan konsep sekolah berasrama
                    dinilai efektif untuk menerapkan ilmu yang diserap dikehidupan sehari-hari. Adapun kurikulum yang
                    diterapkan merupakan kurikulum nasional yang disandingkan dengan kurikulum jaringan IslamTerpadu.
                    Para murid juga mampu mengembangkan bakat dan minatnya karena tersedianya fasilitas ekstrakurikuler
                    yang menunjang.
                    Tujuan dari pendidikan Islam adalah mengeluarkan manusia dari kungkungan penghambaan kepada makhluk
                    menuju penghambaan hanya kepada Allah semata. Dari pemahaman tersebut bahwa PM. Khalifah diharapkan
                    akan lahir seorang hamba yang hanya menghambakan dirinya kepada Allah SWT.Selain dari pada itu
                    alumnus PM. Khalifah akan menjadi DAI yang membawa kepada persatuan umat yaitu rahmat bagi semesta
                    alam. Mohon doa dari seluruh umat Islam semoga PM. Khalifah tetap eksis untuk kemajuan Islam,
                    Bangsa, dan Negara ini.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-image bg-cover bg-no-repeat bg-center relative"
        style="background-image: url('{{ asset('img/bg_visimisi.png') }}');">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-20 pb-20">
            <div class="p-1 bg-primary mx-auto opacity-50 rounded-md w-20 text-center mb-10">
                <p class="text-xs">Visi & Misi</p>
            </div>
            <div class="md:flex gap-4">
                <div class="w-full sm:1/2 md:1/2 mb-4">
                    <div class="rounded-md border border-gray-800 shadow-sm p-6 relative">
                        <img src="{{ asset('img/kutip.png') }}" alt="kutip" class="absolute -top-5 left-0 w-10 h-10">
                        <h2 class="text-3xl font-bold text-gray-800">Visi</h2>
                        <p class="text-gray-600 mt-4 text-sm text-justify">MEWUJUDKAN CALON PEMIMPIN MASA DEPAN YANG
                            BERKARAKTER ISLAMI</p>
                    </div>
                </div>
                <div class="w-full sm:1/2 md:1/2 rounded-md border border-gray-800 shadow-sm p-6 relative mb-4">
                    <img src="{{ asset('img/kutip.png') }}" alt="kutip" class="absolute -top-5 left-0 w-10 h-10">
                    <h2 class="text-3xl font-bold text-gray-800">Misi</h2>
                    <ul class="list-disc pl-5 text-gray-600 mt-4 text-sm">
                        <li>MENDIDIK PEMIMPIN YANG CINTA AL-QUR'AN, MEMILIKI KESEIMBANGAN RUHIYYAH, AQLIYYAH DAN
                            JASADIYYAH</li>
                        <li>MENANAMKAN SIFAT JUJUR, TANGGUNG JAWAB, DAN MEMILIKI KEPEDULIAN YANG TINGGI</li>
                        <li>MENDIDIK PEMIMPIN YANG MEMILIKI KETERAMPILAN TEKNOLOGI INFORMASI, BERBAHASA ASING DAN
                            BERDAYA SAING GLOBAL</li>
                        <li>MENYEDIAKAN SEKOLAH DENGAN TENAGA PENDIDIK DAN KEPENDIDIKAN YANG BERKUALITAS DAN DIDUKUNG
                            DENGAN FASILITAS PENDIDIKAN YANG LENGKAP</li>
                        <li>BERPERAN SERTA DALAM MENYEDIAKAN PENDIDIKAN YANG BERKUALITAS UNTUK MASYARAKAT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

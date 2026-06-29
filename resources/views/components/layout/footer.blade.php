<footer  class="bg-cover bg-center bg-no-repeat text-white" style="background-image:url('{{ asset('images/footer.png') }}');">

    <div class="max-w-7xl mx-auto px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">

        {{-- LOGO & DESKRIPSI --}}
        <div>
            <img src="{{ asset('images/logo-prism.png') }}">
            <div class="w-full border-b border-white/50 mb-4"></div>
            <p class="text-sm text-white/80 mb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eum, quasi voluptas nulla temporibus soluta.
            </p>
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo-ig.png') }}" class="w-6">
                <p class="text-sm">@pbl.trpl215</p>
            </div>
        </div>

        {{-- PROGRAM STUDI --}}
        <div>
            <h2 class="font-semibold text-lg mb-3">Program Studi</h2>
            <ul class="space-y-2 text-sm text-white/80">
                @foreach($semuaProdi as $p)
                    <li class="hover:cursor-pointer hover:text-white">
                        <a href="{{ route('prodi.show', $p->kode_prodi) }}">
                            {{ $p->nama_prodi }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- MENU --}}
        <div>
                <h2 class="font-semibold text-lg mb-3">Menu</h2>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="#home" class="text-white/80 hover:text-white transition duration-200">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="#tentang" class="text-white/80 hover:text-white transition duration-200">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="#programStudi" class="text-white/80 hover:text-white transition duration-200">
                            Program Studi
                        </a>
                    </li>

                    <li>
                        <a href="#kontak" class="text-white/80 hover:text-white transition duration-200">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

        {{-- KONTAK --}}
        <div>
            <img src="{{ asset('images/logo-polibatam.png') }}" alt="" class="w-40">
            <p class="text-sm text-white/80 mb-3">
                Alamat : Jl. Ahmad Yani Batam Kota. Kota Batam. Kepulauan Riau. Indonesia
            </p>
            <p class="text-sm text-white/80">
                Phone : +62-778-469858 Ext.1017 <br>
                Fax : +62-778-463620 <br>
                Email : info@polibatam.ac.id
            </p>
        </div>

    </div>

    {{-- COPYRIGHT --}}
    <div class="bg-gradient-to-r from-[#470398] via-[#1F41A9] to-[#00A5FE] text-center text-sm py-2">
        ©2026 Platform for Resource & Study Management
    </div>

</footer>
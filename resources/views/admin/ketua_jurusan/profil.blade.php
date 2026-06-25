<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/image-7.png') }}')">
        {{-- sidebar --}}
        <x-admin.sidebar></x-admin.sidebar>

        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        {{-- main content --}}
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header>Profile</x-admin.header>

            <div class="relative rounded-2xl bg-white p-6 md:p-10 shadow-xl min-h-[300px] border border-gray-300">

                {{-- tombol edit --}}
                <button onclick="openModal()" class="absolute top-5 right-5 btn-img cursor-pointer">
                    <img src="{{ asset('images/icon-edit(hitam).svg') }}" alt="icon" width="20" height="20" hover:scale-[1.025] transition-all hover:opacity-90>
                </button>

                {{-- Baris atas --}}
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <img src="{{ asset('images/Profile-Circle.png') }}" alt="profil"
                        class="w-32 h-32 md:w-40 md:h-40 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full">

                    <div class="text-sm text-gray-700 space-y-4 text-center md:text-left font-semibold">
                        <h2 class="text-xl font-bold mb-2 bg-gradient-to-r from-[#0285FE] to-[#3405CB] bg-clip-text text-transparent">{{ $user->nama }}</h2>
                        <p>Nama : {{ $user->nama }}</p>
                        <p>NIP : {{ $user->nip }}</p>
                        <p>Email : {{ $user->email }}</p>
                        <p>Program studi : Teknik Informatika</p>
                    </div>
                </div>

                {{-- Baris bawah --}}
                <div class="mt-8 flex flex-col gap-3 md:absolute md:bottom-6 md:left-8 md:right-8 md:flex-row md:justify-between">

                    <div>
                        @if($pendingTransfer)
                            <div class="text-center bg-blue-50 border border-blue-200 rounded-xl p-4">
                                <p class="text-xs text-gray-500 mb-1">Menunggu konfirmasi</p>
                                <p class="text-xs text-blue-600 mb-2">
                                    → {{ $pendingTransfer->new_email }}
                                </p>

                                <p class="text-lg font-bold text-blue-700" id="countdown">
                                    --:--:--
                                </p>

                                <button onclick="cancelTransfer()"
                                    class="mt-2 text-xs text-red-500 hover:text-red-700 underline hover:scale-[1.025] transition-all ">
                                    Batalkan Transfer
                                </button>
                            </div>

                            <div id="expiresAt" data-expires="{{ $pendingTransfer->expires_at->toIso8601String() }}"
                                class="hidden">
                            </div>
                        @else
                            <button onclick="openVerifyModal()"
                                class="w-full md:w-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] px-6 py-3 text-white shadow hover:scale-[1.025] transition-all hover:opacity-90">
                                Ubah Ketua Jurusan
                            </button>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full md:w-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] px-6 py-3 text-white shadow hover:scale-[1.025] transition-all hover:opacity-90 cursor-pointer">
                            Logout ↗
                        </button>
                    </form>

                </div>

            </div>
        </main>

        <!-- Modal Edit Profil -->
        <div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">✕</button>
                <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">Update Profile</h2>
                <form method="POST" action="{{ route('admin.profile-ketua-jurusan.update', $user->id_user) }}">
                    @csrf @method('PUT')

                    <label>
                        <span class="text-sm">Nama</span>
                        <input type="text" name="nama" value="{{ old('nama', $user->nama) }}"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                    <label>
                        <span class="text-sm">NIP</span>
                        <input type="text" name="nip" value="{{ old('nip', $user->nip) }}"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                    <label>
                        <span class="text-sm">Email</span>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                    <label>
                        <span class="text-sm">Password Baru (kosongkan jika tidak diubah)</span>
                        <input type="password" name="password" placeholder="Masukkan Password Baru"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                        <label for="password_confirmation">
                            <span>konfirmasi Password</span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Konfirmasi Password"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-40 rounded-xl bg-gradient-to-r bg-gradient-to-r from-[#0284FD] to-[#3207CC]  py-2 text-white cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>











        <!-- Modal Verifikasi -->
        <div id="verifyModal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeVerifyModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">✕</button>
                <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">Verifikasi Akun</h2>
                <div id="verifyError" class="hidden bg-red-100 text-red-600 p-3 rounded-lg text-sm mb-4"></div>
                <label class="block mb-3">
                    <span class="text-sm">Email</span>
                    <input type="email" id="verifyEmail" placeholder="Masukkan email anda"
                        class="py-2 px-3 border border-gray-300 rounded w-full block text-sm mt-1">
                </label>
                <label class="block mb-5">
                    <span class="text-sm">Kata Sandi</span>
                    <input type="password" id="verifyPassword" placeholder="Masukkan kata sandi anda"
                        class="py-2 px-3 border border-gray-300 rounded w-full block text-sm mt-1">
                </label>
                <div class="flex justify-center">
                    <button onclick="submitVerify()"
                        class="w-40 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC]  py-2 text-white cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                        Verifikasi
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Input Email Ketua Baru -->
        <div id="transferModal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeTransferModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">✕</button>
                <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">Ubah Ketua Jurusan</h2>
                <div id="transferError" class="hidden bg-red-100 text-red-600 p-3 rounded-lg text-sm mb-4"></div>
                <label class="block mb-5">
                    <span class="text-sm">Email Ketua Jurusan Baru</span>
                    <input type="email" id="newEmail" placeholder="Masukkan email ketua jurusan baru"
                        class="py-2 px-3 border border-gray-300 rounded w-full block text-sm mt-1">
                </label>
                <div class="flex justify-center">
                    <button onclick="submitTransfer()"
                        class="w-40 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC]  py-2 text-white cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                        Kirim
                    </button>
                </div>
            </div>
        </div>

        <!-- Popup Notifikasi -->
        <div id="successPopup"
            class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg z-50">
            ✅ <span id="successMsg"></span>
        </div>
        <div id="errorPopup"
            class="fixed top-5 right-5 hidden bg-red-500 text-white px-6 py-3 rounded-xl shadow-lg z-50">
            ❌ <span id="errorMsg"></span>
        </div>

    </body>
    
    <script>
        const CSRF = '{{ csrf_token() }}';

        function showPopup(type, message) {
            const popup = document.getElementById(type + 'Popup');
            document.getElementById(type + 'Msg').textContent = message;
            popup.classList.remove('hidden');
            setTimeout(() => popup.classList.add('hidden'), 3000);
        }

        function toggleModal(id, show) {
            const el = document.getElementById(id);
            if (show) { el.classList.remove('hidden'); el.classList.add('flex'); }
            else { el.classList.add('hidden'); el.classList.remove('flex'); }
        }

        function openModal() { toggleModal('modal', true); }
        function closeModal() { toggleModal('modal', false); }
        function openVerifyModal() { toggleModal('verifyModal', true); }
        function closeVerifyModal() { toggleModal('verifyModal', false); }
        function openTransferModal() { toggleModal('transferModal', true); }
        function closeTransferModal() { toggleModal('transferModal', false); }

        async function submitVerify() {
            const email = document.getElementById('verifyEmail').value;
            const password = document.getElementById('verifyPassword').value;
            const errorDiv = document.getElementById('verifyError');

            if (!email || !password) {
                errorDiv.textContent = 'Email dan password wajib diisi!';
                errorDiv.classList.remove('hidden');
                return;
            }

            try {
                const res = await fetch('{{ route("admin.transfer.verify") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF },
                    body: JSON.stringify({ email, password })
                });
                const data = await res.json();

                if (data.success) {
                    closeVerifyModal();
                    openTransferModal();
                } else {
                    errorDiv.textContent = data.message;
                    errorDiv.classList.remove('hidden');
                }
            } catch (e) {
                errorDiv.textContent = 'Terjadi kesalahan, coba lagi.';
                errorDiv.classList.remove('hidden');
            }
        }

        async function submitTransfer() {
            const newEmail = document.getElementById('newEmail').value;
            const errorDiv = document.getElementById('transferError');

            if (!newEmail) {
                errorDiv.textContent = 'Email wajib diisi!';
                errorDiv.classList.remove('hidden');
                return;
            }

            try {
                const res = await fetch('{{ route("admin.transfer.initiate") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF },
                    body: JSON.stringify({ new_email: newEmail })
                });
                const data = await res.json();

                if (data.success) {
                    closeTransferModal();
                    showPopup('success', 'Link konfirmasi terkirim ke ' + data.new_email);
                    setTimeout(() => location.reload(), 1500);
                } else {
                    errorDiv.textContent = data.message;
                    errorDiv.classList.remove('hidden');
                }
            } catch (e) {
                errorDiv.textContent = 'Terjadi kesalahan, coba lagi.';
                errorDiv.classList.remove('hidden');
            }
        }

        async function cancelTransfer() {
            if (!confirm('Yakin ingin membatalkan transfer jabatan?')) return;

            try {
                const res = await fetch('{{ route("admin.transfer.cancel") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF },
                });
                const data = await res.json();

                if (data.success) {
                    showPopup('success', 'Transfer dibatalkan!');
                    setTimeout(() => location.reload(), 1500);
                }
            } catch (e) {
                showPopup('error', 'Gagal membatalkan, coba lagi.');
            }
        }

        // Countdown
        const expiresEl = document.getElementById('expiresAt');
        if (expiresEl) {
            const expiresAt = new Date(expiresEl.dataset.expires);
            const countdownEl = document.getElementById('countdown');

            function updateCountdown() {
                const diff = expiresAt - new Date();
                if (diff <= 0) {
                    countdownEl.textContent = 'Kedaluwarsa';
                    setTimeout(() => location.reload(), 2000);
                    return;
                }
                const h = Math.floor(diff / 3600000);
                const m = Math.floor((diff % 3600000) / 60000);
                const s = Math.floor((diff % 60000) / 1000);
                countdownEl.textContent =
                    String(h).padStart(2, '0') + ':' +
                    String(m).padStart(2, '0') + ':' +
                    String(s).padStart(2, '0');
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }


        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-[120%]');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-[120%]');
            overlay.classList.add('hidden');
        });


        function toggleProfileCard() {
            document
                .getElementById('profileCard')
                .classList
                .toggle('hidden');
        }



        const profileBtn = document.getElementById('profileBtn');
        const profileCard = document.getElementById('profileCard');

        profileBtn.addEventListener('click', function (e) {

            e.stopPropagation();

            profileCard.classList.toggle('hidden');

        });

        profileCard.addEventListener('click', function (e) {

            e.stopPropagation();

        });

        document.addEventListener('click', function () {

            profileCard.classList.add('hidden');

        });

    </script>
</x-layout.layout>
        <aside class="fixed top-4 left-4 w-64 h-[calc(100vh-2rem)] rounded-3xl bg-white p-5 shadow-lg border border-gray-300">
            <div class="mb-10 flex items-center gap-3">
                <div class="h-12 w-20 rounded-full bg-cover bg-center">
                    <img src="{{ asset('images/logo prism.png') }}" alt="">
                </div>

                <div>
                    <h1 class="text-[#0161C5] text-2xl font-bold">PRISM</h1>
                    <p class="text-xs text-[#0161C5]">platform for resource & study Management</p>
                </div>
            </div>

            <nav class="space-y-3">
                <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'block rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] px-4 py-3 text-white shadow'  :  'block rounded-xl px-4 py-3 text-blue-600 hover:bg-gray-100' }}">Dashboard</a>
                <a href="/admin/program-studi" class="{{ request()->is('admin/program-studi') ? 'block rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] px-4 py-3 text-white shadow'  :  'block rounded-xl px-4 py-3 text-blue-600 hover:bg-gray-100' }}">Program Studi</a>
                <a href="/admin/akun" class="{{ request()->is('admin/akun') ? 'block rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] px-4 py-3 text-white shadow'  :  'block rounded-xl px-4 py-3 text-blue-600 hover:bg-gray-100' }}">Akun</a>
                <a href="/admin/profil" class="{{ request()->is('admin/profil') ? 'block rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] px-4 py-3 text-white shadow'  :  'block rounded-xl px-4 py-3 text-blue-600 hover:bg-gray-100' }}">Profil</a>
            </nav>
        </aside>
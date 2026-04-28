<x-layout.layout>
  <body class="font-[Montserrat]">
      <div class="min-h-screen w-full flex flex-col sm:flex-row">

    <!-- LEFT SIDE -->
    <div
      class="w-full h-45 sm:w-1/2 sm:h-screen bg-cover bg-center rounded-b-full sm:rounded-b-none sm:rounded-tr-[100px] sm:rounded-br-[100px] flex items-center justify-center sm:justify-start transition-all"
      style="background-image:url('{{ asset('images/bg-login.png') }}')">

      <div class="text-center sm:text-left pl-0 sm:pl-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white">HELLO!</h1>
        <h1 class="text-4xl sm:text-6xl font-extrabold text-white">Welcome</h1>
      </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="sm:w-1/2 sm:h-screen flex flex-col justify-center items-center px-10 py-10 md:px-1 lg:px-20">
      <div class="flex flex-col items-end gap-6">
                    <img src="{{ asset('../images/Profile-Circle.png') }}" alt="profil"
                        class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full ">
                </div>

      <h2 class="text-2xl font-bold mb-6">Login</h2>

      <!-- Form -->
      <form class="w-full px-12" method="POST" action="{{ route('login.store') }}">
    @csrf

    <div>
        <label class="text-sm font-semibold">Email</label>
        <div class="flex items-center mt-1 border rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-purple-400">
            <img src="{{ asset('images/username.png') }}" class="w-5 h-5 mr-2" />
            <input type="email" name="email" placeholder="Masukkan Email" 
                class="w-full outline-none" value="{{ old('email') }}" required/>
        </div>
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-3">
        <label class="text-sm font-semibold">Password</label>
        <div class="flex items-center mt-1 border rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-purple-400">
            <img src="{{ asset('images/Password.png') }}" class="w-5 h-5 mr-2" />
            <input type="password" name="password" placeholder="Masukkan password" 
                class="w-full outline-none" required/>
        </div>
    </div>

    <input class="w-full shadow-xl bg-gradient-to-r from-[#4663E5] to-[#9A55FF] text-white py-2 rounded-lg transition mt-5 hover:from-[#0029e2] hover:to-[#6200f6] hover:scale-105 hover:cursor-pointer" 
        type="submit" value="Login">
</form>

    </div>

  </div>
  </body>
</x-layout.layout>
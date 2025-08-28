

<div class="bg-gradient-to-br from-gray-950 to-gray-800 min-h-screen flex items-center justify-center p-6">
  <div wire:poll.1s class="w-full max-w-md bg-gray-800 rounded-2xl border border-gray-700 p-8 shadow-2xl backdrop-blur-sm transform transition-all duration-300 ease-in-out hover:shadow-lg hover:border-purple-500 m-4">
@vite('resources/css/app.css')    
@if ($runner)
      <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 mb-6 text-center tracking-tight">
        ✨ Runner Ditemukan ✨
      </h2>
      <div class="space-y-5 text-lg">
        <div class="bg-gray-700 p-4 rounded-lg flex items-center justify-between shadow-md">
          <span class="text-gray-300 font-semibold flex items-center">
            <svg class="w-6 h-6 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            Nama:
          </span>
          <span class="text-white font-bold">{{ $runner->name }}</span>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg flex items-center justify-between shadow-md">
          <span class="text-gray-300 font-semibold flex items-center">
            <svg class="w-6 h-6 text-pink-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-2.414-2.414A1 1 0 0015.586 6H7a2 2 0 00-2 2v11a2 2 0 002 2z"></path></svg>
            Bib:
          </span>
          <span class="text-white font-bold">{{ $runner->bib }}</span>
        </div>
      </div>
    @else
      <p class="text-xl text-gray-400 text-center font-medium py-8">
        Belum ada runner yang terdeteksi. Silakan coba lagi. 🏃‍♂️
      </p>
    @endif
  </div>
</div>

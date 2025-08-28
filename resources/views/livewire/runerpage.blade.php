<form wire:submit.prevent="submit">
@vite('resources/css/app.css')
<div class="bg-gradient-to-br from-gray-950 to-gray-800 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-lg bg-gray-800 rounded-xl border border-gray-700 p-8 shadow-2xl backdrop-blur-sm">
    <h2 class="text-3xl font-extrabold text-white mb-8 text-center tracking-wide">Formulir Pendaftaran Acara</h2>
      <div>
        <label for="bib" class="block text-sm font-medium text-gray-300 uppercase tracking-wider">
          Nomor Peserta (Bib Number)
        </label>
        <div class="relative mt-2">
          <input type="text" id="bib" wire:model="bib" class="block w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-colors duration-300">
          <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 11a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3-4a1 1 0 100-2 1 1 0 000 2z"/></svg>
          </div>
        </div>
      </div>
      <div class="pt-6">
        <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105">
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
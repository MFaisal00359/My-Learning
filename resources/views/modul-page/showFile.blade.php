<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">{{ $modul->nama_modul }}</h1>

        <p>Nama Modul: {{ $modul->nama_modul }}</p>
        <p>File Modul: {{ $modul->file_path }}</p>

        {{-- Tambahkan tampilan file modul sesuai kebutuhan --}}
        {{-- Contoh: --}}
        <embed src="{{ asset('storage/' . $modul->file_path) }}" type="application/pdf" width="100%" height="600px">
    </div>
</x-guest-layout>

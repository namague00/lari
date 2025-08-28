<div wire:poll.1s>
    @if ($runner)
        <h2>Runner Ditemukan</h2>
        <p><strong>Nama:</strong> {{ $runner->name }}</p>
        <p><strong>Bib:</strong> {{ $runner->bib }}</p>
    @else
        <p>Tidak ada runner</p>
    @endif
</div>
@php
    $qr = new \SimpleSoftwareIO\QrCode\Generator;
@endphp
<div>
    {!! $qr->size(80)->generate($getRecord()->bib) !!}
</div>

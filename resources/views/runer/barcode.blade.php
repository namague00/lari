<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barcode Peserta</title>
    <link href="https://fonts.googleapis.com/css?family=Inter:400,700&display=swap" rel="stylesheet">
    <style>
        body { background: #1a202c; color: #fff; font-family: 'Inter', sans-serif; }
        .container { max-width: 400px; margin: 40px auto; background: #2d3748; border-radius: 16px; padding: 32px; box-shadow: 0 8px 32px #0004; }
        h2 { font-size: 2rem; margin-bottom: 1rem; }
        .label { color: #a0aec0; }
        .value { color: #fff; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Barcode Peserta</h2>
        <div class="label">Nama:</div>
        <div class="value">{{ $runer->name }}</div>
        <div class="label">Bib:</div>
        <div class="value">{{ $runer->bib }}</div>
        @php
            $qr = new \SimpleSoftwareIO\QrCode\Generator;
        @endphp
        <div style="margin-top:2rem;">
            {!! $qr->size(180)->generate($runer->bib) !!}
        </div>
    </div>
</body>
</html>

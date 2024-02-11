<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Example</title>
</head>
<body>
    
    <h1>Barcador Example</h1>
    {{-- <p>Dato: {{ $data }}</p>
    <hr>

    <h2>Barcode SVG</h2>
    {!! $barcodeSVG !!}
    <hr>

    <h2>Barcode HTML</h2>
    {!! $barcodeHTML !!}
    <hr>

    <h2>Barcode PNG</h2>
    <img src="{{ $barcodePNGBase64 }}" alt="barcode">
    <hr>

    <h1>Barcador Example</h1>
    <hr> --}}

    <h2>DNS1D -> C39</h2>
    <p>Dato: {{ $data1 }}</p>
    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($data1, 'C39') }}" alt="barcode">
    <hr>
    
    <h2>DNS1D -> C128</h2>    
    <p>Dato: {{ $data3}}</p>  
    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($data3, 'C128') }}" alt="barcode">
    <hr>

    <h2>DNS2D -> QRCODE</h2>
    <p>Dato: {{ $data2 }}</p>
    <img src="data:image/png;base64,{{ DNS2D::getBarcodePNG($data2, 'QRCODE') }}" alt="barcode">
    <hr>



    <h2>DNS2D -> PDF417</h2>
    <p>Dato: {{ $data4}}</p>  
    <img src="data:image/png;base64,{{ DNS2D::getBarcodePNG($data4, 'PDF417') }}" alt="barcode4">
    <hr>

   
</body>
</html>










{{-- DNS1D::getBarcodePNG($data, 'C128'); --}}
{{-- DNS1D::getBarcodePNG($data, 'EAN13'); --}}
{{-- DNS1D::getBarcodePNG($data, 'UPCA'); --}}
{{-- DNS2D::getBarcodePNG($data, 'QRCODE'); --}}
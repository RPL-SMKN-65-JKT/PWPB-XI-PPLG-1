<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $totalUang = 0;
    @endphp
    @foreach ($students as $index => $item)
    @php
        $totalUang += $item['uang_jajan'];
    @endphp
        <p>INDEX KE - {{ $index }} | {{ $index != 3 ? 'Lalala' : '' }}</p>
        <p>Nomor: {{ $loop->iteration }}</p>
        <p>Nama: {{ $item['nama'] }}</p>
        <p>Kelas: {{ $item['kelas'] }}</p>
        <p>Uang Jajan: Rp {{ number_format($item['uang_jajan']) }}</p>
        <hr>
    @endforeach
    <h2>TOTAL SEMUA UANG JAJAN = RP {{ number_format($totalUang) }}</h2>
</body>
</html>

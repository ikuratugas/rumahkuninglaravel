<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rumah Kuning Laravel</title>
</head>
<body>
  <h1>ini halaman detail</h1>
  @foreach ($mahasiswa as $item)
    <h3>
      <a href="mahasiswa/{{ $item["nim"] }}">
        {{ $item["nama"] }}
      </a>
    </h3>
    <h4>
      <a href="mahasiswa/{{ $item["nim"] }}">
        {{ $item["nim"] }}
    </a>
</h4>
  @endforeach
</body>
</html>
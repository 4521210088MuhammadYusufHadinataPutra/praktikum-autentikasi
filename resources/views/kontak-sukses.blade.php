<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Terkirim</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Beranda</a> |
        <a href="{{ url('/kontak') }}">Kontak</a>
    </nav>

    <h1>Terima Kasih, {{ $nama }}!</h1>
    <p>Pesan kamu telah kami terima.</p>

    <ul>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Pesan:</strong> {{ $pesan }}</li>
    </ul>

    <a href="{{ url('/kontak') }}">Kirim pesan lain</a>
</body>
</html>

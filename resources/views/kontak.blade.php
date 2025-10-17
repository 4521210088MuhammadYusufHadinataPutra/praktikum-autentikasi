<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Kami</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        label { display: block; margin-top: 10px; }
        input, textarea {
            width: 100%; padding: 8px; margin-top: 5px;
            border: 1px solid #ccc; border-radius: 4px;
        }
        button {
            margin-top: 15px; padding: 10px 20px;
            background-color: #007bff; color: white;
            border: none; border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background-color: #0056b3; }
        nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Beranda</a> |
        <a href="{{ url('/tentang-kami') }}">Tentang kami</a>
    </nav>

    <h1>Hubungi Kami</h1>

    <form action="{{ url('/kontak') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="pesan">Pesan:</label>
        <textarea name="pesan" id="pesan" rows="4" required></textarea>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>

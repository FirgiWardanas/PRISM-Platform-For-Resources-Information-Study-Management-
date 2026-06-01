<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .container { background: white; padding: 30px; border-radius: 12px; max-width: 500px; margin: auto; }
        .btn { display: inline-block; padding: 12px 30px; background: linear-gradient(to right, #3b82f6, #8b5cf6); color: white; border-radius: 8px; text-decoration: none; margin: 20px 0; }
        .warning { color: #ef4444; font-size: 13px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: #1B4597;">Konfirmasi Jabatan Ketua Jurusan</h2>
        <p>Anda telah ditunjuk sebagai Ketua Jurusan baru di sistem PRISM.</p>
        <p>Klik tombol di bawah untuk mengkonfirmasi dan mengatur password akun Anda:</p>

        <a href="{{ $confirmationUrl }}" class="btn">Konfirmasi Jabatan</a>

        <p class="warning">
            ⚠️ Link ini berlaku hingga: <strong>{{ $expiresAt }}</strong><br>
            Jika Anda tidak merasa ditunjuk, abaikan email ini.
        </p>
    </div>
</body>
</html>
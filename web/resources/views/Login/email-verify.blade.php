<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tittle }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        img {
            width: 100%;
            max-width: 300px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        p {
            font-size: 16px;
            color: #666;
            margin: 10px 0 0;
        }
    </style>
</head>

<body>
    <div class="main">
        <img src="{{ asset('assets/img/rb_5400.png') }}" alt="Deskripsi Gambar">
        <h1>Email Verifikasi Sudah Dikirim</h1>
        <p>Silakan cek email Anda untuk melakukan verifikasi.</p>
    </div>
</body>

</html>

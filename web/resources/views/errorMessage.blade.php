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
            margin: 10px 0 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffc107;
            /* Warna kuning */
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #e0a800;
            /* Sedikit lebih gelap saat di hover */
        }
    </style>
</head>

<body>
    <div class="main">
        <img src="{{ asset($imgError) }}" alt="{{ $imgError }}">
        <h1>ERROR {{ $error }}</h1>
        <p>{{ $desError }}</p>
        @if ($error == '403')
            <a href="{{ url('/') }}">Go Back</a>
        @else
            <a href="{{ url()->previous() }}">Go Back</a>
        @endif

    </div>
</body>

</html>

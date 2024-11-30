<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tersimpan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            margin-bottom: 35px;
        }
        .btn-custom {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .response-message {
            text-align: center;
            margin-bottom: 30px;
        }
        .data-section {
            margin-top: 20px;
        }
        .data-section p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data yang Disimpan</h2>
        
        @if(count($data) > 0)
            <ul class="list-group">
                @foreach($data as $item)
                    <li class="list-group-item">
                        <strong>Nama:</strong> {{ $item['name'] }}<br>
                        <strong>NIM:</strong> {{ $item['nim'] }}
                    </li>
                @endforeach
            </ul>
        @else
            <p class="alert alert-warning">Data belum tersedia. Silakan masukkan data terlebih dahulu.</p>
        @endif

        @if(count($data) > 0)
            <form action="{{ route('session.clear') }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-block">Hapus Semua Data</button>
            </form>
        @endif

        <a href="{{ route('session.create') }}" class="btn btn-custom btn-block mt-3">Kembali ke Form</a>
    </div>
</body>
</html>

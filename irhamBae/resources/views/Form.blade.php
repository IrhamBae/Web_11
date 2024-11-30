<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            padding: 50px;
        }
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-link {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-link:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Input Data</h2>
        <form action="{{ route('session.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" required placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" class="form-control" required placeholder="Masukkan NIM">
            </div>
            <button type="submit" class="btn btn-custom btn-block">Simpan</button>
        </form>
        <a href="{{ route('session.display') }}" class="btn btn-link btn-block mt-3">Lihat Data</a>
    </div>
</body>
</html>

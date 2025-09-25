<!DOCTYPE html>
<html>
<head>
    <title>Data Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background: #f8f9fa; 
            margin: 0;
        }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .result {
            font-size: 24px;
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 Hasil Perhitungan</h1>
        <p>Parameter yang diterima: <strong>{{ $data - 66 }}</strong></p>
        <p>Ditambah dengan: <strong>66</strong></p>
        <p class="result">Hasil: {{ $data }}</p>
        
        <a href="/" class="btn">🏠 Kembali ke Home</a>
        @auth
            <a href="/dashboard" class="btn">📋 Dashboard</a>
        @endauth
    </div>
</body>
</html>
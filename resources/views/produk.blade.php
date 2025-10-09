<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Parameter {{ $parameter }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .alert {
            padding: 15px;
            margin: 20px 0;
            border: 1px solid transparent;
            border-radius: 5px;
            font-size: 16px;
        }
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeaa7;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .parameter-info {
            text-align: center;
            margin: 20px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Produk</h1>
        
        <div class="parameter-info">
            <strong>Parameter yang diterima: {{ $parameter }}</strong>
        </div>

        <x-alert type="{{ $alertType }}">{{ $alertMessage }}</x-alert>

        <div style="text-align: center; margin-top: 30px;">
            <p>Coba parameter lain:</p>
            <a href="{{ url('/produk/1') }}" style="margin: 0 10px; padding: 8px 16px; background: #007bff; color: white; text-decoration: none; border-radius: 4px;">Parameter 1</a>
            <a href="{{ url('/produk/2') }}" style="margin: 0 10px; padding: 8px 16px; background: #007bff; color: white; text-decoration: none; border-radius: 4px;">Parameter 2</a>
            <a href="{{ url('/produk/3') }}" style="margin: 0 10px; padding: 8px 16px; background: #007bff; color: white; text-decoration: none; border-radius: 4px;">Parameter 3</a>
            <a href="{{ url('/produk/4') }}" style="margin: 0 10px; padding: 8px 16px; background: #007bff; color: white; text-decoration: none; border-radius: 4px;">Parameter 4</a>
        </div>
    </div>
</body>
</html>

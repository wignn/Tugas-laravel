<!DOCTYPE html>
<html>
<head>
    <title>Owner Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background: #f8f9fa; 
            margin: 0;
        }
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header { 
            color: #0d6efd; 
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 10px;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }
        .feature-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #0d6efd;
        }
        .nav-links a {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            margin-top: 10px;
        }
        .nav-links a:hover {
            background: #0056b3;
        }
        .user-info {
            background: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">👑 Owner Dashboard</h1>
        
        <div class="user-info">
            <p><strong>Selamat datang, {{ auth()->user()->name }}!</strong></p>
            <p>Role: <span style="color: #0d6efd; font-weight: bold;">Owner</span></p>
            <p>Anda adalah pemilik sistem ini dengan akses tertinggi.</p>
        </div>

    
        
        <div class="nav-links">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>

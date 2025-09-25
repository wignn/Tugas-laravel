<!DOCTYPE html>
<html>
<head>
    <title>Management Dashboard</title>
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
            color: #198754; 
            border-bottom: 2px solid #198754;
            padding-bottom: 10px;
        }
        .role-badge { 
            padding: 8px 15px; 
            border-radius: 20px; 
            color: white; 
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            margin-left: 10px;
        }
        .role-admin { background: #dc3545; }
        .role-owner { background: #0d6efd; }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }
        .feature-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #198754;
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
        <h1 class="header"> Management Dashboard</h1>
        
        <div class="user-info">
            <p><strong>Selamat datang, {{ $user->name }}!</strong>
               <span class="role-badge role-{{ $user->role }}">{{ ucfirst($user->role) }}</span>
            </p>
            <p>Area khusus untuk <strong>Admin</strong> dan <strong>Owner</strong>.</p>
        </div>


        <div style="margin-top: 30px;">
            <h4>🔗 Quick Access:</h4>
            <div class="nav-links">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>

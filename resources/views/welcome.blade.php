<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f0f4f8 0%, #e6eef7 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        
        .header {
            background: linear-gradient(135deg, #b8b2b2ff 0%, #4c4646ff 100%);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
        }
        
        .logo {
            font-weight: 800;
            font-size: 2.2rem;
            margin-bottom: 1rem;
            display: inline-block;
        }
        
        .logo-icon {
            background: rgba(255, 255, 255, 0.2);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }
        
        .title {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            opacity: 0.9;
            font-size: 1.1rem;
        }
        
        .content {
            padding: 2.5rem 2rem;
        }
        
        .btn {
            display: block;
            width: 100%;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-bottom: 1rem;
        }
        
        .btn-primary {
            background: #4c4646ff;
            color: white;
        }
        
        .btn-primary:hover {
            background: #bdbac3ff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(94, 95, 101, 0.3);
        }
        
        .btn-secondary {
            border: 2px solid #0c0c0cff;
            color: #bdbac3ff;
            background: transparent;
        }
        
        .btn-secondary:hover {
            background: #bdbac3ff;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 79, 83, 0.3);
        }
        
        .footer {
            text-align: center;
            padding: 1.5rem;
            color: #718096;
            font-size: 0.9rem;
            border-top: 1px solid #eaeaea;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <div class="logo-icon">
                <i class="fas fa-tasks fa-xl"></i>
            </div>
            <h1 class="title">Welcome to Task Manager</h1>
            <p class="subtitle">Your Productivity Partner</p>
        </div>
        
        <div class="content">
            <a href="{{ route('login') }}" class="btn btn-primary">
                <i class="fas fa-sign-in-alt mr-2"></i>Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-secondary">
                <i class="fas fa-user-plus mr-2"></i>Register
            </a>
        
        <div class="footer">
            &copy; {{ date('Y') }} TaskFlow. All rights reserved.
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMCD Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #FDFCF8; 
            color: #2F362E; 
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        .text-jungle { color: #3A5F41; }
        .bg-jungle { background-color: #3A5F41; color: #ffffff; }
        
        .navbar {
            background-color: #FDFCF8;
            border-bottom: 1px solid #E8E4D9;
        }
        
        .card-minimal {
            background: #ffffff;
            border: 1px solid #E8E4D9;
            border-radius: 12px;
            transition: transform 0.2s ease;
        }
        
        .card-minimal:hover {
            transform: translateY(-5px);
            border-color: #3A5F41;
        }

        .btn-earth {
            background-color: #3A5F41;
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
        }
    </style>
</head>
<body>

    @include('layouts.navbar')

    <div class="container mt-4">
        @yield('content') 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
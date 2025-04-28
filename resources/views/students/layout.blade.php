<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMI Cikarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #0d6efd;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .content-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }
        .content-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 700px;
        }
        footer {
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <header>
        <h1 class="mb-0">ATMI Cikarang</h1>
    </header>

    <div class="content-wrapper">
        <div class="content-box">
            @yield('content')
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} ATMI Cikarang. All rights reserved.
    </footer>

</body>
</html>

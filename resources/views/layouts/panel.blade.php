<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST ALE</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Metaetiqueta CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background: linear-gradient(rgba(255, 192, 203, 0.5), rgba(255, 192, 203, 0.5)), url('https://example.com/chica-estudiando.jpg') no-repeat center center/cover;
        }
        .content {
            text-align: center;
            color: #333;
        }
        .content h1 {
            font-size: 4em;
            font-weight: 700;
            margin: 0;
            color: #FFC1CC;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
        }
        .content p {
            font-size: 1.2em;
            margin-top: 10px;
            color: #FFD1DC;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }
        .btn {
            margin-top: 30px;
            padding: 10px 25px;
            background-color: #FFEBEE;
            border: none;
            border-radius: 25px;
            color: #333;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #FFC1CC;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>TODOLIST ALE</h1>
            <p>Organiza tu día con elegancia y eficacia</p>
            <form method="POST" action="/tu-ruta-deseada">
                @csrf <!-- Token CSRF para evitar error 419 -->
                <button type="submit" class="btn">Comenzar</button>
            </form>
        </div>
    </div>
</body>
</html>
